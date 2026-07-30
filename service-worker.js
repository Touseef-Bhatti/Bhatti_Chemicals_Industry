const CACHE_NAME = 'static-v5';
const IS_LOCALHOST = /^(localhost|127\.0\.0\.1)$/.test(self.location.hostname);

if (IS_LOCALHOST) {
  self.addEventListener('install', (event) => {
    event.waitUntil(self.skipWaiting());
  });

  self.addEventListener('activate', (event) => {
    event.waitUntil((async () => {
      const cacheNames = await caches.keys();
      await Promise.all(cacheNames.map((cacheName) => caches.delete(cacheName)));
      await self.registration.unregister();
      const clients = await self.clients.matchAll({ type: 'window' });
      await Promise.all(clients.map((client) => client.navigate(client.url)));
    })());
  });
} else {

// Small critical assets to cache during install (fast)
const FILES_TO_CACHE = [
  './',
  'index.php',
  'services.php',
  'assets/css/header.css',
  'assets/css/services.css',
  'assets/css/footer.css',
  'assets/favicon/favicon-48x48.png'
];

// Video assets to warm in background (may be large). Adjust names to match your actual files.
// NOTE: filenames are case-sensitive on many servers; use the exact paths as served.
const VIDEO_FILES = [
  'assets/videos/first.mp4',
  'assets/videos/about.mp4',
  'assets/videos/product.mp4',
  'assets/videos/contact.mp4'
];

self.addEventListener('install', (event) => {
  // Cache small assets quickly so service worker activates fast
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => cache.addAll(FILES_TO_CACHE))
  );
  self.skipWaiting();
});

// On activate, warm video cache in background (non-fatal if any fail)
self.addEventListener('activate', (event) => {
  // Claim clients immediately and remove old caches from previous deployments.
  event.waitUntil((async () => {
    await self.clients.claim();
    const cacheNames = await caches.keys();
    await Promise.all(
      cacheNames
        .filter((cacheName) => cacheName !== CACHE_NAME)
        .map((cacheName) => caches.delete(cacheName))
    );
  })());

  // NOTE: We intentionally do NOT warm large video files during activation anymore.
  // Warming large assets can block network and slow page loads. Use the "warm-videos"
  // message from the page only when explicitly requested.
});

// Fetch handler: cache-first for videos, otherwise try cache then network
self.addEventListener('fetch', (event) => {
  const req = event.request;
  const url = new URL(req.url);

  // Handle navigation requests (HTML pages) with a network-first strategy so
  // returning visitors get fresh page content after deployments.
  const acceptHeader = req.headers && req.headers.get && req.headers.get('accept');
  const isNavigation = req.mode === 'navigate' || (acceptHeader && acceptHeader.indexOf('text/html') !== -1);
  if (isNavigation) {
    event.respondWith((async () => {
      const cache = await caches.open(CACHE_NAME);
      try {
        const networkResponse = await fetch(req);
        // Cache the HTML for future navigations if we get a successful response
        if (networkResponse && networkResponse.ok && networkResponse.type !== 'opaque' && networkResponse.status === 200) {
          try {
            await cache.put(req, networkResponse.clone());
          } catch (putErr) {
            console.warn('ServiceWorker: failed to cache navigation response for', req.url, putErr);
          }
        }
        return networkResponse;
      } catch (err) {
        // If network fails, fallback to cache if available, otherwise propagate
        const cached = await cache.match(req);
        if (cached) return cached;
        throw err;
      }
    })());
    return;
  }

  // Handle same-origin video requests with cache-first strategy
  if (/\.(mp4|webm|ogg)(\?.*)?$/i.test(url.pathname)) {
    // If the request contains a Range header, it's a streaming/partial request.
    // Let the browser handle ranged requests directly to avoid partial (206) responses being cached.
    if (req.headers && req.headers.get && req.headers.get('range')) {
      event.respondWith(fetch(req));
      return;
    }

    event.respondWith((async () => {
      const cache = await caches.open(CACHE_NAME);
      const cached = await cache.match(req);
      if (cached) return cached;
      try {
        const response = await fetch(req);
        // Only cache full 200 OK responses. Partial (206) responses and opaque responses must not be cached.
        if (response && response.ok && response.status === 200) {
          await cache.put(req, response.clone());
        } else {
          console.warn('ServiceWorker: not caching video', req.url, 'status:', response && response.status);
        }
        return response;
      } catch (err) {
        // If network fails and no cached version, let the fetch error propagate
        throw err;
      }
    })());
    return;
  }

  // Default: try cache, fall back to network
  event.respondWith(
    caches.match(req).then((response) => response || fetch(req))
  );
});

// Allow page to message service worker to (re)warm videos on demand
self.addEventListener('message', (event) => {
  if (!event.data) return;
  if (event.data.action === 'warm-videos') {
    caches.open(CACHE_NAME).then(async (cache) => {
      for (const url of VIDEO_FILES) {
        try {
          // Probe with HEAD first to see if server supports ranges or if the resource is reachable.
          const head = await fetch(url, { method: 'HEAD' });
          if (!head || !head.ok) {
            console.warn('ServiceWorker: HEAD failed for', url, 'status:', head && head.status);
            continue;
          }

          // If server indicates Accept-Ranges or returns 206 for HEAD, skip caching (we'll do a small range warm instead).
          const acceptRanges = head.headers.get('accept-ranges');
          if (head.status === 206 || (acceptRanges && acceptRanges !== 'none')) {
            // Perform a small ranged GET to warm the connection but do NOT cache the partial response.
            try {
              await fetch(url, { headers: { Range: 'bytes=0-65535' } }).catch(() => {});
              console.info('ServiceWorker: warmed connection for', url, '(range)');
            } catch (er) {
              console.warn('ServiceWorker: range warm failed for', url, er);
            }
            continue;
          }

          // Otherwise perform full GET and try to cache if 200 OK.
          const res = await fetch(url);
          if (res && res.ok && res.status === 200) {
            try {
              await cache.put(url, res.clone());
              console.info('ServiceWorker: cached', url);
            } catch (putErr) {
              // guard against NotFoundError / quota / other cache.put failures
              console.warn('ServiceWorker: cache.put failed for', url, putErr);
            }
          } else {
            console.warn('ServiceWorker: warm-videos skipping cache for', url, 'status:', res && res.status);
          }
        } catch (err) {
          console.warn('ServiceWorker: warm-videos failed for', url, err);
        }
      }
    });
  }
});
}

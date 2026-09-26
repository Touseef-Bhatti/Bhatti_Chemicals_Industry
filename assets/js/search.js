/* ============================================================
   SITE SEARCH ENGINE — Bhatti Chemicals Industry
   Instant search with product, application, page & contact matching
============================================================ */
(function () {
  'use strict';

  /* ---- Resolve base URL from the page (same pattern as PHP site_url) ---- */
  const BASE = (function () {
    const meta = document.querySelector('meta[name="site-base"]');
    if (meta) return meta.getAttribute('content');
    // Fallback: detect from current <link rel="stylesheet"> pointing to /assets/css/
    const link = document.querySelector('link[href*="/assets/css/"]');
    if (link) {
      const m = link.getAttribute('href').match(/^(.*?)\/assets\/css\//);
      if (m) return m[1];
    }
    return '';
  })();

  function siteUrl(path) {
    return BASE + path;
  }

  /* ============================================================
     SEARCH DATA — Products, Applications, Pages, Contact keywords
  ============================================================ */

  const PRODUCTS = [
    {
      name: 'Zinc Oxide (ZnO)',
      keywords: ['zinc oxide', 'zno', 'oxide', 'white zinc', '99.9', 'purity', 'zinc oxide powder', 'french process'],
      url: '/products/zinc-oxide.php',
      desc: 'Flagship product — 99.9% purity, French process manufactured'
    },
    {
      name: 'Zinc Ash Fine',
      keywords: ['zinc ash', 'ash', 'ash fine', '65%', '70%', 'metallic zinc', 'zinc ash fine'],
      url: '/products/zinc-ash.php',
      desc: '65–70% metallic zinc content, export quality'
    },
    {
      name: 'Zinc Ingot',
      keywords: ['zinc ingot', 'ingot', 'ingots', 'galvanizing', 'die casting', '99.95', 'slab', 'slabs'],
      url: '/products/zinc-ingot.php',
      desc: '≥99.95% purity for galvanizing & die casting'
    },
    {
      name: 'Zinc Dross',
      keywords: ['zinc dross', 'dross', 'recovery', 'feedstock', '85%', '95%', 'galvanizing residue'],
      url: '/products/zinc-dross.php',
      desc: '85–95% zinc content, recovery feedstock'
    },
    {
      name: 'Zinc Dust (APCD)',
      keywords: ['zinc dust', 'dust', 'apcd', 'powder', 'fine powder', '50%', '60%', 'metallic', 'zinc powder'],
      url: '/products/zinc-dust.php',
      desc: 'APCD 50–60% metallic zinc, fine powder grade'
    },
    {
      name: 'Zinc Alloy (ZAMAK)',
      keywords: ['zinc alloy', 'alloy', 'zamak', 'zamak 3', 'zamak 5', 'zamak 7', 'die cast', 'casting alloy'],
      url: '/products/zinc-alloy.php',
      desc: 'ZAMAK 3, 5, 7 alloy ingots for die casting'
    },
    {
      name: 'All Products',
      keywords: ['all products', 'product catalog', 'products', 'catalog', 'price list', 'product list'],
      url: '/products/',
      desc: 'Browse our complete zinc products catalog'
    }
  ];

  const APPLICATIONS = [
    {
      name: 'Rubber & Tyres',
      keywords: ['rubber', 'tyre', 'tyres', 'tire', 'tires', 'vulcanization', 'vulcanizing', 'rubber industry', 'tyre manufacturing', 'tire manufacturing', 'rubber compounding'],
      url: '/zinc-oxide-applications/rubber-and-tyres.php',
      desc: 'ZnO activator for vulcanization in rubber & tyre manufacturing'
    },
    {
      name: 'Paints & Coatings',
      keywords: ['paint', 'paints', 'coating', 'coatings', 'pigment', 'anti-corrosion', 'anticorrosion', 'paint industry', 'primer', 'primers', 'surface coating'],
      url: '/zinc-oxide-applications/paints-and-coatings.php',
      desc: 'UV protection & anti-corrosion pigment for paints'
    },
    {
      name: 'Ceramics & Glass',
      keywords: ['ceramic', 'ceramics', 'glass', 'glaze', 'glazes', 'ceramic industry', 'frit', 'enamel', 'tile', 'tiles', 'pottery'],
      url: '/zinc-oxide-applications/ceramics-and-glass.php',
      desc: 'Flux & opacity agent for ceramic glazes and glass'
    },
    {
      name: 'Pharmaceuticals & Ointments',
      keywords: ['pharmaceutical', 'pharmaceuticals', 'medicine', 'ointment', 'ointments', 'pharma', 'medical', 'calamine', 'lotion', 'diaper rash', 'zinc cream', 'wound healing', 'antiseptic'],
      url: '/zinc-oxide-applications/pharmaceuticals-and-ointments.php',
      desc: 'USP-grade ZnO for pharmaceutical ointments & creams'
    },
    {
      name: 'Cosmetics & Skincare',
      keywords: ['cosmetic', 'cosmetics', 'skincare', 'skin care', 'sunscreen', 'sunblock', 'beauty', 'makeup', 'foundation', 'face cream', 'uv protection', 'spf', 'skin'],
      url: '/zinc-oxide-applications/cosmetics-and-skincare.php',
      desc: 'Mineral UV filter for sunscreen & cosmetic formulations'
    },
    {
      name: 'Agriculture & Animal Feed',
      keywords: ['agriculture', 'animal feed', 'feed', 'farming', 'fertilizer', 'fertiliser', 'crop', 'poultry', 'livestock', 'cattle', 'zinc deficiency', 'soil', 'micronutrient', 'farm'],
      url: '/zinc-oxide-applications/agriculture-and-animal-feed.php',
      desc: 'Essential micronutrient for animal nutrition & crop health'
    },
    {
      name: 'All Applications',
      keywords: ['all applications', 'applications', 'uses', 'industrial uses', 'zinc oxide uses', 'industries'],
      url: '/zinc-oxide-applications/',
      desc: 'Explore all zinc oxide industrial applications'
    }
  ];

  const PAGES = [
    {
      name: 'Home',
      keywords: ['home', 'homepage', 'main page', 'landing'],
      url: '/',
      desc: 'Bhatti Chemicals Industry homepage'
    },
    {
      name: 'About Us',
      keywords: ['about', 'about us', 'company', 'history', 'overview', 'who we are', 'company profile', 'mission'],
      url: '/about.php',
      desc: 'Company overview, history & leadership'
    },
    {
      name: 'CEO & Vision',
      keywords: ['ceo', 'vision', 'founder', 'leadership', 'managing director', 'director'],
      url: '/about.php#ceo-vision',
      desc: 'Meet our CEO and company vision'
    },
    {
      name: 'Services',
      keywords: ['services', 'laboratory', 'lab', 'testing', 'lab report', 'analysis', 'quality control', 'qc'],
      url: '/services.php',
      desc: 'Laboratory testing & quality analysis services'
    },
    {
      name: 'Global Export',
      keywords: ['export', 'global', 'international', 'shipping', 'worldwide', 'import', 'trade', 'overseas', 'global export', 'countries', 'supply chain'],
      url: '/export.php',
      desc: 'International export & global supply chain'
    },
    {
      name: 'FAQs',
      keywords: ['faq', 'faqs', 'frequently asked', 'questions', 'help', 'support'],
      url: '/about.php#FAQs',
      desc: 'Frequently asked questions about our products'
    },
    {
      name: 'Privacy Policy',
      keywords: ['privacy', 'policy', 'privacy policy', 'data protection', 'gdpr'],
      url: '/privacy-policy.php',
      desc: 'Our data privacy and protection policy'
    },
    {
      name: 'Terms & Conditions',
      keywords: ['terms', 'conditions', 'terms and conditions', 'legal', 'agreement'],
      url: '/terms-and-conditions.php',
      desc: 'Terms of service and legal information'
    }
  ];

  const CONTACT_ENTRIES = [
    {
      name: 'Contact Us',
      keywords: ['contact', 'contact us', 'reach', 'reach out', 'get in touch', 'inquiry', 'enquiry', 'message', 'write to us'],
      url: '/contact-us.php',
      desc: 'Send us a message or visit our office'
    },
    {
      name: 'Request a Quote',
      keywords: ['quote', 'request a quote', 'rfq', 'pricing', 'price', 'quotation', 'bulk order', 'order', 'buy', 'purchase', 'bulk pricing', 'how much', 'cost'],
      url: '/contact-us.php#quote',
      desc: 'Get pricing for bulk & export orders'
    },
    {
      name: 'Email Us',
      keywords: ['email', 'e-mail', 'mail', 'inbox', 'email address', 'send email'],
      url: '/contact-us.php',
      desc: 'info@bhattichemicals.com'
    },
    {
      name: 'Call Us',
      keywords: ['phone', 'call', 'telephone', 'number', 'phone number', 'call us', 'dial', 'landline'],
      url: '/contact-us.php',
      desc: 'Speak directly with our sales team'
    },
    {
      name: 'WhatsApp',
      keywords: ['whatsapp', 'whats app', 'chat', 'wa', 'text', 'text us', 'whatsapp chat'],
      url: '/contact-us.php',
      desc: 'Chat with us on WhatsApp for quick responses'
    },
    {
      name: 'Location / Address',
      keywords: ['address', 'location', 'office', 'factory', 'directions', 'map', 'gujranwala', 'pakistan', 'where', 'visit'],
      url: '/contact-us.php',
      desc: 'Gujranwala, Punjab, Pakistan — factory & office'
    }
  ];

  /* ============================================================
     SEARCH LOGIC
  ============================================================ */

  /**
   * Score how well a query matches an entry.
   * Returns 0 for no match, higher = better match.
   */
  function scoreMatch(query, entry) {
    const q = query.toLowerCase().trim();
    if (!q) return 0;

    const nameLC = entry.name.toLowerCase();

    // Exact name match → highest score
    if (nameLC === q) return 1000;

    // Name starts with query
    if (nameLC.startsWith(q)) return 800;

    // Name contains query as a word
    if (nameLC.includes(q)) return 600;

    // Check keywords
    let bestKwScore = 0;
    for (const kw of entry.keywords) {
      if (kw === q) {
        bestKwScore = Math.max(bestKwScore, 500);
      } else if (kw.startsWith(q)) {
        bestKwScore = Math.max(bestKwScore, 400);
      } else if (kw.includes(q)) {
        bestKwScore = Math.max(bestKwScore, 300);
      } else if (q.length >= 3 && q.includes(kw)) {
        bestKwScore = Math.max(bestKwScore, 200);
      }
    }
    if (bestKwScore > 0) return bestKwScore;

    // Fuzzy: check if all words in query appear in combined text
    const combinedText = (nameLC + ' ' + entry.keywords.join(' ') + ' ' + (entry.desc || '')).toLowerCase();
    const words = q.split(/\s+/).filter(w => w.length >= 2);
    if (words.length > 0 && words.every(w => combinedText.includes(w))) {
      return 150;
    }

    return 0;
  }

  /**
   * Perform the search across all categories.
   * Returns { products: [], applications: [], pages: [], contacts: [] }
   */
  function search(query) {
    const q = query.trim();
    if (!q || q.length < 1) return null;

    const results = {
      products: [],
      applications: [],
      pages: [],
      contacts: []
    };

    PRODUCTS.forEach(p => {
      const s = scoreMatch(q, p);
      if (s > 0) results.products.push({ ...p, score: s });
    });

    APPLICATIONS.forEach(a => {
      const s = scoreMatch(q, a);
      if (s > 0) results.applications.push({ ...a, score: s });
    });

    PAGES.forEach(pg => {
      const s = scoreMatch(q, pg);
      if (s > 0) results.pages.push({ ...pg, score: s });
    });

    CONTACT_ENTRIES.forEach(c => {
      const s = scoreMatch(q, c);
      if (s > 0) results.contacts.push({ ...c, score: s });
    });

    // Sort each by score
    results.products.sort((a, b) => b.score - a.score);
    results.applications.sort((a, b) => b.score - a.score);
    results.pages.sort((a, b) => b.score - a.score);
    results.contacts.sort((a, b) => b.score - a.score);

    return results;
  }

  /**
   * Check if we should auto-navigate.
   * Conditions:
   *   - If total results is exactly 1, go directly
   *   - If only 1 application matches and query is clearly application-related
   */
  function getAutoNavigateUrl(results, query) {
    if (!results) return null;

    const all = [
      ...results.products,
      ...results.applications,
      ...results.pages,
      ...results.contacts
    ];

    // Only one result total → auto-navigate
    if (all.length === 1) {
      return siteUrl(all[0].url);
    }

    return null;
  }

  /* ============================================================
     SVG ICONS
  ============================================================ */
  const ICONS = {
    search: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>',
    close: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>',
    product: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>',
    application: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>',
    page: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/></svg>',
    contact: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
    arrow: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>',
    empty: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/><path d="M8 11h6"/></svg>'
  };

  /* ============================================================
     DOM — Build search overlay
  ============================================================ */
  const overlay = document.getElementById('searchOverlay');
  const input = document.getElementById('searchInput');
  const resultsContainer = document.getElementById('searchResults');
  const quickLinks = document.getElementById('searchQuickLinks');
  const footer = document.getElementById('searchFooter');
  const closeBtn = document.getElementById('searchCloseBtn');
  const trigger = document.getElementById('searchTrigger');
  const mobileTrigger = document.getElementById('searchTriggerMobile');

  if (!overlay || !input) return; // Guard

  let activeIndex = -1;
  let currentItems = [];
  let debounceTimer = null;

  /* ---- Open / Close ---- */
  function openSearch() {
    overlay.classList.add('active');
    overlay.setAttribute('aria-hidden', 'false');
    if (trigger) trigger.setAttribute('aria-expanded', 'true');
    if (mobileTrigger) mobileTrigger.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
    setTimeout(() => input.focus(), 100);
  }

  function closeSearch() {
    overlay.classList.remove('active');
    overlay.setAttribute('aria-hidden', 'true');
    if (trigger) trigger.setAttribute('aria-expanded', 'false');
    if (mobileTrigger) mobileTrigger.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
    input.value = '';
    renderInitialState();
    activeIndex = -1;
    currentItems = [];
  }

  // Trigger bindings
  if (trigger) trigger.addEventListener('click', openSearch);
  if (mobileTrigger) mobileTrigger.addEventListener('click', openSearch);
  if (closeBtn) closeBtn.addEventListener('click', closeSearch);

  // Close on overlay background click
  overlay.addEventListener('click', function (e) {
    if (e.target === overlay) closeSearch();
  });

  // Keyboard: Escape to close, Ctrl+K / Cmd+K to open
  document.addEventListener('keydown', function (e) {
    if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
      e.preventDefault();
      if (overlay.classList.contains('active')) {
        closeSearch();
      } else {
        openSearch();
      }
    }
    if (e.key === 'Escape' && overlay.classList.contains('active')) {
      closeSearch();
    }
  });

  /* ---- Highlight matched text ---- */
  function highlight(text, query) {
    if (!query || query.length < 1) return escapeHtml(text);
    const escaped = escapeHtml(text);
    const q = escapeHtml(query.trim());
    const regex = new RegExp('(' + q.replace(/[.*+?^${}()|[\]\\]/g, '\\$&') + ')', 'gi');
    return escaped.replace(regex, '<mark>$1</mark>');
  }

  function escapeHtml(str) {
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
  }

  /* ---- Render result item ---- */
  function createResultItem(item, category, query) {
    const iconMap = {
      products: ICONS.product,
      applications: ICONS.application,
      pages: ICONS.page,
      contacts: ICONS.contact
    };
    const badgeMap = {
      products: ['Product', 'badge-product'],
      applications: ['Application', 'badge-application'],
      pages: ['Page', 'badge-page'],
      contacts: ['Contact', 'badge-contact']
    };

    const a = document.createElement('a');
    a.className = 'search-result-item';
    a.href = siteUrl(item.url);
    a.setAttribute('data-search-item', '');

    a.innerHTML = `
      <span class="search-result-icon">${iconMap[category]}</span>
      <span class="search-result-info">
        <span class="search-result-name">${highlight(item.name, query)}</span>
        <span class="search-result-desc">${escapeHtml(item.desc)}</span>
      </span>
      <span class="search-result-badge ${badgeMap[category][1]}">${badgeMap[category][0]}</span>
      <span class="search-result-arrow">${ICONS.arrow}</span>
    `;

    return a;
  }

  /* ---- Render results ---- */
  function renderResults(results, query) {
    resultsContainer.innerHTML = '';
    currentItems = [];
    activeIndex = -1;

    if (!results) {
      renderInitialState();
      return;
    }

    const categories = [
      { key: 'products', title: 'Products', icon: ICONS.product },
      { key: 'applications', title: 'Applications', icon: ICONS.application },
      { key: 'contacts', title: 'Contact', icon: ICONS.contact },
      { key: 'pages', title: 'Pages', icon: ICONS.page }
    ];

    let hasResults = false;

    categories.forEach(cat => {
      const items = results[cat.key];
      if (!items || items.length === 0) return;
      hasResults = true;

      const section = document.createElement('div');
      section.className = 'search-category';
      section.innerHTML = `<div class="search-category-title">${cat.icon} ${cat.title}</div>`;
      resultsContainer.appendChild(section);

      items.forEach(item => {
        const el = createResultItem(item, cat.key, query);
        resultsContainer.appendChild(el);
        currentItems.push(el);
      });
    });

    if (!hasResults) {
      renderEmpty(query);
    }

    if (quickLinks) quickLinks.style.display = 'none';
    if (footer) footer.style.display = hasResults ? 'flex' : 'none';
  }

  /* ---- Render empty state ---- */
  function renderEmpty(query) {
    resultsContainer.innerHTML = `
      <div class="search-empty">
        <div class="search-empty-icon">${ICONS.empty}</div>
        <div class="search-empty-title">No results for "${escapeHtml(query)}"</div>
        <div class="search-empty-hint">Try searching for a product like "Zinc Oxide", an application like "Rubber", or "Contact" for our details.</div>
      </div>
    `;
    if (quickLinks) quickLinks.style.display = 'none';
    if (footer) footer.style.display = 'none';
  }

  /* ---- Render initial state (quick links) ---- */
  function renderInitialState() {
    resultsContainer.innerHTML = '';
    if (quickLinks) quickLinks.style.display = 'block';
    if (footer) footer.style.display = 'flex';
    activeIndex = -1;
    currentItems = [];
  }

  /* ---- Keyboard navigation ---- */
  function updateActiveItem() {
    currentItems.forEach((el, i) => {
      el.classList.toggle('active', i === activeIndex);
    });
    if (activeIndex >= 0 && currentItems[activeIndex]) {
      currentItems[activeIndex].scrollIntoView({ block: 'nearest' });
    }
  }

  input.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowDown') {
      e.preventDefault();
      if (currentItems.length > 0) {
        activeIndex = (activeIndex + 1) % currentItems.length;
        updateActiveItem();
      }
    } else if (e.key === 'ArrowUp') {
      e.preventDefault();
      if (currentItems.length > 0) {
        activeIndex = activeIndex <= 0 ? currentItems.length - 1 : activeIndex - 1;
        updateActiveItem();
      }
    } else if (e.key === 'Enter') {
      e.preventDefault();
      if (activeIndex >= 0 && currentItems[activeIndex]) {
        currentItems[activeIndex].click();
      } else if (currentItems.length === 1) {
        // Only one result, auto-navigate
        currentItems[0].click();
      } else {
        // Try auto-navigate logic
        const q = input.value.trim();
        const results = search(q);
        const autoUrl = getAutoNavigateUrl(results, q);
        if (autoUrl) {
          window.location.href = autoUrl;
        }
      }
    }
  });

  /* ---- Input handler with debounce ---- */
  input.addEventListener('input', function () {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
      const q = input.value.trim();
      if (q.length === 0) {
        renderInitialState();
        return;
      }

      const results = search(q);
      renderResults(results, q);

    }, 80); // Very short debounce for instant feel
  });

  /* ---- Initialize ---- */
  renderInitialState();

})();

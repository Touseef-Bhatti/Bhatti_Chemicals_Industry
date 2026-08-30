<?php
// cache_warm.php
// Simple server-side cache warmer: copies a list of assets (local or remote)
// into the /cache/ folder under the site root so they can be served quickly.

set_time_limit(300);
header('Content-Type: application/json');

// This script lives in /scripts/, so the site root is one level up.
$root = dirname(__DIR__);
$cacheDir = $root . DIRECTORY_SEPARATOR . 'cache';
if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true);
}

// List of assets to warm (paths relative to site root, or full URLs)
$assets = [
    'assets/videos/first.mp4',
    'assets/videos/about.mp4',
    'assets/videos/product.mp4',
    'assets/videos/contact.mp4',
    'assets/images/products/zinc-oxide-bg.jpg',
    'assets/images/products/zinc-dross.jpg',
    'assets/images/products/zinc-ingot.webp',
    'assets/images/products/zinc-ash-fine-bg.png',
    // External example used in products/zinc-dust.php
    'https://marjanpolymer.com/wp-content/uploads/2024/07/Z1-1.jpg'
];

$results = [];
foreach ($assets as $asset) {
    $result = ['asset' => $asset, 'status' => 'unknown', 'message' => ''];
    $basename = basename(parse_url($asset, PHP_URL_PATH));
    $dest = $cacheDir . DIRECTORY_SEPARATOR . $basename;

    // If asset is a URL (http/https), fetch remote
    if (preg_match('#^https?://#i', $asset)) {
        // Use stream context with timeout
        $ctx = stream_context_create(['http' => ['timeout' => 30]]);
        $data = @file_get_contents($asset, false, $ctx);
        if ($data === false) {
            $result['status'] = 'error';
            $result['message'] = 'remote fetch failed';
        } else {
            $written = @file_put_contents($dest, $data);
            if ($written === false) {
                $result['status'] = 'error';
                $result['message'] = 'write failed';
            } else {
                $result['status'] = 'ok';
                $result['message'] = 'downloaded';
            }
        }
    } else {
        // Local file path
        $src = $root . DIRECTORY_SEPARATOR . $asset;
        if (!file_exists($src)) {
            $result['status'] = 'missing';
            $result['message'] = 'source missing';
        } else {
            if (@copy($src, $dest)) {
                $result['status'] = 'ok';
                $result['message'] = 'copied';
            } else {
                $result['status'] = 'error';
                $result['message'] = 'copy failed';
            }
        }
    }

    $results[] = $result;
}

echo json_encode(['success' => true, 'results' => $results], JSON_PRETTY_PRINT);

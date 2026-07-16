<?php
// helpers.php - small utilities for URL and asset lookup
function site_base_path() {
    static $basePath = null;
    if ($basePath !== null) {
        return $basePath;
    }

    $documentRoot = isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : false;
    $projectRoot = realpath(dirname(__DIR__));

    if ($documentRoot && $projectRoot && strpos($projectRoot, $documentRoot) === 0) {
        $relative = str_replace('\\', '/', substr($projectRoot, strlen($documentRoot)));
        $basePath = '/' . trim($relative, '/');
        if ($basePath === '/') {
            $basePath = '';
        }
        return $basePath;
    }

    $basePath = '';
    return $basePath;
}

function site_url($path = '/') {
    if ($path === '' || preg_match('#^(https?:)?//#i', $path) || preg_match('#^(mailto|tel|sms|whatsapp):#i', $path) || $path[0] === '#') {
        return $path;
    }

    $basePath = site_base_path();
    $normalizedPath = '/' . ltrim($path, '/');

    if ($normalizedPath === '/') {
        return $basePath === '' ? '/' : $basePath . '/';
    }

    return $basePath . $normalizedPath;
}

function cached_asset($path) {
    // Accept absolute URLs or relative paths. If a warmed copy exists in /cache/, return that.
    $basename = basename(parse_url($path, PHP_URL_PATH));
    $cacheFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . $basename;
    if (file_exists($cacheFile)) {
        return site_url('/cache/' . $basename);
    }
    return site_url($path);
}

?>

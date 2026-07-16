<?php
// scan project files for image references and compare first-letter case
$root = $argv[1] ?? __DIR__ . '/../';
$root = rtrim($root, "\\/") . DIRECTORY_SEPARATOR;

$extensions = ['php','html','htm','css','json','js'];
$imgRegex = "/(?:(?:src|href|url\\(|data-bg)\\s*=\\s*(?:\"|' )?|url\()([^\"'\\)\\s>]+\\.(?:png|jpg|jpeg|gif|webp|avif|svg))/i";

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root));
$refs = [];
foreach ($iterator as $file) {
    if (!$file->isFile()) continue;
    $ext = pathinfo($file->getFilename(), PATHINFO_EXTENSION);
    if (!in_array(strtolower($ext), $extensions)) continue;
    $text = file_get_contents($file->getPathname());
    if (preg_match_all($imgRegex, $text, $m)) {
        foreach ($m[1] as $match) {
            // strip surrounding url(...) and query strings
            $raw = $match;
            $raw = preg_replace('#^url\((.*)\)$#i', '$1', $raw);
            $raw = trim($raw, "'\" ");
            // ignore absolute urls
            if (preg_match('#^https?://#i', $raw)) continue;
            // decode possible %20
            $rawPath = urldecode($raw);
            // normalize leading slash
            $rawPath = ltrim($rawPath, '/\\');
            $refs[] = [
                'source' => substr($file->getPathname(), strlen($root)),
                'ref' => $rawPath,
            ];
        }
    }
}

// get directory listings cache
$dirCache = [];

$results = [];
foreach ($refs as $r) {
    $ref = $r['ref'];
    $src = $r['source'];
    $refNoQuery = preg_replace('/[?#].*$/', '', $ref);
    $dir = dirname($refNoQuery);
    $base = basename($refNoQuery);
    $searchDir = $dir === '.' ? $root : ($root . $dir . DIRECTORY_SEPARATOR);
    if (!isset($dirCache[$searchDir])) {
        if (is_dir($searchDir)) {
            $files = array_values(array_filter(scandir($searchDir), function($f) use ($searchDir){return is_file($searchDir.$f);}));
        } else {
            $files = null;
        }
        $dirCache[$searchDir] = $files;
    }
    $files = $dirCache[$searchDir];
    if ($files === null) {
        $results[] = ['source'=>$src,'ref'=>$ref,'status'=>'DIR NOT FOUND','actual'=>'-','first_ref'=>substr($base,0,1),'first_actual'=>'-'];
        continue;
    }
    // find case-insensitive match
    $found = null;
    foreach ($files as $f) {
        if (strcasecmp($f, $base) === 0) { $found = $f; break; }
    }
    if ($found === null) {
        $results[] = ['source'=>$src,'ref'=>$ref,'status'=>'FILE NOT FOUND','actual'=>'-','first_ref'=>substr($base,0,1),'first_actual'=>'-'];
        continue;
    }
    $firstRef = substr($base,0,1);
    $firstActual = substr($found,0,1);
    $status = ($firstRef === $firstActual) ? 'OK' : 'MISMATCH';
    $results[] = ['source'=>$src,'ref'=>$ref,'status'=>$status,'actual'=>$found,'first_ref'=>$firstRef,'first_actual'=>$firstActual];
}

// output report
$grouped = [];
foreach ($results as $r) {
    $grouped[$r['status']][] = $r;
}

echo "Image case-check report for root: $root\n\n";
foreach (['MISMATCH','FILE NOT FOUND','DIR NOT FOUND','OK'] as $k) {
    if (!isset($grouped[$k])) continue;
    echo "=== $k (".count($grouped[$k]).") ===\n";
    foreach ($grouped[$k] as $item) {
        printf("%s -> %s | actual: %s | first-ref: %s | first-actual: %s\n", $item['source'], $item['ref'], $item['actual'], $item['first_ref'], $item['first_actual']);
    }
    echo "\n";
}

exit(0);

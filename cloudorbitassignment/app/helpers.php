<?php

if (!function_exists('vite')) {
    function vite($entry)
    {
        $manifestPath = public_path('build/manifest.json');

        if (!file_exists($manifestPath)) {
            throw new Exception('The Vite manifest file does not exist.');
        }

        $manifest = json_decode(file_get_contents($manifestPath), true);

        if (!isset($manifest[$entry])) {
            throw new Exception("Unable to locate the file {$entry} in the Vite manifest.");
        }

        $file = $manifest[$entry]['file'];
        $cssFiles = isset($manifest[$entry]['css']) ? $manifest[$entry]['css'] : [];

        $html = '<script type="module" src="/build/' . $file . '"></script>';

        foreach ($cssFiles as $cssFile) {
            $html .= '<link rel="stylesheet" href="/build/' . $cssFile . '">';
        }

        return $html;
    }
}

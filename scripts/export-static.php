<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$publicDir = $root . '/public';
$distDir = $root . '/dist';
$baseUrl = 'http://127.0.0.1:8099';

$pages = [
    '/' => 'index.html',
    '/about' => 'about/index.html',
    '/services' => 'services/index.html',
    '/doctors' => 'doctors/index.html',
    '/gallery' => 'gallery/index.html',
    '/pricing' => 'pricing/index.html',
    '/reviews' => 'reviews/index.html',
    '/blog' => 'blog/index.html',
    '/faq' => 'faq/index.html',
    '/contact' => 'contact/index.html',
];

removeDirectory($distDir);
mkdir($distDir, 0775, true);
copyStaticAssets($publicDir, $distDir);

foreach ($pages as $path => $target) {
    $html = fetchPage($baseUrl . $path);
    $html = prepareStaticHtml($html, $baseUrl);
    writeFile($distDir . '/' . $target, $html);
}

writeFile($distDir . '/404.html', notFoundHtml());
writeFile($distDir . '/__forms.html', formsHtml());

function fetchPage(string $url): string
{
    $context = stream_context_create([
        'http' => [
            'ignore_errors' => true,
            'timeout' => 15,
        ],
    ]);

    $html = @file_get_contents($url, false, $context);
    if ($html === false) {
        fwrite(STDERR, "Unable to export {$url}\n");
        exit(1);
    }

    $statusLine = $http_response_header[0] ?? '';
    if (!str_contains($statusLine, '200')) {
        fwrite(STDERR, "Export failed for {$url}: {$statusLine}\n");
        exit(1);
    }

    return $html;
}

function prepareStaticHtml(string $html, string $baseUrl): string
{
    $html = str_replace($baseUrl, '', $html);
    $html = str_replace('href="assets/dist/css/index.css"', 'href="/assets/dist/css/style.css"', $html);
    $html = preg_replace('#<link rel="stylesheet" href="/assets/dist/css/header\.css">\s*#', '', $html) ?? $html;
    $html = preg_replace('#action="[^"]*/contact/submit"#', 'name="appointment" action="/__forms.html" data-netlify="true" netlify-honeypot="bot-field"', $html) ?? $html;
    $html = preg_replace('#(<form[^>]*name="appointment"[^>]*>)#', '$1<input type="hidden" name="form-name" value="appointment"><p hidden><label>Do not fill this out: <input name="bot-field"></label></p>', $html, 1) ?? $html;

    return $html;
}

function copyStaticAssets(string $source, string $destination): void
{
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($source, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($iterator as $item) {
        $relativePath = substr($item->getPathname(), strlen($source) + 1);
        if (preg_match('/(^|\/)(index\.php|\.htaccess)$/', $relativePath)) {
            continue;
        }

        $target = $destination . '/' . $relativePath;
        if ($item->isDir()) {
            if (!is_dir($target)) {
                mkdir($target, 0775, true);
            }
            continue;
        }

        if (!is_dir(dirname($target))) {
            mkdir(dirname($target), 0775, true);
        }
        copy($item->getPathname(), $target);
    }
}

function writeFile(string $path, string $contents): void
{
    if (!is_dir(dirname($path))) {
        mkdir(dirname($path), 0775, true);
    }
    file_put_contents($path, $contents);
}

function removeDirectory(string $directory): void
{
    if (!is_dir($directory)) {
        return;
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach ($iterator as $item) {
        $item->isDir() ? rmdir($item->getPathname()) : unlink($item->getPathname());
    }

    rmdir($directory);
}

function formsHtml(): string
{
    return <<<'HTML'
<!doctype html>
<html lang="en">
<meta charset="utf-8">
<title>Forms</title>
<form name="appointment" method="POST" data-netlify="true" netlify-honeypot="bot-field" hidden>
  <input type="hidden" name="form-name" value="appointment">
  <input name="bot-field">
  <input name="name">
  <input name="phone">
  <input name="email">
  <select name="service"></select>
  <input name="date">
  <input name="time">
  <textarea name="message"></textarea>
</form>
HTML;
}

function notFoundHtml(): string
{
    return <<<'HTML'
<!doctype html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Page Not Found | Care32 Dental Clinic</title>
<body style="font-family: Arial, sans-serif; margin: 0; min-height: 100vh; display: grid; place-items: center; background: #f7f7f7; color: #111;">
  <main style="text-align: center; padding: 32px;">
    <h1>Page not found</h1>
    <p>The page you requested is not available.</p>
    <a href="/" style="color: #ff5e00; font-weight: 700;">Return home</a>
  </main>
</body>
</html>
HTML;
}

<?php
// header.php — ЛИТОВСКАЯ ВЕРСИЯ (корень)
$lang = $_GET['lang'] ?? 'lt';

// === ЧИСТЫЙ URL ===
$request_uri = strtok($_SERVER['REQUEST_URI'], '?');
$clean_url   = preg_replace('/\.php$/', '', $request_uri);
$clean_url   = preg_replace('#^/lt#', '', $clean_url);

// === CANONICAL ===
if (in_array($request_uri, ['/', '/index.php', ''])) {
    $canonical = 'https://golden-hands.lt/';
} else {
    $canonical = 'https://golden-hands.lt' . (strpos($clean_url, '/') === 0 ? $clean_url : '/' . $clean_url);
}

// SEO параметры
$pageTitle       = $pageTitle ?? 'Golden Hands — Reklamos konstrukcijos Vilniuje ir Lietuvoje';
$pageDescription = $pageDescription ?? 'Profesionalus reklamos konstrukcijų gamyba ir montavimas Vilniuje. Iškabos, šviečiančios dėžės, 3D raidės, parodų stendai, POSM. Pilnas ciklas nuo idėjos iki montavimo.';
$pageKeywords    = $pageKeywords ?? 'reklamos konstrukcijos Vilnius, iškabos Vilnius, šviečiančios dėžės, 3D raidės, parodų stendai, POSM, Golden Hands';

// Nonce для безопасности
$nonce = base64_encode(random_bytes(16));
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
    <meta name="author" content="Golden Hands">
    <meta name="robots" content="index, follow">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <!-- SEO: Canonical + Hreflang -->
    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
    <link rel="alternate" hreflang="lt" href="<?= htmlspecialchars($canonical) ?>">
    <link rel="alternate" hreflang="en" href="https://golden-hands.lt/en<?= str_replace('/lt', '', parse_url($canonical, PHP_URL_PATH)) ?>">
    <link rel="alternate" hreflang="ru" href="https://golden-hands.lt/ru<?= str_replace('/lt', '', parse_url($canonical, PHP_URL_PATH)) ?>">
    <link rel="alternate" hreflang="x-default" href="https://golden-hands.lt/">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="lt_LT">
    <meta property="og:site_name" content="Golden Hands">

    <!-- Preload -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Playfair+Display:wght@700&amp;display=swap" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" as="style">

    <!-- Google Fonts -->
    <link rel="stylesheet" 
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Playfair+Display:wght@700&amp;display=swap" 
          media="print" onload="this.media='all'" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
          media="print" onload="this.media='all'" crossorigin="anonymous">

    <!-- Основные стили -->
    <link rel="stylesheet" href="/assets/style.css?v=20260510">

</head>
<body>

<header>
    <div class="nav">
        <a href="/" class="logo" aria-label="Golden Hands">
            <i class="fas fa-hands-holding-circle"></i> Golden Hands
        </a>
       
        <ul class="menu" id="menu">
            <li><a href="/"><i class="fas fa-home"></i> Pagrindinis</a></li>
            <li><a href="/paslaugos"><i class="fas fa-cogs"></i> Paslaugos</a></li>
            <li><a href="/galerija"><i class="fas fa-images"></i> Galerija</a></li>
            <li><a href="/apie-mus"><i class="fas fa-info-circle"></i> Apie mus</a></li>
            <li><a href="/gamyba"><i class="fas fa-industry"></i> Gamyba</a></li>
            <li><a href="/kontaktai"><i class="fas fa-phone"></i> Kontaktai</a></li>
        </ul>
       
        <button class="burger" id="burger" aria-label="Atidaryti meniu">☰</button>
    </div>
</header>

<!-- Burger script -->
<script src="assets/burger.js" defer nonce="<?= $nonce ?>"></script>

</body>
</html>

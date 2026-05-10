<?php
// header.php — ЛИТОВСКАЯ ВЕРСИЯ (корень) — Оптимизировано под PageSpeed / Mobile LCP
$lang = $_GET['lang'] ?? 'lt';

// === ЧИСТЫЙ URL ===
$request_uri = strtok($_SERVER['REQUEST_URI'], '?');
$clean_url   = preg_replace('/\.php$/', '', $request_uri);
$clean_url   = preg_replace('#^/lt#', '', $clean_url); // защита

// === CANONICAL ===
if (in_array($request_uri, ['/', '/index.php', ''])) {
    $canonical = 'https://golden-hands.lt/';
} else {
    $canonical = 'https://golden-hands.lt' . (strpos($clean_url, '/') === 0 ? $clean_url : '/' . $clean_url);
}

// SEO параметры
$pageTitle       = $pageTitle       ?? 'Golden Hands — Reklamos konstrukcijos Vilniuje ir Lietuvoje';
$pageDescription = $pageDescription ?? 'Profesionalus reklamos konstrukcijų gamyba ir montavimas Vilniuje. Iškabos, šviečiančios dėžės, 3D raidės, parodų stendai, POSM. Pilnas ciklas nuo idėjos iki montavimo.';
$pageKeywords    = $pageKeywords    ?? 'reklamos konstrukcijos Vilnius, iškabos Vilnius, šviečiančios dėžės, 3D raidės, parodų stendai, POSM, Golden Hands';

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

    <!-- === SEO: Canonical + Hreflang === -->
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

    <!-- Preload Critical Resources (важно для LCP) -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Playfair+Display:wght@700&amp;display=swap" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" as="style">

    <!-- Google Fonts — неблокирующая загрузка -->
    <link rel="stylesheet" 
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Playfair+Display:wght@700&amp;display=swap" 
          media="print" onload="this.media='all'" crossorigin="anonymous">

    <!-- Font Awesome — неблокирующая загрузка -->
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
          media="print" onload="this.media='all'" 
          crossorigin="anonymous" referrerpolicy="no-referrer">

    <style nonce="<?= $nonce ?>">
        @font-face {
            font-family: "Font Awesome 6 Free";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url("/fonts/fa-solid-900.woff2") format("woff2");
        }

        :root {
            --primary: #f59e0b;
            --dark: #0a0f1c;
            --text: #e2e8f0;
        }

        * { margin:0; padding:0; box-sizing:border-box; }

        body {
            font-family:'Inter',sans-serif;
            background:#05070f;
            color:var(--text);
            line-height:1.6;
        }

        header {
            position:fixed;
            top:0;
            width:100%;
            background:rgba(10,15,28,0.98);
            backdrop-filter:blur(20px);
            z-index:1100;
            border-bottom:1px solid rgba(245,158,11,0.2);
        }

        .nav {
            max-width:1400px;
            margin:auto;
            padding:1rem 5%;
            display:flex;
            align-items:center;
            justify-content:space-between;
        }

        .logo {
            font-size:clamp(2rem, 5vw, 2.4rem);
            font-family:'Playfair Display',serif;
            color:white;
            text-decoration:none;
            display:flex;
            align-items:center;
            gap:10px;
            transition:0.3s;
        }

        .logo:hover { color:var(--primary); }

        .menu {
            display:flex;
            gap:2.8rem;
            list-style:none;
        }

        .menu a {
            color:white;
            text-decoration:none;
            font-weight:500;
            position:relative;
            transition:0.3s;
            display:flex;
            align-items:center;
            gap:6px;
        }

        .menu a:hover { color:var(--primary); }

        .menu a:after {
            content:'';
            position:absolute;
            width:0;
            height:2px;
            bottom:-4px;
            left:0;
            background:var(--primary);
            transition:0.3s;
        }

        .menu a:hover:after { width:100%; }

        .burger {
            display:none;
            font-size:2.4rem;
            color:white;
            cursor:pointer;
            background:none;
            border:none;
            padding:5px;
        }

        @media (max-width: 992px) {
            .menu {
                position:fixed;
                left:-100%;
                top:75px;
                width:100%;
                height:calc(100vh - 75px);
                background:var(--dark);
                flex-direction:column;
                padding:4rem 5%;
                gap:2.8rem;
                transition:left 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                align-items:center;
                font-size:1.5rem;
                box-shadow:0 10px 30px rgba(0,0,0,0.6);
                z-index:1200;
            }
            .menu.active { left:0; }
            .burger { display:block; }
        }
    </style>
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
<?php
$lang = $_GET['lang'] ?? 'ru';

// === ОПРЕДЕЛЕНИЕ ТЕКУЩЕГО ЧИСТОГО URL ===
$request_uri = strtok($_SERVER['REQUEST_URI'], '?'); // убираем GET-параметры

// Определяем главную русскую страницу
$isRuHome = in_array($request_uri, ['/ru/', '/ru', '/ru/index.php']);

// === ПРАВИЛЬНЫЙ CANONICAL URL ===
if ($isRuHome) {
    $canonical = 'https://golden-hands.lt/ru/';
} else {
    // Для всех остальных страниц убираем .php и добавляем /ru/
    $clean_url = preg_replace('/\.php$/', '', $request_uri);
    if (strpos($clean_url, '/ru/') !== 0) {
        $clean_url = '/ru' . (strpos($clean_url, '/') === 0 ? $clean_url : '/' . $clean_url);
    }
    $canonical = 'https://golden-hands.lt' . $clean_url;
}

// SEO параметры
$pageTitle = $pageTitle ?? 'Golden Hands — Рекламные конструкции любой сложности в Вильнюсе';
$pageDescription = $pageDescription ?? 'Производство и монтаж рекламных конструкций: вывески, световые короба, 3D-буквы, выставочные стенды, POSM. Полный цикл от идеи до установки. 12+ лет опыта.';
$pageKeywords = $pageKeywords ?? 'рекламные конструкции Вильнюс, вывески Вильнюс, световые короба, 3D буквы, выставочные стенды, POSM, производство рекламы, Golden Hands';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
    <meta name="author" content="Golden Hands">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    
    <!-- === КАНОНИЧЕСКИЙ URL (очень важно для Google) === -->
    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">

    <!-- === КРИТИЧЕСКИЕ ШРИФТЫ (оптимизировано для PageSpeed) === -->
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap">

    <!-- Font Awesome с font-display: swap -->
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
          crossorigin="anonymous" 
          referrerpolicy="no-referrer">

    <!-- Локальный fallback + font-display: swap -->
    <style>
        @font-face {
            font-family: "Font Awesome 6 Free";
            font-style: normal;
            font-weight: 900;
            font-display: swap;           /* ← Важно для FCP */
            src: url("/fonts/fa-solid-900.woff2") format("woff2"),
                 url("/fonts/fa-solid-900.woff") format("woff");
        }

        :root { 
            --primary: #f59e0b; 
            --dark: #0a0f1c; 
        }
        
        * { 
            margin:0; 
            padding:0; 
            box-sizing:border-box; 
        }
        
        body { 
            font-family:'Inter',sans-serif; 
            background:#05070f; 
            color:#e2e8f0; 
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
        }

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

        .menu a:hover { 
            color:var(--primary); 
        }

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

        .menu a:hover:after { 
            width:100%; 
        }

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
            .menu.active { 
                left:0; 
            }
            .burger { 
                display:block; 
            }
        }
    </style>
</head>
<body>

<header>
    <div class="nav">
        <a href="/ru/" class="logo">
            <i class="fas fa-hands-holding-circle"></i> Golden Hands
        </a>
        <ul class="menu" id="menu">
            <li><a href="/ru/"><i class="fas fa-home"></i> Главная</a></li>
            <li><a href="/ru/services"><i class="fas fa-cogs"></i> Услуги</a></li>
            <li><a href="/ru/gallery"><i class="fas fa-images"></i> Галерея</a></li>
            <li><a href="/ru/about"><i class="fas fa-info-circle"></i> О нас</a></li>
            <li><a href="/ru/production"><i class="fas fa-industry"></i> Производство</a></li>
            <li><a href="/ru/contact"><i class="fas fa-phone"></i> Контакты</a></li>
        </ul>
        <button class="burger" id="burger" aria-label="Меню">☰</button>
    </div>
</header>

<!-- Подключаем бургер -->
<script src="assets/burger.js" defer></script>

</body>
</html>
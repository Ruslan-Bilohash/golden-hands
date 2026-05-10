<?php
// =============================================
// index.php — ГЛАВНАЯ СТРАНИЦА (Литовская версия)
// =============================================

session_start();

// Настройки ошибок (только для разработки — потом можно убрать или поставить 0)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// SEO параметры главной страницы
$pageTitle = 'Golden Hands — Reklamos konstrukcijos Vilniuje ir Lietuvoje | Pilnas ciklas';
$pageDescription = 'Profesionalus reklamos konstrukcijų gamyba ir montavimas Vilniuje. Iškabos, šviečiančios dėžės, 3D raidės, parodų stendai, POSM. Nuo idėjos iki montavimo — 12+ metų patirtis.';
$pageKeywords = 'reklamos konstrukcijos Vilnius, iškabos Vilnius, šviečiančios dėžės, 3D raidės, parodų stendai, POSM, lauko reklama, Golden Hands';

// Подключаем header
include 'header.php';

// =============================================
// Основной контент
// =============================================
include 'content.php';

// Улучшенное определение мобильных устройств
function isMobileDevice(): bool {
    if (empty($_SERVER['HTTP_USER_AGENT'])) {
        return false;
    }
    
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    
    $mobileKeywords = [
        'iphone', 'ipad', 'android', 'blackberry', 'windows phone', 'opera mini',
        'mobile', 'tablet', 'ipod', 'silk', 'kindle', 'nokia', 'sony', 'lg'
    ];
    
    foreach ($mobileKeywords as $keyword) {
        if (strpos($agent, $keyword) !== false) {
            return true;
        }
    }
    
    // Дополнительная проверка по Accept header
    if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'text/vnd.wap.wml') !== false) {
        return true;
    }
    
    return false;
}

// Подключаем "Заказать звонок" ТОЛЬКО на десктопе
if (!isMobileDevice()) {
    include 'contact-call.php';
}

// Блок подписки
include 'subscribe.php';

// Футер

include 'footer.php';
?>

<!-- Schema.org разметка для главной страницы -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Golden Hands",
  "url": "https://golden-hands.lt/",
  "logo": "https://golden-hands.lt/assets/img/logo.png",
  "description": "Profesionalus reklamos konstrukcijų gamyba Vilniuje ir Lietuvoje. Pilnas ciklas nuo idėjos iki montavimo.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Dangeručio g. 7",
    "addressLocality": "Vilnius",
    "addressCountry": "LT"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+370-XXX-XXXXX",
    "contactType": "customer service",
    "availableLanguage": ["Lithuanian", "Russian", "English"]
  },
  "sameAs": [
    "https://www.facebook.com/goldenhandslithuania",
    "https://www.instagram.com/goldenhands.lt"
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Golden Hands",
  "url": "https://golden-hands.lt/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://golden-hands.lt/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
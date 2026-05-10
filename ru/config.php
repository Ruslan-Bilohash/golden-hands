<?php
// ====================== CONFIG ======================
define('SITE_URL', 'https://golden-hands.lt');
define('SITE_NAME', 'Golden Hands');
define('VERSION', '2026.05');

// Безопасная функция перевода
function __t($key, $default = '') {
    global $translations;
    return isset($translations[$key]) 
        ? htmlspecialchars($translations[$key], ENT_QUOTES | ENT_HTML5, 'UTF-8') 
        : htmlspecialchars($default, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

// Добавление языка к ссылкам
function lang_url($page = 'index.php') {
    global $lang;
    return $lang === 'ru' ? $page : $page . '?lang=' . $lang;
}
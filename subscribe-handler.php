<?php
// subscribe-handler.php - ЛИТОВСКАЯ ВЕРСИЯ
session_start();

// Защита: только POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /", true, 303);
    exit;
}

// CSRF защита
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token'] ?? '') {
    http_response_code(403);
    echo "<h2 style='color:#ef4444; text-align:center; margin-top:100px;'>Klaida: nepavyko patvirtinti užklausos</h2>";
    exit;
}

// Получаем и очищаем email
$email = trim($_POST['email'] ?? '');

// Валидация
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 254) {
    echo "<!DOCTYPE html>
    <html lang='lt'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Klaida | Golden Hands</title>
        <style>
            body { font-family: 'Inter', sans-serif; background: #05070f; color: #e2e8f0; text-align: center; padding: 120px 20px; }
            .error { background: #1e2937; max-width: 600px; margin: 0 auto; padding: 60px 40px; border-radius: 24px; border: 2px solid #ef4444; }
        </style>
    </head>
    <body>
        <div class='error'>
            <h1>❌ Klaida</h1>
            <p style='font-size:1.3rem; margin:25px 0;'>Prašome įvesti teisingą el. pašto adresą.</p>
            <a href='/' style='color:#f59e0b; font-size:1.2rem; text-decoration:none;'>← Grįžti atgal</a>
        </div>
    </body>
    </html>";
    exit;
}

// Rate limiting (против спама) — 3 подписки с одного IP в час
$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$logFile = 'subscribers/rate_limit.log';
$limits = [];
if (file_exists($logFile)) {
    $limits = json_decode(file_get_contents($logFile), true) ?: [];
}
$now = time();
$key = md5($ip);
$limits[$key] = array_filter($limits[$key] ?? [], fn($t) => $t > $now - 3600);

if (count($limits[$key] ?? []) >= 3) {
    http_response_code(429);
    echo "<h2 style='color:#f59e0b; text-align:center; margin-top:100px;'>Jūs jau užsiprenumeravote per dažnai. Prašome pabandyti vėliau.</h2>";
    exit;
}
$limits[$key][] = $now;
file_put_contents($logFile, json_encode($limits));

// Создаём папку
$folder = 'subscribers';
if (!is_dir($folder)) {
    mkdir($folder, 0755, true);
}
$file = $folder . '/subscribe.json';

// Читаем существующих подписчиков
$subscribers = [];
if (file_exists($file)) {
    $json = file_get_contents($file);
    $subscribers = json_decode($json, true) ?: [];
}

// Проверка дубликата
$exists = false;
foreach ($subscribers as $sub) {
    if (strtolower($sub['email']) === strtolower($email)) {
        $exists = true;
        break;
    }
}

if (!$exists) {
    $subscribers[] = [
        'email' => $email,
        'date'  => date('Y-m-d H:i:s'),
        'ip'    => $ip,
        'source'=> 'website'
    ];
    
    // Сохраняем
    if (file_put_contents($file, json_encode($subscribers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR)) === false) {
        error_log("Failed to save subscriber: $email");
    }
}

// Генерируем новый CSRF токен
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ačiū už prenumeratą! | Golden Hands</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background: #05070f;
            color: #e2e8f0;
            text-align: center;
            padding: 120px 20px;
            line-height: 1.6;
        }
        .success {
            background: #1e2937;
            max-width: 620px;
            margin: 0 auto;
            padding: 70px 40px;
            border-radius: 28px;
            border: 2px solid #34d399;
            box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.5);
        }
        h1 { 
            color: #34d399; 
            font-size: 2.8rem;
            margin-bottom: 20px;
        }
        p { font-size: 1.25rem; }
        a {
            color: #f59e0b;
            font-size: 1.25rem;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        a:hover { color: #fbbf24; text-decoration: underline; }
    </style>
</head>
<body>
    <div class="success">
        <h1>✅ Ačiū!</h1>
        <p style="font-size:1.35rem; margin:25px 0 30px;">Jūs sėkmingai užsiprenumeravote Golden Hands naujienlaiškį.</p>
        <p>Dabar pirmieji gausite naujienas, akcijas ir naudingus patarimus reklamos pasaulyje.</p>
        <br><br>
        <a href="/">← Grįžti į pagrindinį puslapį</a>
    </div>
</body>
</html>
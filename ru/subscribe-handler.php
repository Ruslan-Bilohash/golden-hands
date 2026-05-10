<?php
// subscribe-handler.php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /ru/");
    exit;
}

$email = trim($_POST['email'] ?? '');

// Простая валидация
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h2 style='color:#ef4444; text-align:center; margin-top:100px;'>Ошибка: введите корректный email</h2>";
    echo "<p style='text-align:center;'><a href='/ru/' style='color:#f59e0b;'>← Вернуться назад</a></p>";
    exit;
}

// Создаём папку, если нет
$folder = 'subscribers';
if (!is_dir($folder)) {
    mkdir($folder, 0755, true);
}

$file = $folder . '/subscribe.json';

// Читаем существующий файл
$subscribers = [];
if (file_exists($file)) {
    $json = file_get_contents($file);
    $subscribers = json_decode($json, true) ?: [];
}

// Проверяем, есть ли уже такой email
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
        'ip'    => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
    ];
}

// Сохраняем
file_put_contents($file, json_encode($subscribers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за подписку!</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #05070f;
            color: #e2e8f0;
            text-align: center;
            padding: 120px 20px;
        }
        .success {
            background: #1e2937;
            max-width: 600px;
            margin: 0 auto;
            padding: 60px 40px;
            border-radius: 24px;
            border: 2px solid #34d399;
        }
        h1 { color: #34d399; }
    </style>
</head>
<body>
    <div class="success">
        <h1>✅ Спасибо!</h1>
        <p style="font-size:1.3rem; margin:25px 0;">Вы успешно подписались на рассылку Golden Hands.</p>
        <p>Теперь вы будете получать новости, акции и полезные материалы первыми.</p>
        <br>
        <a href="/ru/" style="color:#f59e0b; font-size:1.2rem; text-decoration:none;">← Вернуться на главную</a>
    </div>
</body>
</html>
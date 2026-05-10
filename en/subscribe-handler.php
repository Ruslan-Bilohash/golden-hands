<?php
// subscribe-handler.php — Newsletter Subscription Handler (English version)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /en/");
    exit;
}

$email = trim($_POST['email'] ?? '');

// Basic validation
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h2 style='color:#ef4444; text-align:center; margin-top:100px;'>Error: Please enter a valid email address</h2>";
    echo "<p style='text-align:center;'><a href='/en/' style='color:#f59e0b; font-size:1.2rem;'>← Back to Home</a></p>";
    exit;
}

// Create folder if it doesn't exist
$folder = 'subscribers';
if (!is_dir($folder)) {
    mkdir($folder, 0755, true);
}

$file = $folder . '/subscribe.json';

// Read existing subscribers
$subscribers = [];
if (file_exists($file)) {
    $json = file_get_contents($file);
    $subscribers = json_decode($json, true) ?: [];
}

// Check if email already exists
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

// Save updated list
file_put_contents($file, json_encode($subscribers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Subscribing! — Golden Hands</title>
    <style>
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: #05070f;
            color: #e2e8f0;
            text-align: center;
            padding: 120px 20px;
            line-height: 1.6;
        }
        .success {
            background: #1e2937;
            max-width: 600px;
            margin: 0 auto;
            padding: 60px 40px;
            border-radius: 24px;
            border: 2px solid #34d399;
            box-shadow: 0 20px 50px rgba(0,0,0,0.6);
        }
        h1 { 
            color: #34d399; 
            margin-bottom: 20px;
        }
        a {
            color: #f59e0b;
            text-decoration: none;
            font-weight: 600;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="success">
        <h1>✅ Thank You!</h1>
        <p style="font-size:1.3rem; margin:25px 0;">You have successfully subscribed to the Golden Hands newsletter.</p>
        <p>You will now be the first to receive news, special offers, and useful materials about advertising structures.</p>
        <br>
        <a href="/en/" style="font-size:1.2rem;">← Back to Homepage</a>
    </div>
</body>
</html>
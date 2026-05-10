<?php
// bot.php — AI Consultant Grok xAI for Golden Hands (English version)
// Professional AI Chat Assistant

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/settings.php';

header('Content-Type: application/json; charset=utf-8');

$log_file = LOG_DIR . '/chat-' . date('Y-m-d') . '.log';

function log_chat($text) {
    global $log_file;
    $time = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    file_put_contents($log_file, "[$time] [$ip] $text\n", FILE_APPEND | LOCK_EX);
}

function rate_limit_check($session) {
    $rate_file = CONVERSATIONS_DIR . '/' . $session . '.rate';
    $now = time();
    $requests = file_exists($rate_file) ? json_decode(file_get_contents($rate_file), true) : [];
    $requests = array_filter($requests, fn($t) => $t > $now - 300); // 5 minutes
    $requests[] = $now;
    file_put_contents($rate_file, json_encode($requests), LOCK_EX);
    return count($requests) <= 30; // limit per 5 minutes
}

// Get input
$raw = file_get_contents('php://input');
$input = json_decode($raw, true) ?? [];

$session = $input['session'] ?? 's_' . time() . '_' . substr(md5(uniqid()), 0, 12);
$message = trim($input['message'] ?? '');

if (strlen($message) < 1 && $message !== '__AUTO_WELCOME__') {
    echo json_encode(['error' => 'Empty message']);
    exit;
}

if (!rate_limit_check($session)) {
    echo json_encode(['error' => 'Too many requests. Please wait 5 minutes.']);
    exit;
}

$file = CONVERSATIONS_DIR . '/' . $session . '.json';
$data = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

// Add system prompt only on first message
if (empty($data)) {
    $data[] = ['role' => 'system', 'content' => $SYSTEM_PROMPT];
}

// Handle auto welcome
$isAutoWelcome = ($message === '__AUTO_WELCOME__');
if ($isAutoWelcome) {
    $message = "Start the conversation.";
}

// Add user message
$data[] = ['role' => 'user', 'content' => $message, 'sender' => 'client'];
log_chat("→ Client: " . substr($message, 0, 400));

// === Send client message to Telegram ===
$tg_client = "🟢 <b>Client" . ($isAutoWelcome ? " (auto)" : "") . " wrote:</b>\n" .
             htmlspecialchars($message) . "\n\nSession: <code>$session</code>";

@file_get_contents("https://api.telegram.org/bot" . TELEGRAM_TOKEN . "/sendMessage?" . http_build_query([
    'chat_id' => YOUR_TELEGRAM_CHAT_ID,
    'text' => $tg_client,
    'parse_mode' => 'HTML'
]));

// Prepare messages for Grok API
$messages = [];
foreach ($data as $m) {
    if (!empty($m['content'])) {
        $messages[] = ['role' => $m['role'], 'content' => $m['content']];
    }
}

// Request to Grok xAI
$ch = curl_init('https://api.x.ai/v1/chat/completions');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode([
        'model' => GROK_MODEL,
        'messages' => $messages,
        'temperature' => 0.82,
        'max_tokens' => 700,
    ]),
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Authorization: Bearer ' . XAI_API_KEY
    ],
    CURLOPT_TIMEOUT => 50,
]);

$resp = curl_exec($ch);
$http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($http === 200) {
    $json = json_decode($resp, true);
    $reply = $json['choices'][0]['message']['content'] ??
             'Sorry, a technical error occurred. Please call me directly: +370 641 09990';
} else {
    $reply = 'Sorry, we are currently experiencing technical difficulties. Feel free to call me directly: +370 641 09990';
}

// Add Grok response to history
$data[] = ['role' => 'assistant', 'content' => $reply, 'sender' => 'bot'];

// === Send Grok reply to Telegram ===
$tg_grok = "🧠 <b>Grok AI replied to client:</b>\n" . htmlspecialchars($reply) . "\n\nSession: <code>$session</code>";

@file_get_contents("https://api.telegram.org/bot" . TELEGRAM_TOKEN . "/sendMessage?" . http_build_query([
    'chat_id' => YOUR_TELEGRAM_CHAT_ID,
    'text' => $tg_grok,
    'parse_mode' => 'HTML'
]));

log_chat("→ Grok AI: " . substr($reply, 0, 350));

// Save conversation history
file_put_contents($file, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

echo json_encode([
    'reply' => $reply,
    'session' => $session
]);
?>

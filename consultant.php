<?php
// consultant.php — Улучшенная версия (меньше повторений)
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$API_KEY = 'xai-';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['choices' => [['message' => ['content' => 'Здравствуйте! Чем могу помочь?']]]]);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
$userMessage = trim($input['message'] ?? '');

if (empty($userMessage)) {
    echo json_encode(['choices' => [['message' => ['content' => 'Здравствуйте! Расскажите, пожалуйста, о вашем проекте.']]]]);
    exit;
}

$systemPrompt = "Ты — Татьяна, энергичный менеджер Golden Hands. Отвечай живо, по делу, с интересом. Не повторяйся. Задавай вопросы, предлагай решения. Будь дружелюбной и продающей.";

$data = [
    "model" => "grok-beta",
    "messages" => [
        ["role" => "system", "content" => $systemPrompt],
        ["role" => "user", "content" => $userMessage]
    ],
    "temperature" => 0.85,
    "max_tokens" => 650
];

$ch = curl_init('https://api.x.ai/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $API_KEY
]);
curl_setopt($ch, CURLOPT_TIMEOUT, 12);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($response === false || $httpCode !== 200) {
    // Разнообразные ответы, чтобы не было "попугая"
    $fallbacks = [
        "Отлично, что вы написали! 😊 Расскажите, пожалуйста, какой проект вас интересует (вывески, световые короба, стенды и т.д.), и я помогу подобрать лучшее решение.",
        "Здравствуйте! Очень приятно! Какой именно тип рекламной конструкции вам нужен? Давайте вместе найдём идеальный вариант для вашего бизнеса.",
        "Спасибо за сообщение! 🔥 Расскажите немного о задаче — для какого бизнеса, где будет размещена реклама, и я предложу несколько вариантов.",
        "Привет! Я Татьяна из Golden Hands. Давайте сделаем крутую и эффективную рекламу! Что именно вас интересует?",
        "Рада вас слышать! Чтобы дать точный совет, уточните: это вывеска, световой короб, выставочный стенд или что-то индивидуальное?"
    ];
    
    echo json_encode([
        'choices' => [
            ['message' => ['content' => $fallbacks[array_rand($fallbacks)]]]
        ]
    ]);
    exit;
}

echo $response;
?>
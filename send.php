<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // reCAPTCHA проверка
    $recaptcha_secret = '';
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

    if (empty($recaptcha_response)) {
        header("Location: contact.php?status=recaptcha_error");
        exit;
    }

    $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $captcha_success = json_decode($verify);

    if ($captcha_success->success !== true) {
        header("Location: contact.php?status=recaptcha_error");
        exit;
    }

    // Данные формы
    $name    = strip_tags(trim($_POST["name"] ?? ""));
    $email   = strip_tags(trim($_POST["email"] ?? ""));
    $phone   = strip_tags(trim($_POST["phone"] ?? "Не указан"));
    $message = strip_tags(trim($_POST["message"] ?? ""));

    $ticketNumber = "REQ-" . date("Ymd") . "-" . rand(10000, 99999);

    // Сохранение в JSON
    $data = [
        "ticket" => $ticketNumber,
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "message" => $message,
        "date" => date("Y-m-d H:i:s")
    ];

    $folder = "clients";
    if (!is_dir($folder)) mkdir($folder, 0755, true);
    file_put_contents("$folder/$ticketNumber.json", json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    // PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'email@golden-hands.lt';
        $mail->Password   = '@';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = 'UTF-8';           // ← КРИТИЧНО!
        $mail->Encoding   = 'base64';          // ← КРИТИЧНО!

        $mail->setFrom('email@golden-hands.lt', 'Golden Hands');
        $mail->addAddress('rbilohash@gmail.com');
        $mail->addAddress('email@golden-hands.lt');
		$mail->addAddress('blackrabbit442@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "New Inquiry - Ticket #" . $ticketNumber;

        $htmlBody = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>New Inquiry</title>
        </head>
        <body style="margin:0; padding:0; background:#0f172a; font-family:Arial,sans-serif;">
            <div style="max-width:700px; margin:30px auto; background:#1e2937; border-radius:16px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.5);">
                <div style="background:linear-gradient(135deg, #1e2937, #334155); padding:35px; text-align:center;">
                    <h1 style="color:#f59e0b; margin:0; font-size:32px;">🖐️ GOLDEN HANDS</h1>
                    <p style="color:#94a3b8; margin:8px 0 0;">Новая заявка с сайта</p>
                </div>
                <div style="padding:40px; color:#e2e8f0;">
                    <h2 style="color:#f59e0b;">Ticket #' . $ticketNumber . '</h2>
                    <table style="width:100%; border-collapse:collapse; margin:25px 0;">
                        <tr style="background:#0f172a;"><td style="padding:14px; font-weight:600; width:35%;">Имя:</td><td style="padding:14px;">' . htmlspecialchars($name) . '</td></tr>
                        <tr><td style="padding:14px; font-weight:600;">Email:</td><td style="padding:14px;">' . htmlspecialchars($email) . '</td></tr>
                        <tr style="background:#0f172a;"><td style="padding:14px; font-weight:600;">Телефон:</td><td style="padding:14px;">' . htmlspecialchars($phone) . '</td></tr>
                        <tr><td style="padding:14px; font-weight:600;">Дата:</td><td style="padding:14px;">' . date("Y-m-d H:i") . '</td></tr>
                    </table>
                    <h3 style="color:#f59e0b; margin-top:30px;">Сообщение клиента</h3>
                    <div style="background:#0f172a; padding:25px; border-radius:12px; border-left:6px solid #f59e0b; line-height:1.7;">
                        ' . nl2br(htmlspecialchars($message)) . '
                    </div>
                </div>
                <div style="background:#0f172a; padding:30px; text-align:center; border-top:1px solid #334155;">
                    <p style="color:#64748b; font-size:14px;">© 2026 Golden Hands • Vilnius, Lithuania</p>
                </div>
            </div>
        </body>
        </html>';

        $mail->Body = $htmlBody;
        $mail->send();

        header("Location: contact.php?status=success");
        exit;

    } catch (Exception $e) {
        header("Location: contact.php?status=error");
        exit;
    }
} else {
    header("Location: contact.php");
    exit;
}
?>

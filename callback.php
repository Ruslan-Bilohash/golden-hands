<?php
// callback.php — Литовская версия (исправленная + улучшенная)
ini_set('display_errors', 0);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /kontaktai");
    exit;
}

// === reCAPTCHA ===
$recaptcha_secret = '';
$response = $_POST['g-recaptcha-response'] ?? '';

if (empty($response)) {
    header("Location: /kontaktai?status=recaptcha_error");
    exit;
}

$verify = @file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $response);
$success = json_decode($verify);

if (!$success || $success->success !== true) {
    header("Location: /kontaktai?status=recaptcha_error");
    exit;
}

// === Обработка телефона ===
$phone = preg_replace('/[^0-9+\-\(\)\s]/', '', trim($_POST['phone'] ?? ''));
if (empty($phone) || strlen($phone) < 6) {
    header("Location: /kontaktai?status=error");
    exit;
}

$ticketNumber = "CALL-" . date("Ymd") . "-" . rand(1000, 9999);

try {
    $mail = new PHPMailer(true);
    
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'email@golden-hands.lt';
    $mail->Password   = '@';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom('email@golden-hands.lt', 'Golden Hands');
    $mail->addAddress('email@golden-hands.lt');
    $mail->addAddress('rbilohash@gmail.com');
    $mail->addAddress('blackrabbit442@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = "📞 Naujas užsakymas atgaliniam skambučiui — Tiketas #" . $ticketNumber;

    $body = '
    <!DOCTYPE html>
    <html>
    <head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
    <body style="margin:0;padding:0;background:#0f172a;font-family:Arial,sans-serif;">
        <div style="max-width:700px;margin:30px auto;background:#1e2937;border-radius:24px;overflow:hidden;box-shadow:0 15px 50px rgba(0,0,0,0.7);">
            <div style="background:linear-gradient(135deg,#f59e0b,#eab308);padding:40px;text-align:center;">
                <h1 style="color:#111827;margin:0;font-size:28px;">📞 NAUJAS UŽSAKYMAS</h1>
            </div>
            <div style="padding:45px 40px;color:#e2e8f0;">
                <h2 style="color:#f59e0b;">Naujas prašymas paskambinti</h2>
                <div style="background:#0f172a;padding:28px;border-radius:16px;margin:25px 0;">
                    <table style="width:100%;border-collapse:collapse;">
                        <tr>
                            <td style="padding:14px 0;font-weight:600;color:#94a3b8;width:45%;">Telefono numeris:</td>
                            <td style="padding:14px 0;font-size:1.35rem;color:white;font-weight:700;">'.htmlspecialchars($phone).'</td>
                        </tr>
                        <tr style="background:#1e2937;">
                            <td style="padding:14px 0;font-weight:600;color:#94a3b8;">Tiketas:</td>
                            <td style="padding:14px 0;color:#f59e0b;font-weight:700;">'.$ticketNumber.'</td>
                        </tr>
                        <tr>
                            <td style="padding:14px 0;font-weight:600;color:#94a3b8;">Laikas:</td>
                            <td style="padding:14px 0;">'.date('Y-m-d H:i:s').'</td>
                        </tr>
                    </table>
                </div>
                <p style="text-align:center;font-size:1.25rem;color:#a5b4fc;">
                    <strong>Prašome susisiekti su klientu kuo greičiau!</strong>
                </p>
            </div>
            <div style="background:#0a0f1c;padding:30px;text-align:center;border-top:1px solid #334155;">
                <p style="margin:0;color:#64748b;">Golden Hands — Reklamos konstrukcijos Vilniuje</p>
            </div>
        </div>
    </body>
    </html>';

    $mail->Body = $body;
    $mail->send();

    header("Location: /perezvonit.php?status=callback_success");
    exit;

} catch (Exception $e) {
    error_log("PHPMailer Error: " . $e->getMessage());
    header("Location: /perezvonit.php?status=error");
    exit;
}
?>

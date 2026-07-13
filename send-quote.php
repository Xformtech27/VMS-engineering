<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request method.");
}

// --------------------------------------------------------------
// 1. Collect and sanitize form data
// --------------------------------------------------------------
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$company = trim($_POST['project'] ?? '');
$message = trim($_POST['message'] ?? '');
$subject = "New Quote Request from $name";

// --------------------------------------------------------------
// 2. Honeypot check (Anti-spam)
// --------------------------------------------------------------
if (!empty($_POST['honeypot'])) {
    exit("Spam detected.");
}

// --------------------------------------------------------------
// 3. Required field validation
// --------------------------------------------------------------
if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    die("Please fill in all required fields (Name, Email, Phone, Message).");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

if (!preg_match('/^[0-9]{10}$/', $phone)) {
    die("Invalid phone number. Please enter a 10-digit number.");
}

// --------------------------------------------------------------
// 4. Check if PHPMailer files exist
// --------------------------------------------------------------
if (!file_exists('class-phpmailer.php')) {
    die("class-phpmailer.php not found in root directory.");
}
if (!file_exists('class-smtp.php')) {
    die("class-smtp.php not found in root directory.");
}

// --------------------------------------------------------------
// 5. PHPMailer setup
// --------------------------------------------------------------
require_once 'class-phpmailer.php';
require_once 'class-smtp.php';

$mail = new PHPMailer();

try {
    // Server settings
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host       = 'smtp.gmail.com';
    $mail->Port       = 587;

    // Your Gmail credentials
    $mail->Username   = 'xformtech27@gmail.com';
    $mail->Password   = 'mout vlbd boul bsdg';

    // Email headers
    $mail->SetFrom('xformtech27@gmail.com', 'VMES Quote Request');
    $mail->AddReplyTo($email, $name);
    $mail->AddAddress('xformtech27@gmail.com');

    // Content
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nMessage:\n$message";

    $mail->Body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 10px; }
            .container { max-width: 600px; margin: 0 auto; background: #fff; border-radius: 8px; padding: 20px; border: 1px solid #ddd; }
            .header { background: #0d6efd; padding: 15px; text-align: center; color: white; border-radius: 8px 8px 0 0; }
            .field { margin-bottom: 15px; padding-bottom: 10px; border-bottom: 1px solid #eee; }
            .label { font-weight: bold; color: #0d6efd; font-size: 12px; text-transform: uppercase; }
            .value { margin-top: 5px; color: #333; font-size: 14px; }
            .badge { background: #0d6efd; color: white; padding: 3px 10px; border-radius: 20px; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2 style='margin:0;'>🚀 New Quote Request - VMES</h2>
            </div>
            <div style='padding: 20px;'>
                <div class='field'>
                    <div class='label'>👤 Name:</div>
                    <div class='value'>" . htmlspecialchars($name) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>📧 Email:</div>
                    <div class='value'>" . htmlspecialchars($email) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>📞 Phone:</div>
                    <div class='value'>" . htmlspecialchars($phone) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>🏢 Company:</div>
                    <div class='value'>" . htmlspecialchars($company ?: 'Not provided') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>📝 Message:</div>
                    <div class='value'>" . nl2br(htmlspecialchars($message)) . "</div>
                </div>
                <div style='margin-top: 20px; padding-top: 15px; border-top: 2px solid #0d6efd; text-align: center; color: #666; font-size: 12px;'>
                    <span class='badge'>Quote Request</span> Sent via VMES Website
                </div>
            </div>
        </div>
    </body>
    </html>";

    if($mail->Send()) {
        echo "success";
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo "Mailer Error: " . $e->getMessage();
}
?>
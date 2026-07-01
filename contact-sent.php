<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
    exit;
}

// ----------------------------
// GET FORM DATA
// ----------------------------
$f_name  = trim($_POST['f_name'] ?? '');
$l_name  = trim($_POST['l_name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$project = trim($_POST['project'] ?? '');
$message = trim($_POST['note'] ?? '');

$name = trim($f_name . ' ' . $l_name);
$subject = "New Contact Form Enquiry from $name";

// ----------------------------
// HONEYPOT (ANTI SPAM)
// ----------------------------
if (!empty($_POST['honeypot'])) {
    echo json_encode(["status" => "error", "message" => "Spam detected."]);
    exit;
}

// ----------------------------
// VALIDATION
// ----------------------------
if (empty($f_name) || empty($email) || empty($message)) {
    echo json_encode(["status" => "error", "message" => "Required fields missing."]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["status" => "error", "message" => "Invalid email address."]);
    exit;
}

if (!empty($phone) && !preg_match('/^[0-9]{10}$/', $phone)) {
    echo json_encode(["status" => "error", "message" => "Phone must be 10 digits."]);
    exit;
}

if (preg_match('/http|www|href|&#/i', $message)) {
    echo json_encode(["status" => "error", "message" => "Links not allowed in message."]);
    exit;
}

// ----------------------------
// SEND EMAIL (PHPMailer)
// ----------------------------
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host       = 'relay-hosting.secureserver.net';
    $mail->SMTPAuth   = false;
    $mail->Port       = 25;
    $mail->SMTPSecure = false;

    $mail->setFrom('noreply@xformtechnologies.com', 'Website Contact');
    $mail->addAddress('xformtech27@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = $subject;

    $mail->Body = "
        <h2>New Contact Form Submission</h2>
        <p><b>Name:</b> " . htmlspecialchars($name) . "</p>
        <p><b>Email:</b> " . htmlspecialchars($email) . "</p>
        <p><b>Phone:</b> " . htmlspecialchars($phone) . "</p>
        <p><b>Project:</b> " . htmlspecialchars($project) . "</p>
        <p><b>Message:</b><br>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    $mail->send();

    echo json_encode([
        "status" => "success",
        "message" => "Message sent successfully!"
    ]);

} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Mailer Error: " . $mail->ErrorInfo
    ]);
}
?>
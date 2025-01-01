<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'doba.abc@gmail.com';
    $mail->Password = 'qvzaxbmfgbiucoci'; // App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // or 'ssl'
    $mail->Port = 587;

    // Email content
    $mail->setFrom('doba.abc@gmail.com', 'Your Name');
    $mail->addAddress('samyaksanghvi20@gmail.com', 'Recipient Name');
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent using PHPMailer and Gmail SMTP.';

    // Send email
    $mail->send();
    echo 'Email sent successfully.';
} catch (Exception $e) {
    echo "Email could not be sent. Error: {$mail->ErrorInfo}";
}
?>

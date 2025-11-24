<?php
                               // Use Composer's autoloader
// begore require 'vendor/autoload.php'; // Ensure this path is correct
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email   = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'bogiepagwapo@gmail.com';
        $mail->Password   = 'sqnmziruvwdraakt'; // Use app password for Gmail, not your actual Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email setup
        $mail->setFrom('bogiepagwapo@gmail.com', 'Your Name');
        $mail->addAddress($email);

        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();

        echo "Email successfully sent!";
    } catch (Exception $e) {
        echo "Email failed: {$mail->ErrorInfo}";
    }
}

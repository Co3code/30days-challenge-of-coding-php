<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email   = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    //validate before sending 
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "please enter a valid email address.";
        exit;// stops the scrippt here if invalid
    }
    // 3️ Create PHPMailer object
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'bogiepagwapo@gmail.com';       
        $mail->Password   = 'kgbzmbqvxdxzarnb';          
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender
        $mail->setFrom('bogiepagwapo@gmail.com', 'Anthony (Day 26)');
        // Recipient
        $mail->addAddress($email);

        // Email content
        $mail->Subject = $subject;
        $mail->Body    = $message;

        // Send
        $mail->send();

        echo "Email successfully sent!";
    } catch (Exception $e) {
        echo "Email failed: " . $mail->ErrorInfo;
    }
}
?>

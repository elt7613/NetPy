<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendContactEmail($userData) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'djangochatbox@gmail.com';
        $mail->Password = 'mbmk cavq qzpv gqai';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Admin Email
        $adminEmail = 'elt7613@gmail.com'; // Replace with actual admin email

        // Send to Admin
        $mail->setFrom('djangochatbox@gmail.com', 'NetPy Contact Form');
        $mail->addAddress($adminEmail);
        $mail->addReplyTo($userData['email'], $userData['firstName'] . ' ' . $userData['lastName']);

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
        <html>
        <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$userData['firstName']} {$userData['lastName']}</p>
            <p><strong>Email:</strong> {$userData['email']}</p>
            <p><strong>Phone:</strong> {$userData['phone']}</p>
            <p><strong>Message:</strong><br>{$userData['message']}</p>
        </body>
        </html>";

        // Send confirmation to user
        $mail->send();
        
        // Send acknowledgment to user
        $mail->clearAddresses();
        $mail->addAddress($userData['email'], $userData['firstName'] . ' ' . $userData['lastName']);
        $mail->Subject = 'Thank you for contacting NetPy';
        $mail->Body = "
        <html>
        <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
            <h2>Thank You for Contacting Us</h2>
            <p>Dear {$userData['firstName']},</p>
            <p>We have received your message and will get back to you shortly.</p>
            <p>Best regards,<br>The NetPy Team</p>
        </body>
        </html>";

        $mail->send();
        return ['status' => 'success', 'message' => 'Your message has been sent successfully!'];

    } catch (Exception $e) {
        error_log("Email sending failed: " . $e->getMessage());
        return ['status' => 'error', 'message' => 'Failed to send message. Please try again later.'];
    }
}
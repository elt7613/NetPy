<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail($toEmail) {
    $mail = new PHPMailer(true);

    $htmlBody = "
    <html>
    <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
        <div style='max-width: 600px; margin: 0 auto; padding: 20px;'>
            <h2 style='color: #0e47a1;'>Welcome to NetPy Newsletter!</h2>

            <p>Thank you for subscribing to our newsletter. We're excited to keep you updated with:</p>

            <ul style='list-style-type: none; padding-left: 0;'>
                <li>✓ Latest technology trends</li>
                <li>✓ Company updates and announcements</li>
                <li>✓ Industry insights and best practices</li>
                <li>✓ Exclusive offers and events</li>
            </ul>

            <p>You'll receive our newsletters periodically with valuable content tailored to your interests.</p>

            <p style='margin-top: 20px;'>Best regards,<br>The NetPy Team</p>

            <div style='margin-top: 30px; font-size: 12px; color: #666;'>
                <p>If you wish to unsubscribe, you can click the unsubscribe link in any of our emails.</p>
            </div>
        </div>
    </body>
    </html>";

    // Plain text version
    $plainText = "Welcome to NetPy Newsletter!\n\n" .
                "Thank you for subscribing to our newsletter. We're excited to keep you updated with:\n\n" .
                "- Latest technology trends\n" .
                "- Company updates and announcements\n" .
                "- Industry insights and best practices\n" .
                "- Exclusive offers and events\n\n" .
                "Best regards,\nThe NetPy Team";

    try {
        $mail->SMTPDebug = 0; // Set to 2 for debugging
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'djangochatbox@gmail.com';
        $mail->Password = 'mbmk cavq qzpv gqai';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Add some error checking
        if (!$mail->Username || !$mail->Password) {
            throw new Exception('SMTP credentials not configured');
        }

        $mail->setFrom('djangochatbox@gmail.com', 'NetPy');
        $mail->addAddress($toEmail,'');
        $mail->isHTML(true);
        $mail->Subject = "Welcome to NetPy Newsletter!";
        $mail->Body = $htmlBody;
        $mail->AltBody = $plainText ?: strip_tags($htmlBody);

        if (!$mail->send()) {
            throw new Exception($mail->ErrorInfo);
        }

        return 'Email sent successfully!';
    } catch (Exception $e) {
        error_log("Email sending failed: " . $e->getMessage());
        return "Failed to send email. Error: {$e->getMessage()}";
    }
}


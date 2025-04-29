<?php
// Include PHPMailer classes
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate form fields
    $country = isset($_POST['country']) ? htmlspecialchars(trim($_POST['country'])) : '';
    $mobile = isset($_POST['mobile']) ? htmlspecialchars(trim($_POST['mobile'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $details = isset($_POST['details']) ? htmlspecialchars(trim($_POST['details'])) : '';

    // Check for empty fields
    if (empty($country) || empty($mobile) || empty($email) || empty($details)) {
        echo 'Error: All fields are required.';
        exit;
    }

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Error: Invalid email address.';
        exit;
    }

    // Validate mobile number (basic validation for numeric values)
    if (!preg_match('/^[0-9\+\-\(\)\s]*$/', $mobile)) {
        echo 'Error: Invalid mobile number.';
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();                                      // Use SMTP
        $mail->Host       = 'smtp.gmail.com';                 // Gmail SMTP server
        $mail->SMTPAuth   = true;                             // Enable SMTP authentication
        $mail->Username   = 'debojyotichakraborty54@gmail.com';           // Your Gmail address
        $mail->Password   = 'hjvv btfs jqav zzsl';              // Your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      // Enable SSL encryption
        $mail->Port       = 465;                              // TCP port for SSL

        // Email settings
        $mail->setFrom('debojyotihakraborty54@gmail.com', 'Tubers TV');  // Sender's email and name
        $mail->addAddress('idebojyoti54@gmail.com', 'Tubers TV Support'); // Recipient email
        $mail->addReplyTo($email, 'User');                   // Reply-To the user's email

        // Email content
        $mail->isHTML(true);                                 // Set email format to HTML
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <h3>New Contact Form Submission</h3>
            <p><strong>Country:</strong> {$country}</p>
            <p><strong>Mobile:</strong> {$mobile}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Details:</strong><br>{$details}</p>
        ";

        // Send the email
        $mail->send();
        echo 'Your message has been sent successfully!';
    } catch (Exception $e) {
        echo "Error: Message could not be sent. PHPMailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request.';
}
?>
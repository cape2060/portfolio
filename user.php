<?php
// Recipient email address
$to = "crackinghacking7@gmail.com";

// Subject of the email
$subject = "Test Email from PHP";

// Message body
$message = "Hello!\nThis is a test email sent from PHP.";

// Sender name and email
$senderName = "John Doe";
$senderEmail = "contact@swarnimstha.com.np";

// Headers with name
$headers = "From: $senderName <$senderEmail>\r\n";
$headers .= "Reply-To: $senderEmail\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $inquiry = htmlspecialchars($_POST['inquiry']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address (change this to your company's email)
    $to = "admin@monstergamesproductions.com.au";  // Replace with your email address
    $subject = "Contact Form Submission: $inquiry";

    // Compose the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Inquiry: $inquiry\n\n";
    $body .= "Message:\n$message";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message failed to send. Please try again later.";
    }
}
?>

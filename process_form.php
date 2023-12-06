<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up the email
    $to = "your@example.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>

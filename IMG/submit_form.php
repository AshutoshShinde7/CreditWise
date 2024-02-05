<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate form data (add your own validation logic as needed)
    if (empty($name) || empty($email) || empty($message)) {
        // Handle form validation error
        echo "Please fill in all required fields.";
        exit;
    }

    // Compose email message
    $to = "ashutoshshinde236@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    $email_body = "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Message: " . $message;

    // Send email
    $headers = "From: " . $email . "\r\n";
    if (mail($to, $subject, $email_body, $headers)) {
        // Email sent successfully
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        // Error sending email
        echo "Oops! An error occurred while sending the message.";
    }
} else {
    // Redirect user if accessed directly without submitting the form
    header("Location: contact_us.html");
    exit;
}
?>

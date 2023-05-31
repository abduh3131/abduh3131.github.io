<?php
    // Replace with your email
    $recipient = "dgx575@gmail.com";

    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // Send the email
    mail($recipient, "New Contact Form Submission", $email_content);

    echo 'success';
?>

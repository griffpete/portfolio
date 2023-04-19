<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Send email
$to = 'griffpete31@gmail.com';
$subject = 'New contact form submission';
$body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
$headers = "From: $email\r\nReply-To: $email\r\n";
mail($to, $subject, $body, $headers);

// Reset form fields
$_POST['name'] = "";
$_POST['email'] = "";
$_POST['phone'] = "";
$_POST['message'] = "";

// Success message
echo "<p>Thank you for contacting us!</p>"
?>

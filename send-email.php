<?php
// Get the value of the 'name' field from the POST data and store it in the $name variable
$name = $_POST["name"];

// Get the value of the 'email' field from the POST data and store it in the $email variable
$email = $_POST["email"];

// Get the value of the 'subject' field from the POST data and store it in the $subject variable
$subject = $_POST["subject"];

// Get the value of the 'message' field from the POST data and store it in the $message variable
$message = $_POST["message"];

// Include the PHPMailer autoload file
require "vendor/autoload.php";

// Import necessary classes from the PHPMailer namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Create a new instance of the PHPMailer class
$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

// Set up SMTP settings
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com"; // SMTP server host
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption method
$mail->Port = 587; // SMTP port
$mail->Password = "password"; // SMTP password

// Set the email subject and body
$mail->Subject = $subject; // Subject of the email
$mail->Body = $message; // Body of the email

// Attempt to send the email
$mail->send();

// Redirect
header("Location: sent.html");

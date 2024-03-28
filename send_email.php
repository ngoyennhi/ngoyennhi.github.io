<?php
ini_set("mail.log", "/tmp/mail.log");
ini_set("mail.add_x_header", TRUE);

// Get form data
$email = $_POST['email'];
$lon1 = $_POST['lon1'];
$lat1 = $_POST['lat1'];
$lon2 = $_POST['lon2'];
$lat2 = $_POST['lat2'];
$lon3 = $_POST['lon3'];
$lat3 = $_POST['lat3'];
$lon4 = $_POST['lon4'];
$lat4 = $_POST['lat4'];

// Compose email message
$message = "Coordinates received:\n";
$message .= "Longitude 1: $lon1, Latitude 1: $lat1\n";
$message .= "Longitude 2: $lon2, Latitude 2: $lat2\n";
$message .= "Longitude 3: $lon3, Latitude 3: $lat3\n";
$message .= "Longitude 4: $lon4, Latitude 4: $lat4\n";

// Set up email headers
$headers = "From: Your Website <noreply@example.com>";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$header.= "X-Priority: 1\r\n";

$to = 'nhimont2024@gmail.com';
$subject = 'Coordinates from Website';
// Send email
$mailSent = mail($to,$subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Coordinates sent successfully to your email.";
} else {
    echo "Failed to send coordinates. Please try again later.";
}


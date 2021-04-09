<?php

include 'checkUser.php';
include 'TicketForm.php';

session_start();

$database = mysqli_connect('localhost', 'root', '', 'webfinal');

$email = $_SESSION['email'];

// message
$msg = "Thank You for Choosing StarLux Cinemas.\n\nThis is a purchase confirmation 
for your order.\n\nMovie: <b>$movie_name</b>\nDate: <b>$date</b>\nTheatre Location: 
    <b>$location</b>\n\nEnjoy the show!";

$msg = wordwrap($msg, 70);

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // sends email
    mail($email, "StarLux e-Ticket Purchase Confirmation", $msg);
}

include 'verification-page'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Email Verification Page</title>
    <!--attach css files-->
    <link rel="stylesheet" href="css/navBar.css" type="text/css">
    <link rel="stylesheet" href="css/verify.css" type="text/css">
</head>
<body>

    <?php

    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['subbtn'])){
        
        $date_n = $_POST['btn-date'];
        $location_n = $_POST['btn-location'];
        $movie_n = $_POST['btn-movie'];

        $database = mysqli_connect('localhost', 'root', '', 'webfinal');
        $email = $_SESSION['email'];

        // message
        $msg = "<html>
                    <body>
                        <br>
                        Thank you for choosing StarLux! This is a purchase confirmation for your order.<br><br>
                        Movie: <b>$movie_n</b><br>
                        Date: <b>$date_n</b><br>
                        Theatre Location: <b>$location_n</b><br><br><br>
                        Enjoy the show!<br>
                        <b>StarLux Cinemas</b>
                    <body>
                <html>";
        
        $message = wordwrap($msg, 150);

        //formats html in the email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: starlux-cinemas@gmail.com';
        $subject = 'StarLux e-Ticket Purchase Confirmation';

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            // sends email
            mail($email, $subject, $message, $headers);
        }
    }
    ?>

    <!--StarLux Cinemas logo-->
    <img src="images/MainLogo.png" id="main"><br><br>
    <!--navigation bar-->
    <div class="topnav">
        <a href="main-page.html" id="home-nav">Home</a>
        <a href="Theatres Page.html" id="theatres-nav">Theatres</a>
        <a href="Movie_Experiences.html" id="movie-experiences-nav">Movie Experiences</a>
        <a href="foods_and_drinks.html" id="food-and-drinks-nav">Food and Drinks</a>
        <a href="LSFormT.php"><button id="btn-nav">Book Tickets</button></a>
    </div><br><br><br>

    <div>
        <hr><h1>Thank You!</h1>
        <h2>Your booking was completed successfully.</h2><br>

        <img id="email" src="images/email.png" />

        <p id="text">An email receipt including the details of your booking has been<br> 
            sent to the email address provided. Please keep it for your records.
        </p>
    </div>
    <br><br><hr><br>

    <a class="link" href="main-page.html">Return to Main Page</a>
    
    <br><br><br>
    <p id="copyright">&#169 StarLux Cinemas.</p>

</body>
</html>
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
        echo $date_n;
        $location_n = $_POST['btn-location'];
        echo $location_n;
        $movie_n = $_POST['btn-movie'];
        echo $movie_n;

        //do it onclick

        $database = mysqli_connect('localhost', 'root', '', 'webfinal');
        $email = $_SESSION['email'];
        echo $email;

        // message
        $msg = "Thank You for Choosing StarLux Cinemas.\n\nThis is a purchase confirmation 
        for your order.\n\nMovie: <b>$movie_n</b>\nDate: <b>$date_n</b>\nTheatre Location: 
            <b>$location_n</b>\n\nEnjoy the show!";

        $msg = wordwrap($msg, 70);

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            // sends email
            mail($email, "StarLux e-Ticket Purchase Confirmation", $msg);
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
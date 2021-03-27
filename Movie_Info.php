<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $movieIMDB_ID = $_GET["selectedMovie"];
        $movie = getImdbRecord($movieIMDB_ID);
    }

    //function used to get all the info from the API about the movie
    function getImdbRecord($ImdbId){
        $path = "http://www.omdbapi.com/?i=$ImdbId&apikey=fceeaa45";
        $json = file_get_contents($path);
        return json_decode($json, TRUE);
    }
?>

<html>
    <head>
        <title>Movie Info </title>
        <style>
            <?php 
                include "css/navBar.css";
                include "css/StarLux_Cinemas_Style.css"; 
            ?>
        </style>
    </head>
    <body>
        <img src="images/MainLogo.png" id="main"><br><br>

        <!--navigation bar-->
        <div class="topnav">
            <a href="main-page.html" id="home">Home</a>
            <a href="Theatres Page.html">Theatres</a>
            <a href="Movie_Experiences.html">Movie Experiences</a>
            <a href="foods_and_drinks.html">Food and Drinks</a>
            <a href="LSFormT.php">Book Tickets</a>
        </div><br><br>

        <div id = "movie">
            <div class = "movie_decription">
                <?php
                    //display the poster
                    echo ("<img src = '".$movie['Poster']."'alt = '".$movie['Title']."'>");
                ?>
                <div class = "movie_info">
                    <div class = "movie_header">
                        <?php
                            //display the movie title and the description of the movie
                            echo "<p id = 'title'>".$movie['Title']." </p>";
                            echo "<p>(".$movie['Year'].")</p>";
                        ?>
                        <div id = "imdbRating"> 
                            <?php    
                                //print the imdb rating for the movie
                                echo "<img src = 'images/imdb_logo.png' alt = 'IMDB Logo'>";
                                echo ("<label>".$movie['imdbRating']."</label>/10 <br>");
                            ?>
                        </div>
                        <br>
                        <?php
                            echo ("<p>".$movie['Rated']." | ".$movie['Runtime']." | ".$movie['Genre']." | ".$movie['Released']."</p>");
                        ?>
                    </div>
                    <hr>
                    <?php
                        echo ("<p><b>Director:</b> ".$movie['Director']."</p>");
                        echo ("<p><b>Writer:</b> ".$movie['Writer']."</p>");
                        echo ("<p><b>Actors:</b> ".$movie['Actors']."</p>");
                        echo "<u><h2>Plot</h2></u>";
                        echo ("<p>".$movie['Plot']."</p>");//display the movie plot 
                    ?>
                </div>
            </div><br><br><br>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/FormDesign.css">
        <link rel="stylesheet" href="css/navBar.css">
        <script type="text/javascript" src="TicketsCalculations.js"></script>
        
        <img src="images/MainLogo.png" id="main"><br><br>
        <div class="topnav">
            <a href="main-page.html" id="home">Home</a>
            <a href="Theatres Page.html" id="theatres">Theatres</a>
            <a href="Movie_Experiences.html" id="movie-experiences">Movie Experiences</a>
            <a href="foods_and_drinks.html" id="food-and-drinks">Food and Drinks</a>
            <a href="LSFormT.php"><button id="btn">Book Tickets</button></a>
    </div>
    </head>

    <body>
        <form action="verification-page.php" method="POST">
            <div id = "form">
                <div>
                    <?php
                    //$date = $_POST['date'];
                    $location = $_POST['theatres']; 
                    //$movie_name = $_POST['movies'];
                    ?>
                    <!-- <script type="text/javascript">var location = "<?=$location ?>";</script>
                    <script type="text/javascript" src="TicketCalculations.js"></script> -->

                    <h1 class = "title">StarLux <?php echo $location ?> Cinemas </h1>
                    
                    <!--Standard, 3D and IMAX ticket  selection (avalible for all locations)-->
                    <div class= "movietype">Standard Tickets</div>
                    <div class= "ticketTypeSelection">
                        <h3 class="ticketType">General Admission</h3>
                        <p class="price">$14.99 x <input type ="number" min ="1" id = "generalS" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                    </div>
                    
                    <div class = "ticketTypeSelection">
                        <h3 class="ticketType">Senior (65+)</h3>
                        <p class="price">$9.99 x <input type ="number" min ="1" id = "seniorS" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                    </div>

                    <div class = "ticketTypeSelection">
                        <h3 class="ticketType">Children(3-13)</h3>
                        <p class="price">$8.99 x <input type ="number" min ="1" id = "childS" class = "counter" oninput="total()"oninput="validity.valid||(value='');"> </p>
                    </div>
                    
                    <div class= "movietype">3D Tickets</div>
                    <div class = "ticketTypeSelection">
                        <h3 class="ticketType">General Admission</h3>
                        <p class="price">$19.99 x <input type ="number" min ="1" id = "general3" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                    </div>

                    <div class = "ticketTypeSelection">
                        <h3 class="ticketType">Senior (65+)</h3>
                        <p class="price">$14.99 x <input type ="number" min ="1" id = "senior3" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                    </div>
                    
                    <div class = "ticketTypeSelection">
                        <h3 class="ticketType">Children(3-13)</h3>
                        <p class="price">$13.99 x <input type ="number" min ="1" id = "child3" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                    </div>
                    
                    <div class= "movietype">IMAX Tickets</div>
                    <div class = "ticketTypeSelection">
                        <h3 class="ticketType">General Admission</h3>
                        <p class="price">$24.99 x <input type ="number" min ="1" id = "generalI" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                    </div>

                    <div class = "ticketTypeSelection">
                        <h3 class="ticketType">Senior (65+)</h3>
                        <p class="price">$19.99 x <input type ="number" min ="1" id = "seniorI" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                    </div>
                    
                    <div class = "ticketTypeSelection">
                        <h3 class="ticketType">Children(3-13)</h3>
                        <p class="price">$18.99 x <input type ="number" min ="1" id = "childI" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                    </div>
                    <?php if ($location == 'Markham' or $location == 'Brampton'){?>
                        <div class= "movietype">D-BOX Tickets</div>
                        <div class = "ticketTypeSelection">
                            <h3 class="ticketType">Children(3-13)</h3>
                            <p class="price">$18.99 x <input type ="number" min ="1" id = "childI" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                        </div>

                        <div class = "ticketTypeSelection">
                            <h3 class="ticketType">General Admission</h3>
                            <p class="price">$29.99 x <input type ="number" min ="1" id = "generalD" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p> 
                        </div>
                
                        <div class = "ticketTypeSelection">
                            <h3 class="ticketType">Senior (65+)</h3>
                            <p class="price">$24.99 x <input type ="number" min ="1" id = "seniorD" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                        </div>            
                            
                        <div class = "ticketTypeSelection">
                            <h3 class="ticketType">Children(3-13)</h3>
                            <p class="price">$23.99 x <input type ="number" min ="1" id = "childD" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                        </div>
                    <?php } ?>
                    
                    <?php if ($location != 'North York'){ ?>
                        <div class= "movietype">ULTRA AVX Tickets</div>
                        <div class = "ticketTypeSelection">
                            <h3 class="ticketType">General Admission</h3>
                            <p class="price">$32.99 x <input type ="number" min ="1" id = "generalAX" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                        </div>
                        
                        <div class = "ticketTypeSelection">
                            <h3 class="ticketType">Senior (65+)</h3>
                            <p class="price">$27.99 x <input type ="number" min ="1" id = "seniorAX" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                        </div>
                
                        <div class = "ticketTypeSelection">
                            <h3 class="ticketType">Children(3-13)</h3>
                            <p class="price">$26.99 x <input type ="number" min ="1" id = "childAX" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                        </div>
                    <?php } ?>
                    
                    <?php if ($location == 'North York'){?> 
                        <div class= "movietype">ATMOS Tickets</div>
                        <div class = "ticketTypeSelection">
                            <h3 class="Addmission">General Admission</h3>
                            <p class="price">$34.99 x <input type ="number" min ="1" id = "generalA" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                        </div>
                
                        <div class = "ticketTypeSelection">
                            <h3 class="Senior">Senior (65+)</h3>
                            <p class="price">$29.99 x <input type ="number" min ="1" id = "seniorA" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                        </div>
                        
                        <div class = "ticketTypeSelection">
                            <h3 class="child">Children(3-13)</h3>
                            <p class="price">$28.99 x <input type ="number" min ="1" id = "childA" class = "counter" oninput="total()" oninput="validity.valid||(value='');"></p>
                        </div>
                    <?php } ?>
                </div> 
                <div id = "displayTotals">
                    <div id = "order" class = "title">Order Summary</div> <br>
                    <br>
                    <div id= "subtotal" class = "printTotal">Sutotal: </div> <br>
                    <div id = "tax" class = "printTotal">Tax: </div> <br>
                    <div id= "total" class = "printTotal">Total: </div>
                    <br>
                    <button type="submit" id="subbtn" value="submit">Purchase Tickets</button>
                </div>
            </div>
        </form>
    </body>
</html>
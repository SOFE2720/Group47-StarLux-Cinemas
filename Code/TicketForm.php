<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/FormDesign.css">
        <link rel="stylesheet" href="css/navBar.css">
        <script type="text/javascript" src="js/TicketsCalculations.js"></script>
        
        <img src="images/MainLogo.png" id="main"><br><br>
        <div class="topnav">
            <a href="main-page.html" id="home-nav">Home</a>
            <a href="Theatres Page.html" id="theatres-nav">Theatres</a>
            <a href="Movie_Experiences.html" id="movie-experiences-nav">Movie Experiences</a>
            <a href="foods_and_drinks.html" id="food-and-drinks-nav">Food and Drinks</a>
            <a href="LSFormT.php"><button id="btn-nav">Book Tickets</button></a>
        </div>
    </head>

    <body>
        <form id="ticketform" action="verification-page.php" method="POST">
            <div id="form">
                <div>
                    <?php
                    $date = $_POST['date'];
                    $location = $_POST['theatres']; 
                    $movie = $_POST['movies'];
                    ?>

                    <input type="hidden" id="theatreLocation" value="<?php echo $location ?>" />

                    <h1 id="title">StarLux <?php echo $location?> Cinemas </h1>
                    
                    <!--Standard, 3D and IMAX ticket selection (avalible for all locations)-->
                    <div class="movietype">Standard Tickets</div>
                    <div class="ticketTypeSelection">
                        <h3 class="ticketType">General Admission</h3>
                        <p class="price">$14.99 x <input type ="number" min ="1" id = "generalS" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                    </div>
                    
                    <div class="ticketTypeSelection">
                        <h3 class="ticketType">Senior (65+)</h3>
                        <p class="price">$9.99 x <input type ="number" min ="1" id = "seniorS" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                    </div>

                    <div class="ticketTypeSelection">
                        <h3 class="ticketType">Children(3-13)</h3>
                        <p class="price">$8.99 x <input type ="number" min ="1" id = "childS" class = "counter" oninput="total(false)"oninput="validity.valid||(value='');"> </p>
                    </div>
                    
                    <div class="movietype">3D Tickets</div>
                    <div class="ticketTypeSelection">
                        <h3 class="ticketType">General Admission</h3>
                        <p class="price">$19.99 x <input type ="number" min ="1" id = "general3" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                    </div>

                    <div class="ticketTypeSelection">
                        <h3 class="ticketType">Senior (65+)</h3>
                        <p class="price">$14.99 x <input type ="number" min ="1" id = "senior3" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                    </div>
                    
                    <div class="ticketTypeSelection">
                        <h3 class="ticketType">Children(3-13)</h3>
                        <p class="price">$13.99 x <input type ="number" min ="1" id = "child3" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                    </div>
                    
                    <div class="movietype">IMAX Tickets</div>
                    <div class="ticketTypeSelection">
                        <h3 class="ticketType">General Admission</h3>
                        <p class="price">$24.99 x <input type ="number" min ="1" id = "generalI" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                    </div>

                    <div class="ticketTypeSelection">
                        <h3 class="ticketType">Senior (65+)</h3>
                        <p class="price">$19.99 x <input type ="number" min ="1" id = "seniorI" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                    </div>
                    
                    <div class="ticketTypeSelection">
                        <h3 class="ticketType">Children(3-13)</h3>
                        <p class="price">$18.99 x <input type ="number" min ="1" id = "childI" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                    </div>
                    <?php if ($location == 'Markham' or $location == 'Brampton'){?>
                        <div class="movietype">D-BOX Tickets</div>
                        <div class="ticketTypeSelection">
                            <h3 class="ticketType">Children(3-13)</h3>
                            <p class="price">$18.99 x <input type ="number" min ="1" id = "childI" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                        </div>

                        <div class="ticketTypeSelection">
                            <h3 class="ticketType">General Admission</h3>
                            <p class="price">$29.99 x <input type ="number" min ="1" id = "generalD" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p> 
                        </div>
                
                        <div class="ticketTypeSelection">
                            <h3 class="ticketType">Senior (65+)</h3>
                            <p class="price">$24.99 x <input type ="number" min ="1" id = "seniorD" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                        </div>            
                            
                        <div class="ticketTypeSelection">
                            <h3 class="ticketType">Children(3-13)</h3>
                            <p class="price">$23.99 x <input type ="number" min ="1" id = "childD" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                        </div>
                    <?php } ?>
                    
                    <?php if ($location != 'North York'){ ?>
                        <div class="movietype">ULTRA AVX Tickets</div>
                        <div class="ticketTypeSelection">
                            <h3 class="ticketType">General Admission</h3>
                            <p class="price">$32.99 x <input type ="number" min ="1" id = "generalAX" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                        </div>
                        
                        <div class="ticketTypeSelection">
                            <h3 class="ticketType">Senior (65+)</h3>
                            <p class="price">$27.99 x <input type ="number" min ="1" id = "seniorAX" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                        </div>
                
                        <div class="ticketTypeSelection">
                            <h3 class="ticketType">Children(3-13)</h3>
                            <p class="price">$26.99 x <input type ="number" min ="1" id = "childAX" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                        </div>
                    <?php } ?>
                    
                    <?php if ($location == 'North York'){?> 
                        <div class="movietype">ATMOS Tickets</div>
                        <div class="ticketTypeSelection">
                            <h3 class="Addmission">General Admission</h3>
                            <p class="price">$34.99 x <input type ="number" min ="1" id = "generalA" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                        </div>
                
                        <div class="ticketTypeSelection">
                            <h3 class="Senior">Senior (65+)</h3>
                            <p class="price">$29.99 x <input type ="number" min ="1" id = "seniorA" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                        </div>
                        
                        <div class="ticketTypeSelection">
                            <h3 class="child">Children(3-13)</h3>
                            <p class="price">$28.99 x <input type ="number" min ="1" id = "childA" class = "counter" oninput="total(false)" oninput="validity.valid||(value='');"></p>
                        </div>
                    <?php } ?>
                </div> 
                <div id="displayTotals">
                    <div id="order">Order Summary</div> <br>
                    <div id="subtotal"false class="printTotal">Subtotal: </div> <br>
                    <div id="tax" class="printTotal">Tax: </div> <br>
                    <div id="total"false class="printTotal">Total: </div>
                    <br>
                
                    <div id = "creditCardInput">
                        <div id = "paymentOptions">
                            <div class="cc-selector">
                                <input id="visa" type="radio" name="credit-card" value="visa"  checked/>
                                <label class="drinkcard-cc visa" for="visa"></label>
                                <input id="mastercard" type="radio" name="credit-card" value="mastercard" />
                                <label class="drinkcard-cc mastercard"for="mastercard"></label>
                                <input id="AMEX" type="radio" name="credit-card" value="AMEX" />
                                <label class="drinkcard-cc AMEX"for="AMEX"></label>
                            </div>
                        </div>
                        <br>
                    
                        <label for = "creditCardNum">Card Number:</label>
                        <input id = "creditCardNum" class = "creditCardInfo" type="tel" inputmode="numeric" pattern="[0-9]{16}" title = "16 digit card number" x-autocompleteype="cc-number" maxlength="16" placeholder="XXXXXXXXXXXXXXXX" required>
                        <label for = "cvv">CVV:</label>
                        <input id = "cvv" class = "creditCardInfo" type="tel" inputmode="numeric" pattern="[0-9]{3}" x-autocompleteype="cc-number" maxlength="3" placeholder="XXX" required>  
                    </div>
                    <br><br>
                    <input type="hidden" name="btn-date" value="<?=$date; ?>" />
                    <input type="hidden" name="btn-location" value="<?=$location; ?>" />
                    <input type="hidden" name="btn-movie" value="<?=$movie; ?>" />

                    <button type="submit" id="subbtn" name="subbtn" value="submit" onclick="total(true)">Purchase Tickets</button>
                </div>
            </div>
            <br><br><br>
        </form>
    </body>
</html>
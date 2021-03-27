<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/FormDesign.css">
        <link rel="stylesheet" href="css/navBar.css">
        <script type="text/javascript" src="TicketsCalculations.js"></script>
    </head>

    <body>
        <img src="images/MainLogo.png" id="main"><br><br>
        <div class="topnav">
            <a href="main-page.html" id="home">Home</a>
            <a href="Theatres Page.html">Theatres</a>
            <a href="Movie_Experiences.html">Movie Experiences</a>
            <a href="foods_and_drinks.html">Food and Drinks</a>
            <a href="#LSFormT.php">Book Tickets</a>
        </div>

        <?php if ($_POST['theatres'] == 1){ ?>

                <style>
                    #subbtn{
                    position: absolute;
                    top: 3800px;
                    left: 1150px;
                    font-size: 12pt;
                    color: white;
                    background-color: #052a5b;
                    height: 50px;
                    width: 180px;
                    margin-bottom: 200px;
                    }

                    #thanks{
                    position: absolute;
                    top: 3800px;
                    left: 180px;
                    font-weight: bold;
                    font-size: 15pt;
                    }
                </style>

            <form id = "ticketform">
                <div>

                    <h1 id= "title">StarLux Brampton Cinemas</h1>

                    <p class= "movietype">Standard Tickets</p>

                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$14.99 x</p>
                    <input type ="number" min ="1" id = "generalS" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">

                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$9.99 x</p>
                    <input type ="number" min ="1" id = "seniorS" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">

                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$8.99 x</p>
                    <input type ="number" min ="1" id = "childS" class = "counter" oninput="Btotal()"oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">3D Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$19.99 x</p>
                    <input type ="number" min ="1" id = "general3" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$14.99 x</p>
                    <input type ="number" min ="1" id = "senior3" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$13.99 x</p>
                    <input type ="number" min ="1" id = "child3" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">IMAX Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$24.99 x</p>
                    <input type ="number" min ="1" id = "generalI" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$19.99 x</p>
                    <input type ="number" min ="1" id = "seniorI" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$18.99 x</p>
                    <input type ="number" min ="1" id = "childI" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">D-BOX Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$29.99 x</p>
                    <input type ="number" min ="1" id = "generalD" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$24.99 x</p>
                    <input type ="number" min ="1" id = "seniorD" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$23.99 x</p>
                    <input type ="number" min ="1" id = "childD" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">ULTRA AVX Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$32.99 x</p>
                    <input type ="number" min ="1" id = "generalAX" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$27.99 x</p>
                    <input type ="number" min ="1" id = "seniorAX" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$26.99 x</p>
                    <input type ="number" min ="1" id = "childAX" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
                </div>


                <p id= "order">Order Summary</p>

                <p id= "S">Subtotal: </p><br>

                <p id = "t">Tax: </p><br>

                <p id= "T">Total: </p>



                <p id="subtotal"></p><br>

                <p id="tax"></p><br>

                <p id="total"></p>

                <p id="thanks"></p>

                <button type="button" id="subbtn" onclick="Thanks()">Purchase Tickets</button>

                
            </form>    

            

        <?php } else if ($_POST['theatres'] == 2){ ?> 
            
            
                <style>
            
            
                    #subbtn{
                    position: absolute;
                    top: 3300px;
                    left: 1150px;
                    font-size: 12pt;
                    color: white;
                    background-color: #052a5b;
                    height: 50px;
                    width: 180px;
                    margin-bottom: 200px;
                    }

                    #thanks{
                    position: absolute;
                    top: 3300px;
                    left: 180px;
                    font-weight: bold;
                    font-size: 15pt;
                    }


                </style>
        
            <form id = "ticketform">
                <div>

                    <h1 id= "title">StarLux North York Cinemas</h1>

                    <p class= "movietype">Standard Tickets</p>

                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$14.99 x</p>
                    <input type ="number" min ="1" id = "generalS" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">

                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$9.99 x</p>
                    <input type ="number" min ="1" id = "seniorS" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">

                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$8.99 x</p>
                    <input type ="number" min ="1" id = "childS" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">3D Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$19.99 x</p>
                    <input type ="number" min ="1" id = "general3" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$14.99 x</p>
                    <input type ="number" min ="1" id = "senior3" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$13.99 x</p>
                    <input type ="number" min ="1" id = "child3" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">IMAX Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$24.99 x</p>
                    <input type ="number" min ="1" id = "generalI" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$19.99 x</p>
                    <input type ="number" min ="1" id = "seniorI" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$18.99 x</p>
                    <input type ="number" min ="1" id = "childI" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">
                </div>


                <div>
                    <p class= "movietype">ATMOS Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$34.99 x</p>
                    <input type ="number" min ="1" id = "generalA" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$29.99 x</p>
                    <input type ="number" min ="1" id = "seniorA" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$28.99 x</p>
                    <input type ="number" min ="1" id = "childA" class = "counter" oninput="NYtotal()" oninput="validity.valid||(value='');">
                </div>


                <p id= "order">Order Summary</p>

                <p id= "S">Subtotal: </p><br>

                <p id = "t">Tax: </p><br>

                <p id= "T">Total: </p>



                <p id="subtotal"></p><br>

                <p id="tax"></p><br>

                <p id="total"></p>

                <p id="thanks"></p>

                <button type="button" onclick="Thanks()" id="subbtn">Purchase Tickets</button>

            </form>    

        <?php } else if ($_POST['theatres'] == 3){ ?>

                <style>
            
            
                    #subbtn{
                    position: absolute;
                    top: 3800px;
                    left: 1150px;
                    font-size: 12pt;
                    color: white;
                    background-color: #052a5b;
                    height: 50px;
                    width: 180px;
                    margin-bottom: 200px;
                    }

                    #thanks{
                    position: absolute;
                    top: 3800px;
                    left: 180px;
                    font-weight: bold;
                    font-size: 15pt;
                    }


                </style>

            

            <form id = "ticketform">
                <div>

                    <h1 id= "title">StarLux Mississauga Cinemas</h1>

                    <p class= "movietype">Standard Tickets</p>

                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$14.99 x</p>
                    <input type ="number" min ="1" id = "generalS" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">

                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$9.99 x</p>
                    <input type ="number" min ="1" id = "seniorS" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">

                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$8.99 x</p>
                    <input type ="number" min ="1" id = "childS" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">3D Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$19.99 x</p>
                    <input type ="number" min ="1" id = "general3" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$14.99 x</p>
                    <input type ="number" min ="1" id = "senior3" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$13.99 x</p>
                    <input type ="number" min ="1" id = "child3" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">IMAX Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$24.99 x</p>
                    <input type ="number" min ="1" id = "generalI" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$19.99 x</p>
                    <input type ="number" min ="1" id = "seniorI" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$18.99 x</p>
                    <input type ="number" min ="1" id = "childI" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">D-BOX Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$29.99 x</p>
                    <input type ="number" min ="1" id = "generalD" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$24.99 x</p>
                    <input type ="number" min ="1" id = "seniorD" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$23.99 x</p>
                    <input type ="number" min ="1" id = "childD" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">ULTRA AVX Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$34.99 x</p>
                    <input type ="number" min ="1" id = "generalAX" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$29.99 x</p>
                    <input type ="number" min ="1" id = "seniorAX" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$28.99 x</p>
                    <input type ="number" min ="1" id = "childAX" class = "counter" oninput="Btotal()" oninput="validity.valid||(value='');">
                </div>


                <p id= "order">Order Summary</p>

                <p id= "S">Subtotal: </p><br>

                <p id = "t">Tax: </p><br>

                <p id= "T">Total: </p>



                <p id="subtotal"></p><br>

                <p id="tax"></p><br>

                <p id="total"></p>

                <p id="thanks"></p>

                <button type="button" onclick="Thanks()" id="subbtn">Purchase Tickets</button>

                
            </form>

        <?php }else{ ?> 
        
                <style>
            
            
                    #subbtn{
                    position: absolute;
                    top: 3300px;
                    left: 1150px;
                    font-size: 12pt;
                    color: white;
                    background-color: #052a5b;
                    height: 50px;
                    width: 180px;
                    margin-bottom: 200px;
                    }

                    #thanks{
                    position: absolute;
                    top: 3300px;
                    left: 180px;
                    font-weight: bold;
                    font-size: 15pt;
                    }


                </style>

            

            <form id = "ticketform">
                <div>

                    <h1 id= "title">StarLux Markham Cinemas</h1>

                    <p class= "movietype">Standard Tickets</p>

                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$14.99 x</p>
                    <input type ="number" min ="1" id = "generalS" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">

                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$9.99 x</p>
                    <input type ="number" min ="1" id = "seniorS" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">

                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$8.99 x</p>
                    <input type ="number" min ="1" id = "childS" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">3D Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$19.99 x</p>
                    <input type ="number" min ="1" id = "general3" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$14.99 x</p>
                    <input type ="number" min ="1" id = "senior3" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$13.99 x</p>
                    <input type ="number" min ="1" id = "child3" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">IMAX Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$24.99 x</p>
                    <input type ="number" min ="1" id = "generalI" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$19.99 x</p>
                    <input type ="number" min ="1" id = "seniorI" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$18.99 x</p>
                    <input type ="number" min ="1" id = "childI" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">
                </div>

                <div>
                    <p class= "movietype">ULTRA AVX Tickets</p>
        
                    <h3 class="Addmission">General Admission</h3>
                    <p class="price">$34.99 x</p>
                    <input type ="number" min ="1" id = "generalAX" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="Senior">Senior (65+)</h3>
                    <p class="price">$29.99 x</p>
                    <input type ="number" min ="1" id = "seniorAX" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">
        
                    <h3 class="child">Children(3-13)</h3>
                    <p class="price">$28.99 x</p>
                    <input type ="number" min ="1" id = "childAX" class = "counter" oninput="Mtotal()" oninput="validity.valid||(value='');">
                </div>



                <p id= "order">Order Summary</p>

                <p id= "S">Subtotal: </p><br>

                <p id = "t">Tax: </p><br>

                <p id= "T">Total: </p>



                <p id="subtotal"></p><br>

                <p id="tax"></p><br>

                <p id="total"></p>

                <p id="thanks"></p>

                <button type="button" onclick="Thanks()" id="subbtn">Purchase Tickets</button>

                
            </form>

        <?php } ?>    
            




    </body>

</html>
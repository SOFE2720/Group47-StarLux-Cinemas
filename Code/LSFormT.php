<!-- Creates the Login and Sign Up form and send information to checkuser.php -->
<?php include('checkuser.php') ?>
<!DOCTYPE html>
<html>
    
    <head>

        <link rel="stylesheet" href="css/AccountStyle.css">
        <link rel="stylesheet" href="css/navBar.css">

    </head>

    <body>
        
        <button class="tablink" onclick="openPage('Login', this, 'white')" id="defaultOpen">Login</button>
        <button class="tablink" onclick="openPage('SignUp', this, 'white')">Sign Up</button>
        
        
        <div id="Login" class="tabcontent">
        <h3 class= "head">Login to StarLux Cinemas</h3>
        <form method= "POST" action="checkuser.php">

            <label class= "label">Username</label>
            <input type="text" class="textbox" name="username" required>

            <label class= "label">Password</label>
            <input type="password" class="textbox" name="password" required>

            <button type="submit" class="btn" name="login">Login</button>

        </form>
        </div>

        <div id="SignUp" class="tabcontent">
        <h3 class="head">Sign Up to StarLux Cinemas</h3>
            <form method= "POST" action="checkuser.php">
    
                <label class= "label">Username</label>
                <input type="text" class="textbox" name="username" required>
    
                <label class= "label">Password</label>
                <input type="password" class="textbox" name="password" required>

                <label class= "label">Email</label>
                <input type ="email" class="textbox" name="email" required>
    
                <button type="submit" class="btn" name="signup">Sign Up</button>

            </form>


        </div>

        <a href="Theatres Page.html" style="position:relative; bottom: 35px;">Return to Theatres Page</a>



    </body>

    <script>
        
        function openPage(pageName, elmnt, color){
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");

            for (i = 0; i < tabcontent.length; i++){
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablink");
            for(i = 0; i< tablinks.length; i++){
                tablinks[i].style.backgroundColor = "";
            }

            document.getElementById(pageName).style.display = "block";

            elmnt.style.backgroundColor = color;

        }

        document.getElementById("defaultOpen").click();

    </script>

</html>
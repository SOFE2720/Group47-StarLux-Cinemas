<?php

//THis PHP file validates user information for login and inserts user information into database table for sign up

session_start();

$database = mysqli_connect('localhost', 'root', '', 'webfinal');

if (isset($_POST['login'])){
    $username = mysqli_real_escape_string($database, $_POST['username']);
    $password = mysqli_real_escape_string($database, $_POST['password']);
    $correctPass = false;

    $database_users = "SELECT Username, Password FROM users ORDER BY Username";
    $result = mysqli_query($database, $database_users);

    while ($user = mysqli_fetch_row($result)){
        printf("%s (%s)\n", $user[0], $user[1]);
        if ($user[0] == $username){
            if (password_verify($password, $user[1])){
                $correctPass = true;
            }
            break;
        }
    }

    if ($correctPass){
        header( 'Location: SeatBooking.html' );
    }
    else{
        header( 'Location: Fail.html' ) ;
    }
}

if (isset($_POST['signup'])) {
    $username = mysqli_real_escape_string($database, $_POST['username']);
    #encrypt password for customer safety
    $password = password_hash(mysqli_real_escape_string($database, $_POST['password']), PASSWORD_DEFAULT); 

    $query = "INSERT INTO users (Username, Password) VALUES('$username', '$password')";

    mysqli_query($database, $query);

    if ($_POST['theatres'] !== 0){

        header( 'Location: SeatBooking.html' ) ;
    }
}

?>
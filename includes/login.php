<?php

include "autoLoader.php";

if (isset($_POST["submit"])) {
    
    // Get the data
    $username = $_POST["username"];
    $password = $_POST["password"];


    // Instantiate RegisterController classes and auto loader
    
    $login = new LoginController($username, $password);


    // Running error handler and user register
    $login->loginUsers();

    // // Going to back to front page
    header("Location: ../index.php?error=none");
}




?>
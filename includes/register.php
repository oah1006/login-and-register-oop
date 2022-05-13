<?php

include "autoLoader.php";

if (isset($_POST["submit"])) {
    
    // Get the data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordConfirmation = $_POST["password_confirmation"];
    $email = $_POST["email"];

    // Instantiate RegisterController classes and auto loader
    
    $register = new RegisterController($username, $password, $passwordConfirmation, $email);


    // Running error handler and user register
    $register->registerUsers();

    // // Going to back to front page
    header("Location: ../index.php?error=none");
}




?>
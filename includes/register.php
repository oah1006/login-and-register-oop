<?php

if (isset($_POST["submit"])) {

    // Get the data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordConfirmation = $_POST["password_confirmation"];
    $email = $_POST["email"];

    // Instantiate RegisterController classes
    include "../classes/Register.php";
    include "../classes/RegisterController.php";

    $register = new RegisterController($username, $password, $passwordConfirmation, $email);
}




?>
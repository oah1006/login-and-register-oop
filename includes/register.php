<?php

spl_autoload_register("myAutoLoader");

if (isset($_POST["submit"])) {

    // Get the data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordConfirmation = $_POST["password_confirmation"];
    $email = $_POST["email"];

    // Instantiate RegisterController classes and auto loader
    function myAutoLoader($className) {
        $path = "classes/";
        $extension = ".php";
        $fullPath = $path . $className . $extension;

        if(!file_exists($fullPath)) {
            return false;
        }

        include_once($fullPath);
    }
    

    $register = new RegisterController($username, $password, $passwordConfirmation, $email);
}




?>
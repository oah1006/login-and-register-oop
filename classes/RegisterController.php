<?php

class RegisterController {
    public $username;
    public $password;
    public $passwordConfirmation;
    public $email;

    public function __contruct($username, $password, $passwordConfirmation, $email) {
        $this->username = $username;
        $this->password = $password;
        $this->passwordConfirmation = $passwordConfirmation;
        $this->email = $email;
    }

}





?>
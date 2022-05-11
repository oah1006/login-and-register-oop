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

    private function checkEmptyInput() {
        $result = null;
        if (empty($this->username) || empty($this->password) || empty($this->passwordConfirmation) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function checkUsername() {
        $result = null;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }


}





?>
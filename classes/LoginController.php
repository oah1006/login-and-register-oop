<?php

class LoginController extends Login {
    public $username;
    public $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function loginUsers() {
        if ($this->checkEmptyInput() == false) {
            header("Location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUsers($this->username, $this->password);

    }

    private function checkEmptyInput() {
        $result = null;
        if (empty($this->username) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

}





?>
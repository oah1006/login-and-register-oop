<?php

class Register extends DB {
    protected function setUsers($username, $password, $email) {
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);

        $hashingPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($username, $hashingPassword, $email))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUsers($username, $email) {
        $sql = "SELECT username FROM users WHERE username = ? or email = ?;";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = null;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false; 
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}




?>
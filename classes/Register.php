<?php

class Register extends DB {
    protected function setUsers($username, $email) {
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);

        $hashingPassword = password_hash($password, PASSWORD_DEFAULT);

        if ($stmt->execute(array($username, $password, $email))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
    }

    protected function checkUsers($username, $email) {
        $sql = "SELECT * FROM users WHERE username = ? or email = ?;";
        $stmt = $this->connect()->prepare($sql);

        if ($stmt->execute(array($username, $email))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = null;
        if (!$stmt->rowCount() > 0) {
            $resultCheck = false; 
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}




?>
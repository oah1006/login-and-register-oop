<?php

class Register extends DB {
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
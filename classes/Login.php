<?php

class Login extends DB {
    protected function getUsers($username, $password) {
        $sql = "SELECT password FROM users WHERE username = ? or email = ?;";
        $stmt = $this->connect()->prepare($sql);


        if (!$stmt->execute(array($username, $password))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("Location: ../index.php?error=usernotfound");
            exit();
        }

        $passwordHashing = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $passwordHashing[0]["password"]);

        if ($checkPassword == false) {
            $stmt = null;
            header("Location: ../index.php?error=wrongpassword");
            exit();
        } elseif ($checkPassword == true) {
            $sql = "SELECT * FROM users WHERE username = ? or email = ? AND password = ?;";
            $stmt = $this->connect()->prepare($sql);

            if (!$stmt->execute(array($username, $password, $email))) {
                $stmt = null;
                header("Location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("Location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["users_id"] = $user[0]["users_id"];
            $_SESSION["username"] = $user[0]["username"];

        }

        $stmt = null;
    }
}




?>
<?php

class DB {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "login";
    
    protected function connect() {
        try {
            $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . this->db, $username, $password);
            return $dbo;
        } catch (PDOException $e) {
            print("Error! " . $e->getMessage() . "<br/>");
            die();
        }
    }
}






?>
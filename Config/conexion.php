<?php

class Database {
    private $host = "localhost";
    private $dbname = "cafeteria";
    private $user = "root";
    private $pass = "";

    public function connect() {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", 
                            $this->user, 
                            $this->pass);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $conn;
        } catch (Exception $e) {
            die("Error: ". $e->getMessage());
        }
    }
}

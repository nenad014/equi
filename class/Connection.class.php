<?php

class Connection {

    private $host = 'localhost';
    private $dbname = 'equi';
    private $user = 'root';
    private $password = '';

    private $conn;

    public function connection() {
        $this->conn = NULL;

        try {
            $this->conn = new PDO('mysql:host='.$this->host.'; dbname='.$this->dbname, $this->user, $this->password);
            return $this->conn;
        } catch(PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
<?php

class Size {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function read() {
        $sql = "SELECT * FROM size";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }
}
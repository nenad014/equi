<?php

class Color {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Sve boje
    public function read() {
        $sql = "SELECT * FROM colors ORDER BY color_name ASC";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }
}
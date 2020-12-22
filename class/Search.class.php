<?php

class Search {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function searchResults() {
        $search = $_POST['search'];
        $sql = "SELECT *, category.cat_name FROM products INNER JOIN category ON products.cat_id = category.cat_id WHERE name LIKE '%$search%' OR details LIKE '%$search%' OR cat_name LIKE '%$search'";
        $query = $this->conn->query($sql);
        $queryResults = $query->rowCount();

        if($queryResults > 0) {
            $result = $query->fetch(PDO::FETCH_OBJ);
            return $result;
        } else {
            echo "Nema rezultata";
        }
    }
}
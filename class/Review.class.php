<?php

class Review {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function read() {
        $sql = "SELECT *, products.name, products.cover_img FROM reviews INNER JOIN products ON reviews.product_id = products.id ORDER BY reviews.product_id DESC";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function insert() {
        $product_id = $_POST['product_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $rate = $_POST['rate'];
        $review = $_POST['review'];

        $sql = "INSERT INTO reviews VALUES (NULL, ?, ?, ?, ?, ?)";
        $query = $this->conn->prepare($sql);
        $query->execute([$product_id, $name, $email, $rate, $review]);
        $count = $query->rowCount();

        if($count == 1) {
            header('Location: index.php');
        } else {
            header('Location: single.item.view.php?id='.$product_id);
        }
    }
}
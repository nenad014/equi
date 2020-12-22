<?php

class Product {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Svi artikli
    public function read() {
        $sql = "SELECT *,category.cat_name FROM products INNER JOIN category ON products.cat_id = category.cat_id ORDER BY products.id DESC";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function readStore() {
        $sql = "SELECT * FROM products WHERE outlet = 0 ORDER BY id DESC";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    // Svi outlet artikli
    public function readOutlet($url) {
        $sql = "SELECT *, category.cat_name FROM products INNER JOIN category ON products.cat_id = category.cat_id WHERE products.outlet = ? ORDER BY products.id DESC";
        $query = $this->conn->prepare($sql);
        $query->execute([$url]);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    // Najnoviji artikli
    public function latest() {
        $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 7";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function latestOutlet($url) {
        $sql = "SELECT * FROM products WHERE outlet = ? ORDER BY id DESC LIMIT 7";
        $query = $this->conn->prepare($sql);
        $query->execute([$url]);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function show($id) {
        $sql = "SELECT *, category.cat_name FROM products INNER JOIN category ON products.cat_id = category.cat_id WHERE products.id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $result = $query->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function getByCat($id) {
        $sql = "SELECT * FROM products WHERE cat_id = ? ORDER BY id DESC";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }


    public function add() {
            $targetDir = '../uploads/';
            $fileName = basename($_FILES['img']['name'][0]);
            $fileName2 = basename($_FILES['img']['name'][1]);
            $targetFilePath = $targetDir . $fileName;
            $targetFilePath2 = $targetDir . $fileName2;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            $allowTypes = array('jpg', 'jpeg', 'png', 'jfif');
            if(in_array($fileType, $allowTypes)) {
                move_uploaded_file($_FILES['img']['tmp_name'][0], $targetFilePath) && move_uploaded_file($_FILES['img']['tmp_name'][1], $targetFilePath2);
                $name = $_POST['name'];
                $details = $_POST['details'];
                $price = $_POST['price'];
                $outlet = $_POST['outlet'];
                $outlet_price = $_POST['outlet_price'];
                foreach($_POST['size'] as $value) {
                    $size .= $value . ' ';
                }
                foreach($_POST['color'] as $value) {
                    $color .= $value . ' ';
                }

                $img1 = "uploads/" . $_FILES['img']['name'][0];
                $img2 = "uploads/" . $_FILES['img']['name'][1];
                $status = $_POST['status'];
                $cat_id = $_POST['cat_id'];

                $sql = "INSERT INTO products VALUES(NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $query = $this->conn->prepare($sql);
                $query->execute([$name, $details, $price, $outlet_price, $size, $color, $img1, $img2, $status, $outlet, $cat_id]);
                $row_count = $query->rowCount();

                if($row_count == 1) {
                    header('Location: items.php');
                } else {
                    header('Location: add-item.php');
                }
            }
        }

    public function update() {
        $item_id = $_POST['item_id'];
        $name = $_POST['name'];
        $details = $_POST['details'];
        $price = $_POST['price'];
        $outlet = $_POST['outlet'];
        $lower_price = $_POST['lower_price'];
        foreach($_POST['size'] as $value) {
            $size .= $value . ' ';
        }
        foreach($_POST['color'] as $value) {
            $color .= $value . ' ';
        }
        $status = $_POST['status'];
        $cat_id = $_POST['cat_id'];

        $cover_img = $_FILES['img']['name'][0];
        $img_2 = $_FILES['img']['name'][1];
        $p_img1 = $_POST['img1'];
        $p_img2 = $_POST['img2'];

        if(empty($cover_img)) {
            $cover_img = $p_img1;
        } else {
            $cover_img = $_FILES['img']['name'][0];
            $temp_name = $_FILES['img']['tmp_name'][0];
            move_uploaded_file($temp_name, "../uploads/$cover_img");
        }
        if(empty($img_2)) {
            $img_2 = $p_img2;
        } else {
            $img_2 = $_FILES['img']['name'][1];
            $temp_name = $_FILES['img']['tmp_name'][1];
            move_uploaded_file($temp_name, "../uploads/$img_2");
        }

        $img1 = "uploads/".$cover_img;
        $img2 = "uploads/".$img_2;

        $sql = "UPDATE products SET name = '$name', details = '$details', price = '$price', lower_price = '$lower_price', color = '$color', cover_img = '$img1', img_2 = '$img2', status='$status', cat_id='$cat_id', outlet='$outlet' WHERE id=$item_id";
        $query = $this->conn->query($sql);

        if($query) {
            header('Location: items.php');
        } else {
            header('Location: update-item.php?id='.$item_id);
        }
    }

    public function remove($id) {
        $sql = "DELETE FROM products WHERE id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);

        if($query) {
            header('Location: items.php');
        } else {
            header('Location: 404.php');
        }
    }

    public function related($catId, $id) {
        $sql = "SELECT * FROM products WHERE cat_id = ? AND NOT id = ? LIMIT 6";
        $query = $this->conn->prepare($sql);
        $query->execute([$catId, $id]);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }
}
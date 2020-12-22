<?php

class Blog {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Svi blog postovi
    public function read() {
        $sql = "SELECT * FROM blog ORDER BY created DESC";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    // Poslednja 4 posta
    public function latest() {
        $sql = "SELECT * FROM blog ORDER BY created DESC LIMIT 5";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    // Single blog post
    public function show($id) {
        $sql = "SELECT * FROM blog WHERE post_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $result = $query->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    // Dodaj blog post
    public function add() {
        if($_FILES['image']['error']>0) {
            $msg[] = "Greska prilikom ucitavanja slike";
        }
        
        if(!(strtoupper(substr($_FILES['image']['name'],-4))==".JPG" || strtoupper(substr($_FILES['image']['name'],-5))==".JPEG" || strtoupper(substr($_FILES['image']['name'],-4))==".PNG" || strtoupper(substr($_FILES['image']['name'],-5))==".JFIF")) {
            $msg[] = "Pogresan tip fajla";
        }
        if(file_exists("../uploads/" . $_FILES['image']['name'])) {
            $msg[] = "Slika već postoji. Molimo Vas da ne unosite slike sa istim imenom.";
        }
    
        if(!empty($msg)) {
            echo '<b>Greska:-</b><br>';
            foreach ($msg as $k) {
                echo '<li>' . $k;
            }
        } else {
            move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/" . $_FILES['image']['name']);
            
            $title = $_POST['title'];
            $body = $_POST['body'];
            $image = "uploads/" . $_FILES['image']['name'];
            $created = $_POST['created'];

            $sql = "INSERT INTO blog VALUES (NULL, ?, ?, ?, ?)";
            $query = $this->conn->prepare($sql);
            $query->execute([$title, $body, $image, $created]);

            $row_count = $query->rowCount();

            if($row_count == 1) {
                header('Location: blog.view.php');
            } else {
                header('Location: add.blog.view.php');
            }
        }
    }

    // Azuriraj blog post
    public function update() {
        $post_id = $_POST['post_id'];
        $title = $_POST['title'];
        $body = $_POST['body'];
        $created = $_POST['created'];

        $sql = "UPDATE blog SET title='$title', body='$body', created='$created' WHERE post_id=$post_id";
        $query = $this->conn->query($sql);

        if($query) {
            header('Location: blog.php');
        } else {
            header('Location: single-post.php?post_id=' . $post_id);
        }
    }

    // Ukloni blog post
    public function remove($id) {
        $sql = "DELETE FROM blog WHERE post_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);

        if($query) {
            header('Location: blog.php');
        } else {
            header('Location: 404.php');
        }
    }
}
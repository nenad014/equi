<?php

class Comment {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Dodaj komentar
    public function add() {
        $name = $email = $comment = '';
        $errors = array('name'=>'', 'email'=>'', 'comment'=>'');

        $post_id = $_POST['post_id'];
        $name = $_POST['name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            $errors['name'] = 'Dozvoljeno je samo unositi slova';
        }
        $email = $_POST['email'];
        $comment = htmlspecialchars($_POST['comment']);
        $created = date("Y-m-d h:i:sa");
        $type = 'comment';

        $sql = "INSERT INTO comment VALUES (NULL, ?, ?, ?, ?, ?, ?)";
        $query = $this->conn->prepare($sql);
        $query->execute([$post_id, $name, $email, $comment, $created, $type]);

        if($query) {
            header('Location: single.post.view.php?post_id='.$post_id);
        } else {
            header('404.php');
        }
    }

    public function addReply() {
        $name = $email = $comment = '';
        $errors = array('name'=>'', 'email'=>'', 'comment'=>'');

        $post_id = $_POST['post_id'];
        $name = $_POST['name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            $errors['name'] = 'Dozvoljeno je samo unositi slova';
        }
        $email = $_POST['email'];
        $comment = htmlspecialchars($_POST['comment']);
        $created = date("Y-m-d h:i:sa");
        $type = 'reply';

        $sql = "INSERT INTO comment VALUES (NULL, ?, ?, ?, ?, ?, ?)";
        $query = $this->conn->prepare($sql);
        $query->execute([$post_id, $name, $email, $comment, $created, $type]);

        if($query) {
            header('Location: comments.php');
        } else {
            header('404.php');
        }
    }

    // Svi komentari blog posta
    public function commentByPost($id) {
        $sql = "SELECT * FROM comment WHERE post_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    // Komentar
    public function show($id) {
        $sql = "SELECT * FROM comment WHERE comment_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $results = $query->fetch(PDO::FETCH_OBJ);

        return $results;
    }

    // Svi komentari
    public function read() {
        $sql = "SELECT *, blog.title FROM comment INNER JOIN blog ON comment.post_id = blog.post_id ORDER BY comment.created DESC";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    // Ukloni komentar
    public function remove($id) {
        $sql = "DELETE FROM comment WHERE comment_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);

        if($query) {
            header('Location: comments.view.php');
        } else {
            header('Location: 404.php');
        }
    }

    public function latest() {
        $sql = "SELECT * FROM comment ORDER BY created DESC LIMIT 5";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }
}
<?php

class Admin {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Login Admin
    public function logAdmin() {
        $name = $_POST['name'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM admin WHERE name = ? AND password = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$name, $password]);

        $admin = $query->fetch(PDO::FETCH_OBJ);

        if($admin != NULL) {
            $_SESSION['admin'] = $admin;
            header('Location: dash.php');
        } else {
            header('Location: index.php');
        }
    }
}
<?php

class User {

    private $conn;
    public $register_result = NULL;
    public $loggedUser = NULL;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function read() {
        $sql = "SELECT * FROM user";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function register() {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = hash("sha256", $_POST['password']);

        $sql = "INSERT INTO user (name, email, password, created) VALUES (:name, :email, :password, NOW())";
        $query = $this->conn->prepare($sql);
        $query->execute(['name'=>$name, 'email'=>$email, 'password'=>$password]);

        if($query) {
            $this->register_result = true;
            // header('Location: login.register.view.php');
        } else {
            header('Location: 404.php');
        }
    }

    public function login() {
        $email = htmlspecialchars($_POST['email']);
        $password = hash("sha256", $_POST['password']);

        $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$email, $password]);

        $loggedUser = $query->fetch(PDO::FETCH_OBJ);

        if($loggedUser != NULL) {
            $_SESSION['loggedUser'] = $loggedUser;
            $this->loggedUser = $loggedUser;
            // header('Location: user.view.php');
        } else {
            // header('Location: login.register.view.php');
        }
    }

    public function loginToProceed() {
        $email = htmlspecialchars($_POST['email']);
        $password = hash("sha256", $_POST['password']);

        $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$email, $password]);

        $loggedUser = $query->fetch(PDO::FETCH_OBJ);

        if($loggedUser != NULL) {
            $_SESSION['loggedUser'] = $loggedUser;
            header('Location: checkout.view.php');
        } else {
            header('Location: login.view.php');
        }
    }

    public function show($id) {
        $sql = "SELECT * FROM user WHERE user_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $result = $query->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function update() {
        $name = htmlspecialchars($_POST['name']);
        $password = htmlspecialchars($_POST['password']);
        $fname = htmlspecialchars($_POST['fname']);
        $lname = htmlspecialchars($_POST['lname']);
        $phone = htmlspecialchars($_POST['phone']);
        $address = htmlspecialchars($_POST['address']);
        $delivery_address = htmlspecialchars($_POST['delivery_address']);
        $user_id = $_POST['user_id'];

        $sql = "UPDATE user SET name='$name', password='$password', fname='$fname', lname='$lname', phone='$phone', 
                address='$address', delivery_address='$delivery_address' WHERE user_id = $user_id";
        $query = $this->conn->query($sql);

        if($query) {
            header('Location: user.view.php');
        } else {
            header('Location: edit.user.view.php');
        }
    }

    public function remove($id) {
        $sql = "DELETE FROM user WHERE user_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);

        if($query) {
            header('Location: users.php');
        } else {
            header('Location: 404.php');
        }
    }
}
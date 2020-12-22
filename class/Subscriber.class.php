<?php

class Subscriber {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function add() {
        $email = $_POST['email'];

        $sql = "INSERT INTO subscribers VALUES (NULL, ?, NOW())";
        $query = $this->conn->prepare($sql);
        $query->execute([$email]);
        $rowCount = $query->rowCount();

        if($rowCount == 1) {
            header('Location: index.php?subscribed');

            $to = $email;
            $subject = "Hvala";
            $message = 'Hvala Vam što ste se prijavili na naš sajt. Pratite Vaš mail i očekujte puno iznenađenja.';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: equi.studio@gmail.com';

            mail($to, $subject, $message, $headers);
        } else {
            header('Location: 404.php');
        }
    }

    public function read() {
        $sql = "SELECT * FROM subscribers ORDER BY sub_created DESC";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $results;
    }
}
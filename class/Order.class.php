<?php

class Order {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function read() {
        $sql = "SELECT * FROM orders ORDER BY order_id DESC";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function show($id) {
        $sql = "SELECT * FROM orders WHERE order_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $result = $query->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function getByUser($id) {
        $sql = "SELECT * FROM orders WHERE user_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function latest() {
        $sql = "SELECT * FROM orders ORDER BY created DESC LIMIT 5";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function add() {
        $user_id = $_POST['user_id'];
        $invoince_no = 'equi_'.mt_rand();
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $delivery_address = $_POST['delivery_address'];
        $payment = $_POST['payment'];
        $item_id = $_POST['item_id'];
        $products = $_POST['products'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $quantity = $_POST['quantity'];
        $grand_total = $_POST['grand_total'];
        $created = date('Y-m-d');

        $sql = "INSERT INTO orders VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $query = $this->conn->prepare($sql);
        $query->execute([$user_id, $invoince_no, $fname, $lname, $email, $phone, $address, $delivery_address, $payment, $item_id, $products, $size, $color, $quantity, $grand_total, $created]);
        $row_count = $query->rowCount();

        if($row_count == 1) {
            header("Location: user.view.php?uspesna-porudzbina");

            $to = $email;
            $subject = "Porudžbina $invoince_no";
            $message = "Hvala Vam na izvršenoj kupovini preko našeg sajta. 
            Ukoliko ste se odlučili da porudžbinu izvršite pouzećem, bićete obavešteni od strane kurirske službe o trenutku preuzimanja porudžbine.
            Ako ste se ipak odlučili da porudžbinu izvršite uplatnicom, molimo Vas da na njoj unesete sledeće: 
            Uplatilac: $fname $lname i $address,
            Svha uplate: EQUI porudžbina,
            Primalac: Equi studio Paunova 18, Beograd 11000,
            Iznos: $grand_total,
            Račun primaoca: 250-1530000555770-39.
            Porudžbina će biti poslata onog trenutka kada se uplata proknjiži.";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: equi.studio@gmail.com';

            mail($to, $subject, $message, $headers);

        } else {
            header('Location: checkout.view.php');
        }
    }
}
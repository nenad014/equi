<?php

class Message {
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function inbox() {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                echo 'Unesite ispravnu mail adresu.';
            } else {
                $toEmail = 'equi.studio@gmail.com';
                $emailSubject = 'Contact Request Submitted by ' . $name;
                $htmlContent = "<h2>Contact Request Submitted</h2>
                                <h4>Name</h4><p>".$name."</p>
                                <h4>Email</h4><p>".$email."</p>
                                <h4>Subject</h4><p>".$subject."</p>
                                <h4>Message</h4></p>".$message."</p>";
                
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

                if(mail($toEmail, $emailSubject, $htmlContent, $headers)) {
                    echo 'Vasa poruka je uspesno poslata!';
                } else {
                    echo 'Molimo Vas pokusajte ponovo';
                }
            }
        } else {
            echo 'Molimo Vas popunite sva polja.';
        }
    }
}
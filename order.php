<?php

require_once 'bootstrap.php';

if(isset($_POST['orderBtn'])) {
    $order->add();
    setcookie("shopping_cart", "", time() - 3600);
} 
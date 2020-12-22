<?php

require_once 'bootstrap.php';

if(isset($_POST['addToCartBtn'])) {
    if(isset($_COOKIE['shopping_cart'])) {
        $cookie_data = stripslashes($_COOKIE['shopping_cart']);
        $cart_data = json_decode($cookie_data, true);
    } else {
        $cart_data = array();
    }
    $item_id_list = array_column($cart_data, 'item_id');
    if(in_array($_POST['id'], $item_id_list)) {
        foreach($cart_data as $key=>$values) {
            if($cart_data[$keys]['item_id'] == $_POST['id']) {
                $cart_data[$keys]['item_quantity'] = $cart_data[$keys]['item_quantity']+$_POST['quantity'];
            }
        }
    } else {
        $item_array = array(
            'item_id' => $_POST["id"],
            'item_name' => $_POST["name"],
            'item_price' => $_POST["price"],
            'item_img' => $_POST["img"],
            'item_quantity' => $_POST["quantity"],
            'item_size'=>$_POST['size'],
            'item_color'=>$_POST['color']
        );
        $cart_data[] = $item_array;
    }

    $item_data = json_encode($cart_data, JSON_UNESCAPED_UNICODE);
    setcookie('shopping_cart', $item_data, time() + (86400*30));
    header('location:index.php?success=1');
}

if(isset($_GET["action"])) {
    if($_GET["action"] == "delete") {
        $cookie_data = stripslashes($_COOKIE['shopping_cart']);
        $cart_data = json_decode($cookie_data, true);
        foreach($cart_data as $keys => $values) {
            if($cart_data[$keys]['item_id'] == $_GET["id"]) {
                unset($cart_data[$keys]);
                $item_data = json_encode($cart_data);
                setcookie("shopping_cart", $item_data, time() + (86400 * 30));
                header("location:cart.view.php?remove=1");
            }
        }
    }
    if($_GET["action"] == "clear") {
        setcookie("shopping_cart", "", time() - 3600);
        header("location:cart.view.php?clearall=1");
    }
}

if(isset($_GET['success'])) {
    $message = '
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        Item Added into Cart
    </div>
    ';
}
if(isset($_GET["remove"])) {
    $message = '
    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Item removed from Cart
    </div>
    ';
}
if(isset($_GET["clearall"])) {
    $message = '
    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Your Shopping Cart has been clear...
    </div>
    ';
}
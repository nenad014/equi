<?php

require_once '../bootstrap.php';

if(isset($_POST['addItemBtn'])) {
    $product->add();
}

if(isset($_POST['addPostBtn'])) {
    $blog->add();
}

if(isset($_POST['addCatBtn'])) {
    $category->add();
}

if(isset($_POST['addComentBtn'])) {
    $comment->addReply();
}
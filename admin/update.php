<?php

require_once '../bootstrap.php';

if(isset($_POST['updatePostBtn'])) {
    $blog->update();
}

if(isset($_POST['updateItemBtn'])) {
    $product->update();
}

if(isset($_POST['updateCatBtn'])) {
    $category->update();
}
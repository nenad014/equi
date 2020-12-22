<?php

require_once '../bootstrap.php';

if(isset($_GET['post_id'])) {
    $blog->remove($_GET['post_id']);
}

if(isset($_GET['comment_id'])) {
    $comment->remove($_GET['comment_id']);
}

if(isset($_GET['id'])) {
    $product->remove($_GET['id']);
}

if(isset($_GET['user_id'])) {
    $user->remove($_GET['user_id']);
}

if(isset($_GET['cat_id'])) {
    $category->remove($_GET['cat_id']);
}
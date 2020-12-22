<?php

require_once 'bootstrap.php';

if(isset($_POST['addComentBtn'])) {
    $comment->add();
}

if(isset($_POST['addReviewBtn'])) {
    $review->insert();
}
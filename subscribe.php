<?php

require_once 'bootstrap.php';

if(isset($_POST['subscribeBtn'])) {
    $subscriber->add();
}
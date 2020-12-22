<?php

require_once 'bootstrap';

if(isset($_POST['sendMsgBtn'])) {
    $msg = $message->inbox();
}
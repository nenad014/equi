<?php

session_start();

require_once 'class/Connection.class.php';
require_once 'class/Blog.class.php';
require_once 'class/Admin.class.php';
require_once 'class/Product.class.php';
require_once 'class/Category.class.php';
require_once 'class/User.class.php';
require_once 'class/Order.class.php';
require_once 'class/Comment.class.php';
require_once 'class/Message.class.php';
require_once 'class/Subscriber.class.php';
require_once 'class/Search.class.php';
require_once 'class/Review.class.php';
require_once 'class/Color.class.php';
require_once 'class/Size.class.php';

$db = new Connection();
$conn = $db->connection();

$blog = new Blog($conn);
$admin = new Admin($conn);
$product = new Product($conn);
$category = new Category($conn);
$user = new User($conn);
$order = new Order($conn);
$comment = new Comment($conn);
$message = new Message($conn);
$sub = new Subscriber($conn);
$search = new Search($conn);
$review = new Review($conn);
$color = new Color($conn);
$size = new Size($conn);

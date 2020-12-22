<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/sidebar.inc.php'; ?>

<!-- Page Content  -->
<div id="content">

<?php require_once 'inc/navbar.inc.php'; ?>
            
<?php
    if(isset($_SESSION['admin'])) {
        $subs = $subscriber->read();
        $porudzbine = $order->read();
        $ordersLatest = $order->latest();
        $users = $user->read();
        $items = $product->read();
        $komentari = $comment->read();
        $kmntr = $comment->latest();
        $rvws = $review->read();
    } else {
        header('Location: index.php');
    }
?>

    </div>

<?php require_once 'inc/bottom.inc.php'; ?>
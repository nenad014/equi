<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        if(isset($_GET['user_id'])) {
            $korisnik = $user->show($_GET['user_id']);
            $orders = $order->getByUser($_GET['user_id']);
        }
    } else {
        header('Location: index.php');
    }
?>
<?php require_once 'inc/sidebar.inc.php'; ?>

<!-- Page Content  -->
<div id="content">

<?php require_once 'inc/navbar.inc.php'; ?>
        <div class="container-fluid">
            <div class="row">
                        <div class="col-lg-12 col-md-12 py-2">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="orders.php">Porudžbine</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Porudžbine korisnika <?php echo $korisnik->name; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top px-3">
                                    <h3>
                                        <i class="fa fa-user"></i> Porudžbine korisnika <?php echo $korisnik->name; ?>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Broj porudžbine</th>
                                                <th>Artikli</th>
                                                <th>Iznos</th>
                                                <th>Datum</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($orders as $single) : ?>
                                                <tr>
                                                    <td><?php echo $single->order_id; ?></td>
                                                    <?php
                                                    $porudzbina = $single->products;
                                                    $values = explode(",", $porudzbina, -1);
                                                    ?>
                                                    <td>
                                                    <?php
                                                    foreach($values as $val) :
                                                    ?>
                                                    <?php echo $val . "<br>"; ?>
                                                    <?php endforeach; ?>
                                                    </td>
                                                    <td><?php echo $single->grand_total; ?></td>
                                                    <td><?php echo $single->created; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table> 
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>
<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        if(isset($_GET['user_id'])) {
            $single = $user->show($_GET['user_id']);
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
                                    <li class="breadcrumb-item"><a href="users.php">Korisnici</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Korisnik <?php echo $single->name; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top px-3">
                                    <h3>
                                        <i class="fa fa-user"></i> Korisnik <?php echo $single->name; ?>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-borderless">
                                        <tr>
                                            <td><strong>Korisničko ime: </strong></td>
                                            <td><?php echo $single->name; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>email: </strong></td>
                                            <td><?php echo $single->email; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Registrovan: </strong></td>
                                            <td><?php echo $single->created; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Ime: </strong></td>
                                            <td><?php echo $single->fname; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Prezime: </strong></td>
                                            <td><?php echo $single->lname; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Telefon: </strong></td>
                                            <td><?php echo $single->phone; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Adresa: </strong></td>
                                            <td><?php echo $single->address; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Adresa isporuke: </strong></td>
                                            <td><?php echo $single->delivery_address; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Porudžbine</strong></td>
                                            <td><?php echo count($orders); ?>  <a href="user-orders.php?user_id=<?php echo $single->user_id; ?>" class="btn btn-info">Vidi sve</a></td>
                                        </tr>
                                    </table> 
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>
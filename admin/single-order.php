<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        if(isset($_GET['order_id'])) {
            $single = $order->show($_GET['order_id']);
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
                                    <li class="breadcrumb-item active" aria-current="page">Porudžbina <?php echo $single->order_id; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top px-3">
                                    <h3>
                                        <i class="fa fa-users"></i> Porudžbina <?php echo $single->order_id; ?>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <div class="form-group">
                                <label class="form-control-label">Poručilac</label>
                                <input type="text" id="company" class="form-control" value="<?php echo $single->fname . " " . $single->lname; ?>">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Email</label>
                                        <input type="email" id="company" class="form-control" value="<?php echo $single->email; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Telefon</label>
                                        <input type="text" id="company" class="form-control" value="<?php echo $single->phone; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Adresa</label>
                                        <input type="text" id="company" class="form-control" value="<?php echo $single->address; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Adresa isporuke</label>
                                        <input type="text" id="company" class="form-control" value="<?php echo $single->delivery_address; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Artikli</label><br>
                                        <?php
                                            $string = $single->products;
                                            $values = explode(",", $string, -1);
                                            foreach($values as $val) : ?>                                          
                                            <input type="text" id="company" class="form-control" value="<?php echo $val; ?>">
                                            <?php endforeach; ?>
                                    </div>
                                </div>
                                            <div class="col-lg-2">
                                                <div class="form-group"> 
                                                    <label class="form-control-label">Veličina</label>
                                                    <?php
                                                    $velicina = $single->size;
                                                    $values = explode(",", $velicina, -1);
                                                    foreach($values as $size) : ?>
                                                    <input type="text" id="company" class="form-control" value="<?php echo $size; ?>">
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Boja</label>
                                                    <?php
                                                    $boja = $single->color;
                                                    $values = explode(",", $boja, -1);
                                                    foreach($values as $color) : ?>
                                                    <input type="text" id="company" class="form-control" value="<?php echo $color; ?>">
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Količina</label>
                                                    <?php
                                                    $kolicina = $single->quantity;
                                                    $values = explode(",", $kolicina, -1);
                                                    foreach($values as $quantity) : ?>
                                                    <input type="text" id="company" class="form-control" value="<?php echo $quantity; ?>">
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Način plaćanja</label>
                                        <input type="text" id="company" class="form-control" value="<?php echo $single->payment; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Iznos porudžbine</label>
                                        <input type="text" id="company" class="form-control" value="<?php echo $single->grand_total; ?> RSD">
                                    </div>
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>
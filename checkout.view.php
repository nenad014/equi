<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
    if(!isset($_SESSION['loggedUser'])) {
        header('Location: login.view.php');
    }
    $single = $user->show($_SESSION['loggedUser']->user_id);
?>

<div class="container py-5">
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                            Početna</a>
                        <span>Porudžbina</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <form action="order.php" method="POST">
        <div class="row">
            <div class="col-md-6">
                <h3>DETALJI PORUDŽBINE</h3>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label>Ime *</label>
                        <input type="text" class="form-control" name="fname" value="<?php echo $single->fname; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label>Prezime *</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $single->lname; ?>" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['loggedUser']->email; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label>Broj telefona *</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $single->phone; ?>" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="address">Adresa *</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $single->address; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="delivery_address">Adresa isporuke *</label>
                        <input type="text" class="form-control" name="delivery_address" value="<?php echo $single->delivery_address; ?>" required>
                    </div>
                </div>
                <br>
                <h3>NAČIN PLAĆANJA</h3>
                <br>
                <p><strong>* Izaberete opciju plaćanja</strong></p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="payment" value="Uplatnica" required>Uplatnicom <br>
                    <input type="radio" class="form-check-input" name="payment" value="Pouzeće">Pouzećem                      
                </div>
                <div class="form-check">
                    
                </div>
            </div>
            <div class="col-md-6">
                <h3>REZIME KORPE</h3>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Slika</th>
                            <th>Artikl</th>
                            <th>Veličina</th>
                            <th>Boja</th>
                            <th>Količina</th>
                            <th>Cena</th>
                            <th>Ukupno</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php if(isset($_COOKIE['shopping_cart'])) {
                    $total = 0;
                    $cookie_data = stripslashes($_COOKIE['shopping_cart']);
                    $cart_data = json_decode($cookie_data, true);
                    foreach($cart_data as $keys => $values) : ?>
                    <tr>
                        <td><img src="<?php echo $values['item_img']; ?>" style="width:75px"></td>
                        <td><?php echo $values["item_name"]; ?></td>
                        <td><?php echo $values['item_size']; ?></td>
                        <td><?php echo $values['item_color']; ?></td>
                        <td><?php echo $values["item_quantity"]; ?></td>
                        <td><?php echo $values["item_price"]; ?> RSD</td>
                        <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?> RSD</td><br>
                    </tr>
                    <?php
                    $total = $total + ($values['item_quantity'] * $values['item_price']);
                    endforeach;
                    ?>
                    </tbody>
                    </table>
                <br>
                <div class="card text-center">
                <h3>UKUPNO</h3>
                <hr>
                <p><strong><?php echo number_format($total, 2); ?> RSD</strong></p>
                <input type="hidden" name="item_id" value="<?php foreach($cart_data as $k=>$v) {
                        echo $v['item_id'] . ','; } ?>">
                <input type="hidden" name="products" value="<?php foreach($cart_data as $k=>$v) {
                        echo $v['item_name'] . ','; } ?>">
                <input type="hidden" name="size" value="<?php foreach($cart_data as $k=>$v) { echo $v['item_size'] . ','; } ?>">
                <input type="hidden" name="color" value="<?php foreach($cart_data as $k=>$v) { echo $v['item_color'] . ','; } ?>">
                <input type="hidden" name="quantity" value="<?php foreach($cart_data as $k=>$v) {
                        echo $v['item_quantity'] . ','; } ?>"> 
                <input type="hidden" name="grand_total" value="<?php echo number_format($total, 2); ?>">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['loggedUser']->user_id; ?>">
                <button type="submit" class="btn btn-success" name="orderBtn">NARUČI</button>
                </div>
                <br>
                <?php
                } ?>
            </div>
        </div>
    </form>
    <br>
    <h5 class="text-danger">Molimo Vas proverite Vaš e-mail nakon izvršene porudžbine.</h5>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
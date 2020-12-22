<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<div class="container pt-5 pb-5">

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                            Početna</a>
                            <span>Moja korpa</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <table class="table table-hover">
        <thead>
            <tr>
                <th></th>
                <th>Artikal</th>
                <th>Velicina</th>
                <th>Boja</th>
                <th>Cena</th>
                <th>Količina</th>
                <th>Ukupno</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($_COOKIE['shopping_cart'])) {
                $total = 0;
                $cookie_data = stripslashes($_COOKIE['shopping_cart']);
                $cart_data = json_decode($cookie_data, true);
                foreach($cart_data as $keys => $values) { ?>
                    <tr>
                        <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>" class="btn btn-outline-danger"> <i class="fa fa-times" aria-hidden="true"></i></a> <img class="img-fluid" src="<?php echo $values['item_img']; ?>" alt="" width="150px"></td>
                        <td><?php echo $values['item_name']; ?></td>
                        <td><?php echo $values['item_size']; ?></td>
                        <td><?php echo $values['item_color']; ?></td>
                        <td><?php echo $values['item_price']; ?></td>
                        <td><?php echo $values['item_quantity']; ?></td>
                        <td><?php echo number_format($values['item_quantity'] * $values['item_price']); ?> RSD</td>
                    </tr>
                    <?php
                            $total = $total + ($values['item_quantity'] * $values['item_price']);
                        } ?>
                    <tr>
                        <td colspan="3" align="right"><b>UKUPNO: </b></td>
                        <td align="right"><?php echo number_format($total, 2); ?> RSD</td>
                        <td><a href="checkout.view.php" class="btn btn-success">NARUČI</a></td>  
                    </tr>
                    <?php
                    }  ?> 
        </tbody>
    </table>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
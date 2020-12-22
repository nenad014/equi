<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
    if(!isset($_SESSION['loggedUser'])) {
        header('Location: index.php');
    } else {
        $single = $user->show($_SESSION['loggedUser']->user_id);
        $orders = $order->getByUser($_SESSION['loggedUser']->user_id);
    }
    
?>

<div class="container pt-5 pb-5">
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                            Početna</a>
                            <span>Moj nalog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">MOJE PORUDŽBINE</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content pt-3 pb-3">
    <div class="tab-pane container active" id="home">
        <h3>INFORMACIJE: </h3>
        <hr>
        <br>
        <table>
            <tr>
                <td><strong>Korisničko ime: </strong></td>
                <td><?php echo $single->name; ?></td>
            </tr>
            <tr>
                <td><strong>email: </strong></td>
                <td><?php echo $single->email; ?></td>
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
        </table>
        <a href="edit.user.view.php" class="btn btn-warning">Uredi nalog</a>
    </div>
    <div class="tab-pane container fade" id="menu1">
        <h3>MOJE PORUDŽBINE</h3>
        <hr>
        <table class="table">
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
                        <td><?php echo $single->invoice_no; ?></td>
                        <td>
                            <?php
                            $porudzbina = $single->products;
                            $values = explode(",", $porudzbina, -1);
                            foreach($values as $item) {
                                echo $item . "<br>";
                            }
                            ?>
                        </td>
                        <td><?php echo $single->grand_total; ?></td>
                        <td><?php echo $single->created; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="tab-pane container fade" id="menu2">...</div>
    </div>
</div>


<?php require_once 'inc/bottom.inc.php'; ?>
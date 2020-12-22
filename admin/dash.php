<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(!isset($_SESSION['admin'])) {
        header('Location: index.php');
        exit;
    } else {
        $subs = $sub->read();
        $porudzbine = $order->read();
        $ordersLatest = $order->latest();
        $users = $user->read();
        $items = $product->read();
        $komentari = $comment->read();
        $kmntr = $comment->latest();
        $rvws = $review->read();
        $categories = $category->read();
    }
?>
<?php require_once 'inc/sidebar.inc.php'; ?>

        <!-- Page Content  -->
        <div id="content">

<?php require_once 'inc/navbar.inc.php'; ?>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="card bg-success text-white">
                                    <div class="card-body">
                                        <h2 class="card-title text-center"><i class="fa fa-users" aria-hidden="true"></i></h2>
                                        <p class="card-text text-center">Registrovanih korisnika: <?php echo count($users); ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="users.php" class="btn btn-outline-light text-dark stretched-link">Vidi</a>
                                    </div>
                                </div><br>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <h2 class="card-title text-center"><i class="fa fa-shopping-cart" aria-hidden="true"></i></h2>
                                        <p class="card-text text-center">Ukupno porudžbina: <?php echo count($porudzbine); ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="orders.php" class="btn btn-outline-light text-dark stretched-link">Vidi</a>
                                    </div> 
                                </div><br>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <h2 class="card-title text-center"><i class="fa fa-tasks" aria-hidden="true"></i></h2>
                                        <p class="card-text text-center">Ukupno proizvoda: <?php echo count($items); ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="items.php" class="btn btn-outline-light text-dark stretched-link">Vidi</a>
                                    </div>    
                                </div><br>   
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="card bg-light text-dark">
                                    <div class="card-body">
                                        <h2 class="card-title text-center"><i class="fa fa-rss-square" aria-hidden="true"></i></h2>
                                        <p class="card-text text-center">Pratilaca: <?php echo count($subs); ?><?php ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="subscribers.php" class="btn btn-outline-light text-dark stretched-link">Vidi</a>
                                    </div>        
                                </div> <br>                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="card bg-warning text-white">
                                    <div class="card-body">
                                        <h2 class="card-title text-center"><i class="fa fa-comments" aria-hidden="true"></i></h2>
                                        <p class="card-text text-center">Ukupno komentara: <?php echo count($komentari); ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="comments.php" class="btn btn-outline-light text-dark stretched-link">Vidi</a>
                                    </div>    
                                </div><br>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="card bg-danger text-white py-3">
                                    <h2 class="card-title text-center"><i class="fa fa-star-o" aria-hidden="true"></i></h2>
                                    <p class="card-text text-center">Ukupno ocena: <?php echo count($rvws); ?><?php ?></p>
                                    <a href="#" class="btn btn-outline-light text-dark stretched-link">Vidi</a>
                                </div><br>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="card bg-yellow">
                                    <div class="card-body">
                                        <h2 class="card-title text-center"><i class="fa fa-tags" aria-hidden="true"></i></h2>
                                        <p class="card-text text-center">Kategorije proizvoda: <?php echo count($categories); ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="category.php" class="btn btn-outline-light text-dark stretched-link">Vidi</a>
                                    </div>
                                </div><br>
                            </div>
                        </div>

            <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <i class="fa fa-money"></i> Najnovije porudžbine
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Datum</th>
                                                    <th>Broj porudžbine</th>
                                                    <th>Poručilac</th>
                                                    <th>Adresa isporuke</th>
                                                    <th>Način plaćanja</th>
                                                    <th>Iznos</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($ordersLatest as $latest) : ?>
                                                <tr>
                                                    <td><?php echo $latest->created; ?></td>
                                                    <td><?php echo $latest->order_id; ?></td>
                                                    <td><?php echo $latest->fname; ?> <?php echo $latest->lname; ?></td>
                                                    <td><?php echo $latest->delivery_address; ?></td>
                                                    <td><?php echo $latest->payment; ?></td>
                                                    <td class="text-right"><?php echo $latest->grand_total; ?> RSD</td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="orders.php">Vidi sve <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header bg-dark text-white">
                                    <i class="fa fa-comments" aria-hidden="true"></i> Komentari
                                </div>
                                <div class="card-body">
                                                <?php foreach($kmntr as $single) : ?>
                                                    <div class="row">
                                                        <div class="col-lg-2"><i class="fa fa-user-circle-o text-center"></i></div>
                                                        <div class="col-lg-10">
                                                            <strong><?php echo $single->name; ?></strong>
                                                            <p class="text-muted"><?php echo $single->email; ?></p>
                                                            <blockquote><?php echo $single->comment; ?></blockquote>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                <?php endforeach; ?>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#">Vidi sve <i class="fa fa-arrow-circle-right"></i></a></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>
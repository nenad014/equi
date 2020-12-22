<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        if(isset($_GET['id'])) {
            $single = $product->show($_GET['id']);
        }
    } else {
        header('Location: index.php');
    }
    
?>
<?php require_once 'inc/navbar.inc.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <?php require_once 'inc/sidebar.inc.php'; ?>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <h1><?php echo $single->name; ?></h1>
                            <div class="row py-3">
                                <div class="col-lg-6">
                                    <img src="../<?php echo $single->cover_img; ?>" alt="" class="img-thumbnail">
                                </div>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $single->img_2; ?>" alt="" class="img-thumbnail">
                                </div>
                            </div>
                            <p class="text-justify"><?php echo $single->details; ?></p>
                            <p><strong>Cena: </strong> <?php echo $single->price; ?> RSD</p>
                            <P><strong>Outlet: </strong>
                            <?php $outlet = $single->outlet;
                                switch($outlet) {
                                    case "0":
                                        echo "Ne";
                                    break;
                                    case "1":
                                        echo "Da";
                                    break;
                                }
                            ?>
                            </P>
                            <p><strong>Snizena cena: </strong><?php echo $single->lower_price; ?></p>
                            <p><strong>Velicina: </strong><?php echo $single->size; ?></p>
                            <p><strong>Boja: </strong><?php echo $single->color; ?></p>
                            <p><strong>Kategorija: </strong><?php echo $single->cat_name; ?></p>
                            <p><strong>Stanje: </strong><?php echo $single->status; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once 'inc/bottom.inc.php'; ?>
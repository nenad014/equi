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
                            <span>Rezultati pretrage</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
    <?php
    if(isset($_POST['searchBtn'])) {
        $search = $_POST['search'];
        $sql = "SELECT *, category.cat_name FROM products INNER JOIN category ON products.cat_id = category.cat_id WHERE name LIKE '%$search%' OR details LIKE '%$search%' OR cat_name LIKE '%search'";
        $query = $conn->query($sql);
        $queryResults = $query->rowCount();

        if($queryResults > 0) {
            while($results = $query->fetch(PDO::FETCH_ASSOC)) : ?>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="single.item.view.php?id=<?php echo $results['id']; ?>">
                            <img class="pic-1" src="<?php echo $results['cover_img']; ?>">
                            <img class="pic-2" src="<?php echo $results['img_2']; ?>">
                            <?php if($results['status'] == 'Prodato') : ?>
                            <span class="product-new-label"><?php echo $results['status']; ?></span>
                            <?php endif; ?>
                        </a>
                        <ul class="social">
                            <li><a href="single.item.view.php?id=<?php echo $results['id']; ?>" data-tip="Pogledaj proizvod"><i class="fa fa-eye"></i></a></li>
                        </ul>
                        <a class="add-to-cart" href="single.item.view.php?id=<?php echo $results['id']; ?>">Pogledaj proizvod</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="single.item.view.php?id=<?php echo $results['id']; ?>"><?php echo $results['name']; ?></a></h3>
                        <?php if($results['lower_price'] != 1) : ?>
                        <span class="price"><?php echo $results['price']; ?> RSD</span>
                        <?php else : ?>
                        <del><span class="text-muted"><?php echo $results['price']; ?> RSD</span></del> <span class="price"><?php echo $results['lower_price']; ?> RSD</span>
                        <?php endif; ?>
                    </div>
                </div><br>
            </div>
            <?php endwhile;
        } else {
            echo "Nema rezultata";
        }
    } ?>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
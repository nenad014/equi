<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
if(isset($_GET['cat_id'])) {
    $products = $product->getByCat($_GET['cat_id']);
    $kategorija = $category->show($_GET['cat_id']);
}

$items = $product->latest();
$kategorije = $category->read();

$colors = $color->read();
$sizes = $size->read();

?>

<div class="container-fluid pt-5 pb-5">
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                            Početna</a>
                        <a href="shop.view.php">Prodavnica</a>
                        <span><?php echo $kategorija->cat_name; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-9 col-md-9">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                        <?php foreach($products as $item) : ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product-grid2" data-price="<?php echo $item->price; ?>">
                                        <div class="product-image2">
                                            <a href="single.item.view.php?id=<?php echo $item->id; ?>">
                                                <img class="pic-1" src="<?php echo $item->cover_img; ?>">
                                                <img class="pic-2" src="<?php echo $item->img_2; ?>">
                                            </a>
                                            <?php if($item->status == 'Prodato') : ?>
                                            <span class="product-new-label"><?php echo $item->status; ?></span>
                                            <?php endif; ?>
                                            <ul class="social">
                                                <li><a href="single.item.view.php?id=<?php echo $item->id; ?>" data-tip="Pogledaj proizvod"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                            <a class="add-to-cart" href="single.item.view.php?id=<?php echo $item->id; ?>">Pogledaj proizvod</a>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="title"><a href="single.item.view.php?id=<?php echo $item->id; ?>"><?php echo $item->name; ?></a></h3>
                                            <?php if($item->lower_price == NULL) : ?>
                                            <span class="price"><?php echo $item->price; ?> RSD</span>
                                            <?php else : ?>
                                            <del><span class="text-muted"><?php echo $item->price; ?> RSD</span></del> <span class="price"><?php echo $item->lower_price; ?> RSD</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <br>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>        
                
            </div>
        </div>
        <div class="col-lg-3 col-md-3">
            <?php require_once 'inc/products.inc.php'; ?>
        </div>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
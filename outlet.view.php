<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
$url = 1;
$items = $product->readOutlet($url);
$kategorije = $category->read();
$all = $product->latest();

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
                            <span>Outlet</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="text-center">
        <img src="https://media0.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" id="loader" style="display: none;">
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-9">
            <div class="container">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row" id="result">
                        <?php foreach($items as $single) : ?>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="product-grid2" data-price="<?php echo $single->price; ?>">
                                    <div class="product-image2">
                                        <a href="single.item.view.php?id=<?php echo $single->id; ?>">
                                            <img class="pic-1" src="<?php echo $single->cover_img; ?>">
                                            <img class="pic-2" src="<?php echo $single->img_2; ?>">
                                        </a>
                                        <?php if($single->status == 'Prodato') : ?>
                                        <span class="product-new-label"><?php echo $single->status; ?></span>
                                        <?php endif; ?>
                                        <ul class="social">
                                            <li><a href="single.item.view.php?id=<?php echo $single->id; ?>" data-tip="Pogledaj proizvod"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                        <a class="add-to-cart" href="single.item.view.php?id=<?php echo $single->id; ?>">Pogledaj proizvod</a>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="single.item.view.php?id=<?php echo $single->id; ?>"><?php echo $single->name; ?></a></h3>
                                        <span class="price"><?php echo $single->price; ?> RSD</span>
                                        <!-- <span class="text-muted"><del><?php // echo $single->price; ?> RSD</del></span> <span class="price"><?php// echo $single->outlet_price; ?> RSD</span> -->
                                    </div>
                                </div>
                                <br>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3">
            <div class="container">
                <div class="shop_sidebar">
                    <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
                        <input class="form-control mr-sm-2" type="text" placeholder="Pretraga proizvoda" name="search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="searchBtn">Pretraga</button>
                    </form>
                    <br>
                    <div class="sidebar_filter">
                        <div class="section-title">
                            <h4>Najnoviji proizvodi</h4>
                        </div>
                        <?php foreach($all as $item) : ?>
                        <div class="product_sidebar_item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-4">
                                    <img class="img-thumbnail" src="<?php echo $item->cover_img; ?>" alt="<?php echo $item->name; ?>">
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                        <span class="product-title"><a href="single.item.view.php?id=<?php echo $item->id; ?>"><?php echo $item->name; ?></a></span><br>
                                        <span class="text-muted"><?php echo $item->price; ?> RSD</span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <br>
                    </div>
                    <br>
                    <div class="sidebar_categories">
                        <div class="section-title">
                            <h4>Kategorije</h4>
                        </div>
                        <ul>
                        <?php foreach($kategorije as $kat) : ?>
                            <li><a href="category.view.php?cat_id=<?php echo $kat->cat_id; ?>"><?php echo $kat->cat_name; ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                    <br>
                    <div class="section-title">
                        <h4>Pratite nas</h4>
                    </div>
                    <ul class="socials-list">
                        <li>
                            <a href="https://www.facebook.com/equistudio.beograd/" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/equi_studio/" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UC4X-sx2VIyKAZGYou5e5DfA" target="_blank">
                                <i class="fa fa-youtube-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://rs.linkedin.com/in/equi-serbia-36708311a" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
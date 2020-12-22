<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
$items = $product->readStore();
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
                            <span>Prodavnica</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-9 col-md-9">
            <div class="container">
                <div class="container category">
                    <div class="row">
                        <?php foreach($kategorije as $cat) : ?>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <img src="<?php echo $cat->cat_img; ?>" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="category.view.php?cat_id=<?php echo $cat->cat_id; ?>" class="stretched-link"><?php echo $cat->cat_name; ?></a></h4>
                                    </div>
                                </div><br>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <br>
            <div class="text-center">
                <img src="https://media0.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" id="loader" style="display: none;">
            </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                    <div class="row" id="result">
                    <?php foreach($items as $item) : ?>
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
            <div class="container">
                <div class="shop_sidebar">
                    <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
                        <input class="form-control mr-sm-2" type="text" placeholder="Pretraga proizvoda" name="search">
                        <button class="btn btn-dark my-2 my-sm-0" type="submit" name="searchBtn">Pretraga</button>
                    </form>
                    <br>
                    <div class="sidebar_filter">
                        <div class="section-title">
                            <h4>Cena</h4>
                        </div>
                        <ul>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="form-check-input product_check" value="0.00 AND 4999.00" id="price">0 - 5000 RSD
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="form-check-input product_check" value="5000.00 AND 9999.00" id="price">5000 - 10000 RSD
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="form-check-input product_check" value="10000.00 AND 14999.00" id="price">10000 - 15000 RSD
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="form-check-input product_check" value="15000.00 AND 19999.00" id="price">15000 - 20000 RSD
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="form-check-input product_check" value="20000.00 AND 29999.00" id="price">20000 - 30000 RSD
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="form-check-input product_check" value="30000.00 AND 49999.00" id="price">30000 - 50000 RSD
                                </label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="form-check-input product_check" value="50000.00 AND 99999.00" id="price">50000 - preko RSD
                                </label>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div class="sidebar_sizes">
                        <div class="section-title">
                            <h4>Veličina</h4>
                        </div>
                        <ul class="">
                            <?php foreach($sizes as $velicina) : ?>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="form-check-input product_check" value="<?php echo $velicina->size; ?> " id="size"> <?php echo $velicina->size; ?>
                                </label>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <br>
                    <div class="sidebar_color">
                        <div class="section-title">
                            <h4>Boja</h4>
                        </div>
                        <ul class="">
                            <?php foreach($colors as $boja) : ?>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="form-check-input product_check" value="<?php echo $boja->color_name; ?>" id="color"> <?php echo $boja->color_name; ?>
                                </label>
                            </li>
                            <?php endforeach; ?>
                        </ul>
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
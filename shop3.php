<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
$items = $product->read();
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
                <div class="row filter_data">

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
                            <h4>Cena</h4>
                        </div>
                        <input type="hidden" id="hidden_minimum_price" value="0" />
                        <input type="hidden" id="hidden_maximum_price" value="65000" />
                        <p id="price_show">1000 - 65000 RSD</p>
                        <b>1000 RSD </b> <input id="price_range" type="text" class="span2" value=""/> <b>65000 RSD</b>
                        <!-- <div id="price_range"></div> -->
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
                                    <input type="checkbox" class="form-check-input common_selector size" value="<?php echo $velicina->size; ?> " id="size"> <?php echo $velicina->size; ?>
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
                                    <input type="checkbox" class="form-check-input common_selector color" value="<?php echo $boja->color_name; ?>" id="color"> <?php echo $boja->color_name; ?>
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
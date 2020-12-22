<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
$kategorije = $category->read();
if(isset($_GET['id'])) {
    $item = $product->show($_GET['id']);
}
$catId = $item->cat_id;
$id = $_GET['id'];
$relatedProducts = $product->related($catId, $id);
$items = $product->latest();
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
                        <span><?php echo $item->name; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-9 col-md-9">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                <div class="container product">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo $item->cover_img; ?>" alt="" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo $item->img_2; ?>" alt="" class="d-block w-100">
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                                <a data-target="#carouselExampleControls" data-slide-to="0" href="#" class="thumbnail">
                                    <img src="<?php echo $item->cover_img; ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                                <a data-target="#carouselExampleControls" data-slide-to="1" href="#" class="thumbnail">
                                    <img src="<?php echo $item->img_2; ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <form action="cart.php" method="post">
                        <h3><?php echo $item->name; ?></h3>
                        <?php if($item->lower_price == NULL) : ?>
                        <span class="price"><?php echo $item->price; ?> RSD</span>
                        <?php else : ?>
                            <del><span class="text-muted"><?php echo $item->price; ?> RSD</span></del> <span class="price"><?php echo $item->lower_price; ?> RSD</span>
                        <?php endif; ?>
                        <p><strong>Stanje: </strong><?php echo $item->status; ?></p>
                        <p class="text-justify"><?php echo $item->details; ?></p>
                        <hr>
                        <p><strong>Boja: </strong></p>
                        <?php
                        $colors = (array_map('trim', array_filter(explode(' ', $item->color))));
                        foreach($colors as $color) : ?>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" name="color" value="<?php echo $color; ?>" required><?php echo $color; ?>
                        </div>
                        <?php endforeach; ?>
                        <br>
                        <p><a href="size-guide.php">VODIČ ZA VELIČINE</a></p>
                        <p><strong>Veličina: </strong></p>
                        <?php
                        $sizes = (array_map('trim', array_filter(explode(' ', $item->size))));
                        foreach($sizes as $velicina) : ?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="size" id="size" value="<?php echo $velicina; ?>" required> <?php echo $velicina; ?>
                            </label>
                        </div>
                        <?php endforeach; ?>
                        <p>SELEKTUJTE VELIČINU ARTIKLA</p>
                        <br>
                        <div class="row">
                            <div class="col-md-6"><input type="number" class="form-control" value="1" name="quantity"></div>
                                <div class="col-md-6">
                                    <input type="hidden" name="name" value="<?php echo $item->name; ?>">
                                    <?php if($item->lower_price != NULL) : ?>
                                        <input type="hidden" name="price" value="<?php echo $item->lower_price; ?>">
                                    <?php else : ?>
                                        <input type="hidden" name="price" value="<?php echo $item->price; ?>">
                                    <?php endif; ?>
                                    <input type="hidden" name="img" value="<?php echo $item->cover_img; ?>">
                                    <input type="hidden" name="id" value="<?php echo $item->id; ?>">
                                    <?php if($item->status == 'Na zalihama') : ?>
                                    <input type="submit" class="btn btn-success form-control" name="addToCartBtn" value="DODAJ">
                                    <?php else : ?>
                                    <input type="submit" class="btn btn-success form-control" name="addToCartBtn" value="DODAJ" disabled> 
                                    <?php endif; ?>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
                <br>
                <h3 class="text-center">Recenzije</h3>
                <p class="text-muted">Vaša email adresa neće biti objavljena. Obavezna polja su označena *</p>
                <form action="add.php" method="post">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label><strong>Ime *</strong></label>
                            <input type="name" class="form-control" name="name" placeholder="Unesite ime">
                        </div>
                        <div class="col-md-6">
                        <label><strong>Email *</strong></label>
                            <input type="email" class="form-control" name="email" placeholder="Unesite E-mail">
                        </div>
                    </div><br>
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5">
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4">
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3">
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2">
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1">
                        <label for="star1" title="text">1 star</label>
                    </div>
                    <br><br>
                    <label><strong>Vaša recenzija *</strong></label>
                    <textarea class="form-control" name="review" cols="30" rows="10" placeholder="Napišite svoju recenziju"></textarea><br>
                    <input type="submit" class="btn btn-primary" name="addReviewBtn" value="POSTAVITE">
                    <input type="hidden" name="product_id" value="<?php echo $item->id; ?>">
                </form>
            </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-3 col-md-3">
            <?php require_once 'inc/products.inc.php'; ?>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center">Slični proizvodi</h2>
        <br>
        <div class="row"> 
            <?php foreach($relatedProducts as $product) : ?>
                <div class="col-lg-2 col-md-2 col-6">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="single.item.view.php?id=<?php echo $product->id; ?>">
                                <img class="pic-1" src="<?php echo $product->cover_img; ?>">
                                <img class="pic-2" src="<?php echo $product->img_2; ?>">
                            </a>
                            <ul class="social">
                                <li><a href="single.item.view.php?id=<?php echo $product->id; ?>" data-tip="Pogledaj proizvod"><i class="fa fa-eye"></i></a></li>
                            </ul>
                            <a class="add-to-cart" href="single.item.view.php?id=<?php echo $product->id; ?>">Pogledaj proizvod</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="single.item.view.php?id=<?php echo $product->id; ?>"><?php echo $product->name; ?></a></h3>
                            <span class="price"><?php echo $product->price; ?> RSD</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>   
        </div>
    </div>
    
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
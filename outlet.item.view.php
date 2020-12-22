<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
$kategorije = $category->read();
if(isset($_GET['id'])) {
    $item = $product->show($_GET['id']);
}
$items = $product->latest();
?>

<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

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
                    </div>
                    <div class="col-md-6">
                    <form action="cart.php" method="post">
                        <h1><?php echo $item->name; ?></h1>
                        <span class="text-muted"><del><?php echo $item->price; ?></del></span> <span class="price"><?php echo $item->outlet_price; ?> RSD</span>
                        <p><strong>Stanje: </strong><?php echo $item->status; ?></p>
                        <p class="text-justify"><?php echo $item->details; ?></p>
                        <hr>
                        <p><strong>Boja: </strong></p>
                        <?php
                        $colors = (array_map('trim', array_filter(explode(' ', $item->color))));
                        foreach($colors as $color) : ?>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" name="color" value="<?php echo $color; ?>"><?php echo $color; ?>
                        </div>
                        <?php endforeach; ?>
                        <p><strong>Veličina: </strong></p>
                        <?php
                        $sizes = (array_map('trim', array_filter(explode(' ', $item->size))));
                        foreach($sizes as $velicina) : ?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="size" id="size" value="<?php echo $velicina; ?>"> <?php echo $velicina; ?>
                            </label>
                        </div>
                        <?php endforeach; ?>
                        <br>
                        <div class="row">
                            <div class="col-md-6"><input type="number" class="form-control" value="1" name="quantity"></div>
                                <div class="col-md-6">
                                    <input type="hidden" name="name" value="<?php echo $item->name; ?>">
                                    <input type="hidden" name="price" value="<?php echo $item->price; ?>">
                                    <input type="hidden" name="img" value="<?php echo $item->cover_img; ?>">
                                    <input type="hidden" name="id" value="<?php echo $item->id; ?>">
                                    <input type="submit" class="btn btn-success form-control" name="addToCartBtn" value="DODAJ">
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
        <div class="col-md-4">
            <?php require_once 'inc/products.inc.php'; ?>
        </div>
    </div>
    <h2 class="text-center">Povezani proizvodi</h2>
    <br>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
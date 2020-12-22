<?php
$posts = $blog->latest();
$items = $product->latest();
$outlet = 1;
$outletItems = $product->latestOutlet($outlet);
?>

<section id="banner-area">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="assets/images/carousel1.jpg" alt="Banner1">
            <div class="slide-info">
                <div class="container">
                    <h2 class="text-light">DOBRODOŠLI U EQUI ONLINE SHOP</h2>
                    <a href="shop.view.php" class="btn btn-dark">KUPITE SADA</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="assets/images/carousel2.jpg" alt="Banner2">
            <div class="slide-info">
                <div class="container">
                    <h2 class="text-light">NOVO U NAŠOJ PONUDI.<br>SVEČANE HALJINE</h2>
                    <a href="category.view.php?cat_id=9" class="btn btn-dark">POGLEDAJ SADA</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="assets/images/carousel3.jpg" alt="Banner3">
            <div class="slide-info">
                <div class="container">
                    <h2 class="text-light">SPECIJALNA PONUDA.<br>50% POPUSTA U NAŠEM OUTLETU.</h2>
                    <a href="outlet.view.php" class="btn btn-dark">KUPITE SADA</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="latest">
    <div class="container pt-2 pb-2">
        <h3 class="text-center">NAJNOVIJE</h3>
        <p class="text-center text-muted">Pregledajte našu veb stranicu i potražite najzanimljivije proizvode na tržištu.</p>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach($items as $item) : ?>
            <div class="item py-2">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="single.item.view.php?id=<?php echo $item->id; ?>">
                            <img class="pic-1" src="<?php echo $item->cover_img; ?>">
                            <img class="pic-2" src="<?php echo $item->img_2; ?>">
                        </a>
                        <ul class="social">
                            <li><a href="single.item.view.php?id=<?php echo $item->id; ?>" data-tip="Pogledaj proizvod"><i class="fa fa-eye"></i></a></li>
                        </ul>
                        <a class="add-to-cart" href="single.item.view.php?id=<?php echo $item->id; ?>">Pogledaj proizvod</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="single.item.view.php?id=<?php echo $item->id; ?>"><?php echo $item->name; ?></a></h3>
                        <span class="price"><?php echo $item->price; ?> RSD</span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="outlet">
    <div class="container pt-2 pb-2">
        <h3 class="text-center">OUTLET</h3>
        <p class="text-center text-muted">Specijalna ponuda. 50% popusta u našem outletu.</p>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach($outletItems as $item) : ?>
            <div class="item py-2">
                <div class="product-grid2">
                                <div class="product-image2">
                                    <a href="single.item.view.php?id=<?php echo $item->id; ?>">
                                        <img class="pic-1" src="<?php echo $item->cover_img; ?>">
                                        <img class="pic-2" src="<?php echo $item->img_2; ?>">
                                    </a>
                                    <ul class="social">
                                        <li><a href="single.item.view.php?id=<?php echo $item->id; ?>" data-tip="Pogledaj proizvod"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="single.item.view.php?id=<?php echo $item->id; ?>">Pogledaj proizvod</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="single.item.view.php?id=<?php echo $item->id; ?>"><?php echo $item->name; ?></a></h3>
                                    <span class="price"><?php echo $item->price; ?> RSD</span>
                                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--
<div class="container pt-5 pb-5">
    <h3 class="text-center">PRATITE NAS</h3>
    <p class="text-center text-muted">@equi_studio</p>
    5 INSTAGRAM SLIKA
</div>
-->
<div class="container pt-2 pb-2">
    <h3 class="text-center">SA NAŠEG BLOGA</h3>
    <hr>
    <section id="blog-area">
        <div class="owl-carousel owl-theme">
            <?php foreach($posts as $post) : ?>
            <div class="item">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $post->cover_img; ?>" alt="<?php echo $post->title; ?>">
                    <div class="card-body post-info">
                        <h2 class="card-title post-title"><?php echo $post->title; ?></h2>
                        <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $post->created; ?>
                        <br>
                        <p class="card-text text-justify"><?php echo substr($post->body, 0, 100); ?>...</p>
                        <a href="single.post.view.php?post_id=<?php echo $post->post_id; ?>" class="stretched-link btn btn-dark">Saznaj više</a>
                    </div>
                </div> 
            </div>
            <?php endforeach; ?>
        </div>
    </section>       
</div>

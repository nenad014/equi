<div class="container">
    <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
        <input class="form-control mr-sm-2" type="text" placeholder="Pretraga proizvoda" name="search">
        <button class="btn btn-dark my-2 my-sm-0" type="submit" name="searchBtn">Pretraga</button>
    </form>
    <br>
    <div class="section-title">
        <h4>Najnoviji proizvodi</h4>
    </div>
    <?php foreach($items as $item) : ?>
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
    <div class="section-title">
        <h4>Kategorije</h4>
    </div>
    <ul>
    <?php foreach($kategorije as $kat) : ?>
        <li class="cat-item"><a href="category.view.php?cat_id=<?php echo $kat->cat_id; ?>"><?php echo $kat->cat_name; ?></a></li>
    <?php endforeach; ?>
    </ul>
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
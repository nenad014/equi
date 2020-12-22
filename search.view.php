<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
$results = $search->searchResults();
?>

<section class="page-info-section">
    <h1>REZULTATI PRETRAGE</h1>
    <br>
    <a href="index.php"><span>HOME</span></a> <i class="fa fa-chevron-right" aria-hidden="true"></i> <span>REZULTATI PRETRAGE</span>
</section>

<div class="container pt-5 pb-5">
    <div class="row">
        <?php foreach($results as $result) : ?>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $result->cover_img; ?>" alt="<?php echo $result->name; ?>">
                    <div class="card-body text-center">
                        <h3 class="product-name"><a href="single.item.view.php?id=<?php echo $result->id; ?>" class="stretched-link"><?php echo $result->name; ?></a></h3>
                        <span class="price"><?php echo $result->price; ?> RSD</span>
                    </div>
                </div><br>
            </div>
                <?php endforeach; ?>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
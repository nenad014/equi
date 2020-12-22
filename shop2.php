<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
// $items = $product->read();
$kategorije = $category->read();

$results_per_page = 12;
$query = "SELECT * FROM products";
$result = $conn->query($query);
$number_of_result = $result->rowCount();
$number_of_page = ceil($number_of_result/$results_per_page);
if(!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}
$page_first_result = ($page-1)*$results_per_page;

$query = "SELECT * FROM products LIMIT ".$page_first_result.','.$results_per_page;
$result = $conn->query($query);
?>

<section class="page-info-section">
    <h1>PRODAVNICA</h1>
    <br>
    <a href="index.php"><span>HOME</span></a> <i class="fa fa-chevron-right" aria-hidden="true"></i> <span>PRODAVNICA</span>
</section>

<div class="container-fluid pt-5 pb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <?php while($row = $result->fetch(PDO::FETCH_ASSOC)) : ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo $row['cover_img']; ?>" alt="<?php echo $row['name']; ?>">
                                <div class="card-body text-center">
                                    <h3 class="product-name"><a href="single.item.view.php?id=<?php echo $row['id']; ?>" class="stretched-link"><?php echo $row['name']; ?></a></h3>
                                    <span class="price"><?php echo $row['price']; ?> RSD</span>
                                </div>
                            </div><br>
                        </div>
                    <?php endwhile; ?>
                </div>
                <ul class="pagination">
                    <?php for($page = 1; $page<=$number_of_page; $page++) : ?>
                    <li class="page-item"><a href="shop2.php?page=<?php echo $page; ?>" class="page-link"><?php echo $page; ?></a></li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="container">
                <h2 class="widgettitle">Cena</h2>
                <h2 class="widgettitle">Boja</h2>
                <ul>
                    <li>CRNA</li>
                    <li>CRVENA</li>
                </ul>
                <h2 class="widgettitle">Veličina</h2>
                <h2 class="widgettitle">Kategorije proizvoda</h2>
                <ul>
                <?php foreach($kategorije as $kat) : ?>
                    <li class="cat-item"><a href="category.view.php?cat_id=<?php echo $kat->cat_id; ?>"><?php echo $kat->cat_name; ?></a></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
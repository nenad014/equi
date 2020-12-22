<?php

require_once 'bootstrap.php';

if(isset($_POST['action'])) {
    $sql = "SELECT * FROM products WHERE status = 'Na zalihama'";
    if(isset($_POST['price'])) {
        $price = implode("','", $_POST['price']);
        $sql .= " AND price BETWEEN $price";
    }
    if(isset($_POST['color'])) {
        $color = implode("','", $_POST['color']);
        $sql .= " AND color = '$color'";
    }
    if(isset($_POST['size'])) {
        $size = implode("','", $_POST['size']);
        $sql .= " AND size LIKE '%".$size."%'";
    }

    $query = $conn->query($sql);
    // $queryResults = $query->rowCount();

    if($query) {
        while($results=$query->fetch(PDO::FETCH_ASSOC)) : ?>
            <div class="col-lg-4 col-md-4">
                <div class="product-grid2" data-price="<?php echo $results['price']; ?>">
                                <div class="product-image2">
                                    <a href="single.item.view.php?id=<?php echo $results->id; ?>">
                                        <img class="pic-1" src="<?php echo $results['cover_img']; ?>">
                                        <img class="pic-2" src="<?php echo $results['img_2']; ?>">
                                    </a>
                                    <?php if($results['status'] == 'Prodato') : ?>
                                    <span class="product-new-label"><?php echo $results['status']; ?></span>
                                    <?php endif; ?>
                                    <ul class="social">
                                        <li><a href="single.item.view.php?id=<?php echo $results['id']; ?>" data-tip="Pogledaj proizvod"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="single.item.view.php?id=<?php echo $results['id']; ?>">Pogledaj proizvod</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="single.item.view.php?id=<?php echo $results['id']; ?>"><?php echo $results['name']; ?></a></h3>
                                    <?php if($results['lower_price'] == NULL) : ?>
                                    <span class="price"><?php echo $results['price']; ?> RSD</span>
                                    <?php else : ?>
                                    <del><span class="text-muted"><?php echo $results['price']; ?> RSD</span></del> <span class="price"><?php echo $results['lower_price']; ?> RSD</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <br>
                        </div>
            <?php endwhile;
    } else {
        echo "Nema rezultata";
    }
}
 
/* if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM products WHERE status = 'Na zalihama'
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["size"]))
	{
		$size_filter = implode("','", $_POST["size"]);
		$query .= "
		 AND size IN('".$size_filter."')
		";
	}
	if(isset($_POST["color"]))
	{
		$color_filter = implode("','", $_POST["color"]);
		$query .= "
		 AND color IN('".$color_filter."')
		";
	}

	$stmt = $conn->query($query);
    $queryResults = $stmt->rowCount();

    if($queryResults > 0) {
        while($results=$stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <div class="col-lg-4 col-md-4">
                <div class="product-grid2" data-price="<?php echo $results['price']; ?>">
                                <div class="product-image2">
                                    <a href="single.item.view.php?id=<?php echo $results->id; ?>">
                                        <img class="pic-1" src="<?php echo $results['cover_img']; ?>">
                                        <img class="pic-2" src="<?php echo $results['img_2']; ?>">
                                    </a>
                                    <?php if($results['status'] == 'Prodato') : ?>
                                    <span class="product-new-label"><?php echo $results['status']; ?></span>
                                    <?php endif; ?>
                                    <ul class="social">
                                        <li><a href="single.item.view.php?id=<?php echo $results['id']; ?>" data-tip="Pogledaj proizvod"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#" data-tip="Dodaj na karticu"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="single.item.view.php?id=<?php echo $results['id']; ?>">Pogledaj proizvod</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="single.item.view.php?id=<?php echo $results['id']; ?>"><?php echo $results['name']; ?></a></h3>
                                    <?php if($results['outlet'] != 1) : ?>
                                    <span class="price"><?php echo $results['price']; ?> RSD</span>
                                    <?php else : ?>
                                    <del><span class="text-muted"><?php echo $results['price']; ?> RSD</span></del> <span class="price"><?php echo $results['outlet_price']; ?> RSD</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <br>
                        </div>
            <?php endwhile;
    } else {
        echo "Nema rezultata";
    }
} */
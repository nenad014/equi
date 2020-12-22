<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        $categories = $category->read();
    } else {
        header('Location: index.php');
    } 
?>
<?php require_once 'inc/sidebar.inc.php'; ?>

<!-- Page Content  -->
<div id="content">

<?php require_once 'inc/navbar.inc.php'; ?>
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 py-2">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                     <li class="breadcrumb-item active" aria-current="page">Sve kategorije</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top px-3">
                                    <h3>
                                        <i class="fa fa-tasks"></i> Svi kategorije
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Ime</th>
                                                    <th>Slika</th>
                                                    <th>Akcija</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($categories as $single) : ?>
                                                <tr>   
                                                    <td><?php echo $single->cat_name; ?></td>
                                                    <td><img src="../<?php echo $single->cat_img; ?>" alt="<?php echo $single->cat_name; ?>" class="img-thumb" width="120"></td>
                                                    <td><a href="update-category.php?cat_id=<?php echo $single->cat_id; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a> <a href="remove.php?cat_id=<?php echo $single->cat_id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>
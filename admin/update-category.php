<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        if(isset($_GET['cat_id'])) {
            $kategorija = $category->show($_GET['cat_id']);
        }
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
                                     <li class="breadcrumb-item active" aria-current="page">Ažuriraj kategoriju</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top px-3">
                                    <h3>
                                        <i class="fa fa-tasks"></i> Ažuriraj kategoriju
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="update.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Naziv kategorije</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="cat_name" value="<?php echo $kategorija->cat_name; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="file-input" class=" form-control-label">Slika kategorije</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="file-input" name="cat_img" class="form-control-file">
                                                <br>
                                                <?php $c_img = $kategorija->cat_img; ?>
                                                <img src="../<?php echo $kategorija->cat_img; ?>" alt="" width="120" height="180" class="img-thumbnail" name='c_img'>
                                                <input type="hidden" name="c_img" value="<?php echo str_replace('assets/images/', '', $c_img); ?>">
                                            </div>
                                        </div>
                                        <input type="hidden" name="cat_id" value="<?php echo $kategorija->cat_id; ?>">
                                        <input type="submit" class="btn btn-success" name="updateCatBtn" value="Ažuriraj">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>
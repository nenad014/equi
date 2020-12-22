<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        
    } else {
        header('Location: index.php');
    }
?>
<?php require_once 'inc/sidebar.inc.php'; ?>

<!-- Page Content  -->
<div id="content">

<?php require_once 'inc/navbar.inc.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 py-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="category.php">Kategorije</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dodaj kategoriju</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-top">
                        <h3>Dodaj kategoriju</h3>
                    </div>
                    <div class="card-body">
                        <form action="add.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                        <label for="text-input" class=" form-control-label">Ime kategorije</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="cat_name" placeholder="Ime kategorije" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2">
                                        <label for="file-input" class=" form-control-label">Slika kategorije</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="cat_img" class="form-control-file">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary" name="addCatBtn" value="Dodaj">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>

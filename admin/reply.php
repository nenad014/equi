<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        if(isset($_GET['comment_id'])) {
            $single = $comment->show($_GET['comment_id']);
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
                                    <li class="breadcrumb-item"><a href="comments.php">Komentari</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Odgovori na komentar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top px-3">
                                    <h3>
                                        <i class="fa fa-user"></i> Odgovori na komentar
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-borderless">
                                        <form action="add.php" method="POST">
                                            <input type="text" value="<?php echo $single->post_id; ?>" name="post_id"><br>
                                            <label><strong>Kome?</strong></label>
                                            <input type="text" class="form-control" value="<?php echo $single->name; ?>"><br>
                                            <input type="text" class="form-control" value="Admin" name="name"><br>
                                            <input type="email" class="form-control" value="equi.studio@gmail.com" name="email"><br>
                                            <textarea name="comment" id="textarea-input" rows="9" placeholder="Odgovori..." class="form-control"></textarea><br>
                                            <input type="submit" class="btn btn-success" name="addComentBtn" value="Odgovori">
                                        </form>
                                    </table> 
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>
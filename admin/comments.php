<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        $komentari = $comment->read();
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
                                    <li class="breadcrumb-item active" aria-current="page">Komentari</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top px-3">
                                    <h3>
                                        <i class="fa fa-users"></i> Komentari
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Komentar</th>
                                                    <th>Akcija</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($komentari as $komentar) : ?>
                                                <tr>
                                                    <td>
                                                        <h4><?php echo $komentar->name; ?></h4>
                                                        <p class="text-muted"><?php echo $komentar->email; ?></p>
                                                        <hr>
                                                        <p><?php echo $komentar->comment; ?></p>
                                                        <hr>
                                                        <small><?php echo $komentar->title; ?></small> -
                                                        <small><strong><?php echo $komentar->created; ?></strong></small>
                                                    </td>
                                                    <td>
                                                        <a href="reply.php?comment_id=<?php echo $komentar->comment_id; ?>" class="btn btn-warning"><i class="fa fa-reply" aria-hidden="true"></i></a>    
                                                        <a href="remove.php?comment_id=<?php echo $komentar->comment_id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>                  
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
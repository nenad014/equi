<?php require_once 'inc/top.inc.php'; ?>

<?php
    if(isset($_SESSION['admin'])) {
        $posts = $blog->read();
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
                                    <li class="breadcrumb-item active" aria-current="page">Sve blog objave</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top px-3">
                                    <h3>
                                        <i class="fa fa-th-list"></i> Sve blog objave
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Naslov</th>
                                                    <th>Tekst</th>
                                                    <th>Slika</th>
                                                    <th>Datum</th>
                                                    <th>Akcija</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($posts as $post) : ?>
                                                <tr>
                                                    <td><?php echo $post->title; ?></td>
                                                    <td class="text-justify"><?php echo substr($post->body, 0, 200); ?>...</td>
                                                    <td><img src="../<?php echo $post->cover_img; ?>" alt="" class="img-fluid"></td>
                                                    <td><?php echo $post->created; ?></td>
                                                    <td><a href="single-post.php?post_id=<?php echo $post->post_id; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a> <a href="update-post.php?post_id=<?php echo $post->post_id; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a> <a href="remove.php?post_id=<?php echo $post->post_id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>    
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
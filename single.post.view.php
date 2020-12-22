<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
$newest = $blog->latest();
if(isset($_GET['post_id'])) {
    $post = $blog->show($_GET['post_id']);
    $komentari = $comment->commentByPost($_GET['post_id']);
}
?>

<div class="container-fluid pt-5 pb-5">
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                            Početna</a>
                        <a href="blog.view.php">Blog</a>
                        <span><?php echo $post->title; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-9 col-md-9">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                <div class="container">
                <img src="<?php echo $post->cover_img; ?>" class="img-fluid">
                <br><br>
                <h2><?php echo $post->title; ?></h2>
                <span><?php echo $post->created; ?></span>
                <p class="text-justify"><?php echo $post->body; ?></p>
            </div>
            <br>
            <h3>Komentari (<?php echo count($komentari); ?>)</h3>
            <?php foreach($komentari as $komentar) : ?>
                <?php if($komentar->type == 'comment') : ?>
                <div class="card col-md-10">
                    <div class="card-body">
                        <strong><?php echo $komentar->name; ?> kaže: </strong>
                        <p><?php echo $komentar->comment; ?></p>
                        <small><?php echo $komentar->created; ?></small>
                    </div>
                </div><br>
                <?php endif; ?>
                <?php if($komentar->type == 'reply') : ?>
                        <div class="card bg-light col-md-8 offset-md-2">
                            <div class="card-body">
                                <strong><?php echo $komentar->name; ?> kaže: </strong>
                                <p><?php echo $komentar->comment; ?></p>
                                <small><?php echo $komentar->created; ?></small>
                            </div>
                        </div><br>
                    <?php endif; ?>
            <?php endforeach; ?>
            <br>
            <h3>Ostavite komentar</h3>
            <p class="text-muted">Vaša email adresa neće biti objavljena. Obavezna polja su označena *</p>
            <form action="add.php" method="post">
                <div class="form-row">
                    <div class="col-md-6">
                    <label><strong>Ime *</strong></label>
                    <input type="name" class="form-control" name="name" placeholder="Unesite ime" required>
                    </div>
                    <div class="col-md-6">
                    <label><strong>Email *</strong></label>
                    <input type="email" class="form-control" name="email" placeholder="Unesite E-mail" required>
                    </div>
                </div><br>
                <label><strong>Vaš komentar *</strong></label>
                <textarea class="form-control" name="comment" cols="30" rows="10" placeholder="Unesite komentar" required></textarea><br>
                <input type="hidden" name="post_id" value="<?php echo $post->post_id; ?>">
                <input type="submit" class="btn btn-dark" name="addComentBtn" value="OSTAVITE KOMENTAR">
            </form>
                </div>
            </div>
            
        </div>
        <div class="col-lg-3 col-md-3">
        <div class="container">
                <div class="section-title">
                    <h4>SKORAŠNJE OBJAVE</h4>
                </div>
            <?php foreach($newest as $single) : ?>
                <div class="product_sidebar_item">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-4">
                            <img class="img-thumbnail" src="<?php echo $single->cover_img; ?>" alt="<?php echo $single->title; ?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-8">
                            <h2 class="post-title"><a href="single.post.view.php?post_id=<?php echo $single->post_id; ?>"><?php echo $single->title; ?></a></h2>
                            <p><?php echo $single->created; ?></p>
                        </div>
                    </div>
                </div>   
            <?php endforeach; ?>
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
        </div>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
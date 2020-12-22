<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
$posts = $blog->read();
$newest = $blog->latest();
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
                            <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-9 col-md-9">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <?php foreach($posts as $post) : ?>
                        <article class="pt-3 pb-3">
                            <img class="img-fluid" src="<?php echo $post->cover_img; ?>" alt="<?php echo $post->title; ?>">
                            <h2><?php echo $post->title; ?></h2>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $post->created; ?></p>
                            <p class="text-justify"><?php echo substr($post->body, 0, 164); ?>...</p>
                            <a href="single.post.view.php?post_id=<?php echo $post->post_id; ?>" class="btn btn-dark">Saznaj više</a>
                        </article>
                        <?php endforeach; ?>
                    </div>
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
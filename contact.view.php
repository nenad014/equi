<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<div class="container-fluid pt-5 pb-5">
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                            Početna</a>
                            <span>Kontakt</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.9987615262203!2d20.47017221553534!3d44.80121387909874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a700aca0f229d%3A0x4af6abf016754d4e!2sEqui+Studio!5e0!3m2!1sen!2srs!4v1515601095374" style="border: 0;"></iframe>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <h4>ADRESA</h4>
                <p>Paunova 18, 11000 Beograd</p>
                <h4>RADNO VREME</h4>
                <p>Ponedeljak - Petak 8:00 - 16:00</p>
                <h4>PRATITE NAS</h4>
                <i class="fa fa-facebook-official" aria-hidden="true"></i> <a href="https://www.facebook.com/equi.serbia" target="_blank">equi.serbia</a><br>
                <i class="fa fa-instagram" aria-hidden="true"></i> <a href="https://www.instagram.com/equi.serbia/" target="_blank">equi.serbia</a><br>
                <i class="fa fa-youtube" aria-hidden="true"></i> <a href="https://www.youtube.com/channel/UC4X-sx2VIyKAZGYou5e5DfA" target="_blank">Equi</a>
            </div>
            <div class="col-md-6">
                <form action="contact.php" method="post">
                    <label><strong>Ime *</strong></label>
                    <input type="text" class="form-control" name="name" required><br>
                    <label><strong>Email *</strong></label>
                    <input type="email" class="form-control" name="email" required><br>
                    <label><strong>Naslov *</strong></label>
                    <input type="text" class="form-control" name="subject"><br>
                    <label><strong>Poruka *</strong></label>
                    <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea><br>
                    <input type="submit" name="sendMsgBtn" class="form-control btn btn-dark" value="POŠALJI">
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 container bg-light pt-3 pb-3">
            <h2><i class="fa fa-sign-in" aria-hidden="true"></i> PRIJAVA</h2>
            <p>Molimo Vas da popunite obrazac kako biste se prijavili.</p>
            <hr>
            <form action="login.php" method="POST">
                <label><strong>Email</strong></label>
                <input type="email" name="email" class="form-control" required><br>
                <label><strong>Lozinka</strong></label>
                <input type="password" name="password" class="form-control" required><br>
                <input type="submit" class="btn btn-success form-control" name="logBtn" value="PRIJAVA"><br><br><hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <button type="reset" class="btn btn-danger">OTKAŽI</button>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p class="text-right">Zaboravili ste <a href="#">lozinku</a>?</p>
                    </div>
                </div>
            </form>
            <?php if($user->loggedUser) : ?>
                <div class="alert alert-success">Uspešno ste se prijavili. <a href="checkout.view.php">Kompletirajte porudžbinu.</a></div>
                <?php elseif(isset($_POST['logBtn'])) : ?>
                    <div class="alert alert-danger">Uneli ste pogrešne podatke.</div>
                <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>
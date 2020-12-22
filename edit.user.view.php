<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
    if(!isset($_SESSION['loggedUser'])) {
        header('Location: login.register.view.php');
    } else {
        $single = $user->show($_SESSION['loggedUser']->user_id);
    }
?>

<div class="container pt-5 pb-5">
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                            Početna</a>
                            <a href="user.view.php">Moj nalog</a>
                            <span>Uredi nalog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="update.php" method="POST">
                <label>Korisničko ime</label>
                <input type="text" name="name" class="form-control" value="<?php echo $single->name; ?>"><br>
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $single->email; ?>" disabled><br>
                <label>Lozinka</label>
                <input type="password" name="password" class="form-control" value="<?php echo $single->password; ?>"><br>
                <label>Ime</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $single->fname; ?>"><br>
                <label>Prezime</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $single->lname; ?>"><br>
                <label>Broj telefona</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $single->phone; ?>"><br>
                <label>Adresa</label>
                <input type="text" name="address" class="form-control" value="<?php echo $single->address; ?>"><br>
                <label>Adresa isporuke</label>
                <input type="text" name="delivery_address" class="form-control" value="<?php echo $single->delivery_address; ?>"><br>
                <input type="hidden" name="user_id" value="<?php echo $single->user_id; ?>">
                <input type="submit" class="btn btn-success" name="updateUserBtn" value="AŽURIRAJ">
            </form>
        </div>
    </div>
</div>


<?php require_once 'inc/bottom.inc.php'; ?>
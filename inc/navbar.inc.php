<header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="EQUI STUDIO" class="img-fluid" width="75px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav m-auto">
                <li class="nav-item px-2">
                    <a class="nav-link" href="index.php">POČETNA</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="shop.view.php">PRODAVNICA</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="outlet.view.php">OUTLET</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="blog.view.php">BLOG</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="about.view.php">O NAMA</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="contact.view.php">KONTAKT</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RS
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://www.equi.studio/">EN</a>
                        </div>
                </li>
                <?php if(!isset($_SESSION['loggedUser'])) : ?>
                <li class="nav-item px-2">
                    <a class="nav-link" href="login.register.view.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                </li>
                <?php else : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="user.view.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['loggedUser']->name; ?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="user.view.php">MOJ NALOG</a>
                            <a class="dropdown-item" href="logout.php">ODJAVA</a>
                        </div>
                    </li>
                <?php endif; ?>
                <li class="nav-item px-2">
                    <a class="nav-link" href="cart.view.php"><i class="fa fa-shopping-cart"></i> 
                    <sup>
                    <?php if(isset($_COOKIE['shopping_cart'])) {
                        $no_of_item = 0;
                        $cookie_data = stripslashes($_COOKIE['shopping_cart']);
                        $cart_data = json_decode($cookie_data, true);

                        echo count($cart_data);
                    } ?>
                    </sup>
                    </a>
                </li>
            </ul>
        </div>  
        </nav>
</header>
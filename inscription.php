<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>SNEAKER SHOP</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/styles.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    </head>
    <body style="background: url(&quot;assets/img/chuttersnap-23WUGwMsFH8-unsplash.jpg&quot;);">
        <nav class="navbar navbar-light navbar-expand-lg navigation-clean">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/SNEAKER_SHOP_Logo_-_Original_-_5000x5000-removebg-preview.png" style="width: 103px;">
                </a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="background: #e4dada;">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon" style="color: rgb(255,254,254);"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item d-lg-flex d-xl-flex d-xxl-flex justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="width: 350.8px;">
                            <input type="search" style="width: 307.8px;margin: 5px;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;">
                            <i class="fa fa-search" style="width: 20.8625px;padding-left: -3px;">
                            </i>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary d-lg-flex justify-content-lg-center align-items-lg-center" role="button" style="margin: 5px;" href="index.php">ACCUEIL</a>
                        </li>
                        <li class="nav-item d-lg-flex justify-content-lg-center align-items-lg-center">
                            <a class="btn btn-primary" role="button" style="margin: 5px;" href="contacte.php">Contact</a>
                        </li>
                        <li class="nav-item d-lg-flex justify-content-lg-center align-items-lg-center">
                            <a class="btn btn-primary text-nowrap" role="button" style="margin: 5px;" href="BonneAffaire.php">Bonne Affaire&nbsp;</a>
                        </li>
                        <li class="nav-item d-lg-flex justify-content-lg-center align-items-lg-center">
                            <a class="btn btn-primary" role="button" style="margin: 5px;" href="produit.php">Produit</a>
                        </li>
                        <li class="nav-item dropdown" style="margin: 5px;">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgb(254,248,248);">Espace Client</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="connexion.php">Se Connecter</a>
                                <a class="dropdown-item" href="inscription.php">S'inscrire</a>
                            </div>
                        </li>
                        <a class="forgot" href="admin.php">Admin</a>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="login-dark" style="background: rgba(71,93,98,0);">
           <form action="test.php" method="post"   style="width: 1262px;">
                <h2 class="visually-hidden">Login Form</h2>
                <div class="illustration">
                    <i class="icon ion-ios-contact-outline"></i>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" name="nom" placeholder="Nom">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" name="prenom" placeholder="Prenom">
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="checkbox" placeholder="checkbox" value="M">
                    <h6 style="margin-left: 13px;margin-top: -23px;">Homme</h6>
                    <h1></h1>
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="checkbox" placeholder="checkbox" value="F">
                    <h6 style="margin-left: 15px;margin-top: -23px;">Femme</h6>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" name="age" placeholder="Age">
                    <input class="form-control" type="text" name="telephone" placeholder="Telephone">
                    <input class="form-control" type="text" name="adresse" placeholder="Adresse">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-block w-100" type="submit">Inscription</button>
                </div>
                <a class="forgot" href="#">Forgot your email or password?</a>
            </form>
        </section>
        <footer class="footer-basic">
            <div class="social">
                <a href="#">
                    <i class="icon ion-social-instagram"></i>
                </a>
                <a href="#">
                    <i class="icon ion-social-snapchat"></i>
                </a>
                <a href="#"><i class="icon ion-social-twitter"></i>
                </a>
                <a href="#">
                    <i class="icon ion-social-facebook"></i>
                </a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#">Home</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Services</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">About</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Terms</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Privacy Policy</a>
                </li>
            </ul>
            <p class="copyright">Company Name © 2022</p>
        </footer>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
        <script src="assets/js/script.min.js"></script>
    </body>
    </html>
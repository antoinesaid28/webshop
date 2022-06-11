<?php
session_start();
?>
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
    <div class="container"><a class="navbar-brand" href="index.php"><img
            src="assets/img/SNEAKER_SHOP_Logo_-_Original_-_5000x5000-removebg-preview.png" style="width: 103px;"></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"
                style="background: #e4dada;"><span class="visually-hidden">Toggle navigation</span><span
                class="navbar-toggler-icon" style="color: rgb(255,254,254);"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item d-lg-flex d-xl-flex d-xxl-flex justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
                    style="width: 350.8px;"><input type="search"
                                                   style="width: 307.8px;margin: 5px;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;"><i
                        class="fa fa-search" style="width: 20.8625px;padding-left: -3px;"></i></li>
                <li class="nav-item"><a
                        class="btn btn-primary d-lg-flex justify-content-lg-center align-items-lg-center" role="button"
                        style="margin: 5px;" href="index.php">ACCUEIL</a></li>
                <li class="nav-item d-lg-flex justify-content-lg-center align-items-lg-center"><a
                        class="btn btn-primary" role="button" style="margin: 5px;" href="contacte.php">Contact</a></li>
                <li class="nav-item d-lg-flex justify-content-lg-center align-items-lg-center"><a
                        class="btn btn-primary text-nowrap" role="button" style="margin: 5px;" href="BonneAffaire.php">Bonne
                    Affaire&nbsp;</a></li>
                <li class="nav-item d-lg-flex justify-content-lg-center align-items-lg-center"><a
                        class="btn btn-primary" role="button" style="margin: 5px;" href="produit.php">Produit</a></li>
                <div id="dec" class="nav-item dropdown" style="margin: 5px;"><a class="dropdown-toggle nav-link"
                                                                      aria-expanded="false" data-bs-toggle="dropdown"
                                                                      href="#" style="color: rgb(254,248,248);">Espace
                    Client</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="connexion.php">Se Connecter</a><a
                            class="dropdown-item" href="inscription.php">S'inscrire</a></div>
                </div>

                <div id="espace" class="nav-item dropdown" style="margin: 5px;"><a class="dropdown-toggle nav-link"
                                                                       aria-expanded="false" data-bs-toggle="dropdown"
                                                                       href="#" style="color: rgb(254,248,248);"><?= $_SESSION["user"];?></a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="deconnexion.php">Se deconnecter</a></div>
                </div>

<?php

if(!isset($_SESSION['user']))
{
    echo '
                     
                     
                     
                        <style >
                            #espace{
                            display:none;
                            }
                            #dec{
                            display:initial;
                            }
                        </style >';

}else {
    echo '
                     
                      <style >
                            #espace{
                            display:initial;
                            }
                            #dec{
                            display:none;
                            }
                        </style >
                     
                        ';
}
    ?>

    </ul>
        </div>
    </div>
</nav>
<section class="contact-clean" style="background: rgb(252,252,252);margin-top: 18px;">
    <form action="contact.php" method="post"><h2 class="text-center">Nous Contacter</h2>
        <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"
                                 style="padding-left: 8px;"></div>
        <div class="mb-3"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small
                class="form-text text-danger">Please enter a correct email address.</small></div>
        <div class="mb-3"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">envoyer</button>
        </div>
    </form>
    <section class="map-clean">
        <div class="container">
            <div class="intro"><h2 class="text-center">Localisation</h2></div>
        </div>
        <iframe allowfullscreen="" frameborder="0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBkPMHy_snq9Ry2nJhGI4yzkTCpf0MC9kA&amp;q=Quatre+Bornes&amp;zoom=15"
                width="100%" height="450"></iframe>
    </section>
    <footer class="footer-basic">
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a
                href="#"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Company Name © 2021</p></footer>
</section>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
<script src="assets/js/script.min.js"></script>
</body>
</html>
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
<body>
<header class="header-blue"
        style="background: url(&quot;assets/img/peri-stojnic-r3rbIwZ9DJc-unsplash.jpg&quot;) center / cover repeat-x, rgb(24,142,57);height: 703px;margin-top: 6px;margin-right: -8px;padding-right: 8px;">
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean">
        <div class="container"><a class="navbar-brand" href="index.php"><img
                src="assets/img/SNEAKER_SHOP_Logo_-_Original_-_5000x5000-removebg-preview.png"
                style="width: 103px;"></a>
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
                            class="btn btn-primary d-lg-flex justify-content-lg-center align-items-lg-center"
                            role="button" style="margin: 5px;" href="index.php">ACCUEIL</a></li>
                    <li class="nav-item d-lg-flex justify-content-lg-center align-items-lg-center"><a
                            class="btn btn-primary" role="button" style="margin: 5px;" href="contacte.php">Contact</a>
                    </li>
                    <li class="nav-item d-lg-flex justify-content-lg-center align-items-lg-center"><a
                            class="btn btn-primary text-nowrap" role="button" style="margin: 5px;"
                            href="BonneAffaire.php">Bonne Affaire&nbsp;</a></li>
                    <li class="nav-item d-lg-flex justify-content-lg-center align-items-lg-center"><a
                            class="btn btn-primary" role="button" style="margin: 5px;" href="produit.php">Produit</a>
                    </li>


                    <div id='dec'class="nav-item dropdown" style="margin: 5px;"><a class="dropdown-toggle nav-link"
                                                                          aria-expanded="false"
                                                                       ;   data-bs-toggle="dropdown" href="#"
                                                                          style="color: rgb(254,248,248);" >Espace Client
                        </a>
                        <div  class="dropdown-menu"><a class="dropdown-item" href="connexion.php">Se Connecter</a><a
                                class="dropdown-item" href="inscription.php">S'inscrire</a></div>
                    </div>








                    <div id='espace' class="nav-item dropdown" style="margin: 5px;"><a class="dropdown-toggle nav-link"
                                                                           aria-expanded="false"
                                                                           ;   data-bs-toggle="dropdown" href="#"
                                                                           style="color: rgb(254,248,248);" ><?= $_SESSION["user"];?></a>
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

                    }else{
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
    <div class="container">
        <div style="background: rgba(152,107,107,0);width: 477px;height: 559px;">
            <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-end"
                 style="background: rgba(181,15,15,0);width: 100%;height: 86%;"><h1
                    style="color: rgba(243,244,248,0.6);"><em>CHANGER DE TRAJECTOIRE&nbsp; </em><strong>Découvrez notre
                nouvelle&nbsp; collection.&nbsp; &nbsp;Des détails fidèles à&nbsp; &nbsp;l’originale et un style
                innovant.</strong><em>&nbsp;</em><br><a class="btn btn-primary" role="button" href="produit.php">ACHETER</a><br>
            </h1></div>
        </div>
    </div>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h1 style="text-align: center;"><strong>NOUVEAUTE</strong></h1></div>
            </div>
            <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="8000" data-bs-pause="false"
                 id="carousel-top-margin">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background: #ffffff;">
                        <div class="row g-0 slider-row">
                            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 offset-sm-0">
                                <div class="card">
                                    <div class="card-body text-center"
                                         style="border-width: 0px !important;background: #eaeaea;border-radius: 15px;margin-bottom: 10px;height: 282px;">
                                        <img style="width: 93%;height: 219px;"
                                             src="assets/img/Capture_d_écran_2022-03-14_111444-removebg-preview.png"><a
                                            class="btn btn-secondary" role="button" style="min-width: 100%;"
                                            href="P.airmax95.php">RESERVER</a></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 offset-sm-0">
                                <div class="card">
                                    <div class="card-body text-center"
                                         style="border-width: 0px !important;background: #eaeaea;border-radius: 15px;margin-bottom: 10px;height: 282px;">
                                        <img style="width: 93%;height: 219px;"
                                             src="assets/img/ox-street-7k4TGXsQCPY-unsplash.jpg">
                                        <a class="btn btn-secondary" role="button" style="min-width: 100%;"  href="P.airmax95.php">
                                            RESERVER
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 offset-sm-0">
                                <div class="card">
                                    <div class="card-body text-center"
                                         style="border-width: 0px !important;background: #eaeaea;border-radius: 15px;margin-bottom: 10px;height: 282px;">
                                        <img style="width: 93%;height: 219px;"
                                             src="assets/img/ox-street-BWPqHZBhMVA-unsplash.jpg">
                                        <a class="btn btn-secondary" role="button" style="min-width: 100%;" href="P.airmax95.php">
                                            RESERVER
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 offset-sm-0">
                                <div class="card">
                                    <div class="card-body text-center"
                                         style="border-width: 0px !important;background: #eaeaea;border-radius: 15px;margin-bottom: 10px;height: 282px;">
                                        <img style="width: 93%;height: 219px;"
                                             src="assets/img/ox-street-kmxgTOvNrNo-unsplash.jpg">
                                        <a class="btn btn-secondary" role="button" style="min-width: 100%;" href="P.airmax95.php">
                                            RESERVER
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background: #ffffff;">
                        <div class="row g-0 slider-row">
                            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 offset-sm-0">
                                <div class="card">
                                    <div class="card-body text-center"
                                         style="border-width: 0px !important;background: #eaeaea;border-radius: 15px;margin-bottom: 10px;height: 282px;">
                                        <img style="width: 93%;height: 219px;"
                                             src="assets/img/daniel-storek-JM-qKEd1GMI-unsplash-modified%20(1).png">
                                        <a class="btn btn-secondary" type="button" style="min-width: 100%;" href="P.airmax95.php">
                                            RESERVER
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 offset-sm-0">
                                <div class="card">
                                    <div class="card-body text-center"
                                         style="border-width: 0px !important;background: #eaeaea;border-radius: 15px;margin-bottom: 10px;height: 282px;">
                                        <img style="width: 93%;height: 219px;"
                                             src="assets/img/alex-motoc-xyjB6_ZDaKw-unsplash.jpg">
                                        <a class="btn btn-secondary" type="button" style="min-width: 100%;" href="P.airmax95.php">
                                            RESERVER
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 offset-sm-0">
                                <div class="card">
                                    <div class="card-body text-center"
                                         style="border-width: 0px !important;background: #eaeaea;border-radius: 15px;margin-bottom: 10px;height: 282px;">
                                        <img style="width: 93%;height: 219px;"
                                             src="assets/img/usama-akram-g3CMh2nqj_w-unsplash.jpg">
                                        <a class="btn btn-secondary" type="button" style="min-width: 100%;" href="P.airmax95.php">
                                            RESERVER
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 offset-sm-0">
                                <div class="card">
                                    <div class="card-body text-center"
                                         style="border-width: 0px !important;background: #eaeaea;border-radius: 15px;margin-bottom: 10px;height: 282px;">
                                        <img style="width: 93%;height: 219px;"
                                             src="assets/img/usama-akram-s-gYAbQToXk-unsplash.jpg">
                                        <a class="btn btn-secondary" type="button" style="min-width: 100%;" href="P.airmax95.php">
                                            RESERVER
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none"><a class="carousel-control-prev" href="#carousel-top-margin" role="button"
                                       data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span
                        class="visually-hidden">Previous</span></a><a class="carousel-control-next"
                                                                      href="#carousel-top-margin" role="button"
                                                                      data-bs-slide="next"><span
                        class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            </div>
        </div>
    </section>
    <section class="photo-gallery">
        <div class="container">
            <div class="intro"><h2 class="text-center">Lightbox Gallery</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh
                    erat, pellentesque ut laoreet vitae. </p></div>
            <div class="row photos" data-bss-baguettebox="">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/desk.jpg"><img class="img-fluid"
                                                                                                src="assets/img/desk.jpg"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/building.jpg"><img class="img-fluid"
                                                                                                    src="assets/img/building.jpg"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/loft.jpg"><img class="img-fluid"
                                                                                                src="assets/img/loft.jpg"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/building.jpg"><img class="img-fluid"
                                                                                                    src="assets/img/building.jpg"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/loft.jpg"><img class="img-fluid"
                                                                                                src="assets/img/loft.jpg"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/desk.jpg"><img class="img-fluid"
                                                                                                src="assets/img/desk.jpg"></a>
                </div>
            </div>
        </div>
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
    <section></section>
    <section></section>
</header>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
<script src="assets/js/script.min.js"></script>
</body>
</html>
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
<div class="d-flex"
     style="background: rgba(150,100,100,0);width: 100%;height: 468px;padding-bottom: 0px;margin-top: 173px;">
    <div style="background: rgba(255,255,255,0.86);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/Capture_d_écran_2022-03-14_111444-removebg-preview.png">
        </div>
        <div class="d-md-flex d-lg-flex d-xxl-flex align-items-md-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5
                class="d-md-flex d-lg-flex d-xxl-flex align-items-md-center align-items-lg-center"
                style="width: 100%;height: 100%;"><br><strong><em>Nike Air Max&nbsp;95&nbsp; &nbsp;179,99€</em></strong><br><br><br><br><br>
        </h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;"><a class="btn btn-primary d-lg-flex justify-content-lg-center align-items-lg-center"
                                     role="button"
                                     style="width: 89%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);"
                                     href="P.airmax95.php">Reservez</a></div>
    </div>
    <div style="background: rgba(255,255,255,0.86);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary d-sm-flex align-items-sm-center justify-content-xxl-center" type="button"
                    style="width: 88%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.86);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 88%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.86);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 88%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
</div>
<div class="d-flex"
     style="background: rgba(150,100,100,0);width: 100%;height: 468px;padding-bottom: 0px;margin-top: 173px;">
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img class="d-flex"
                                                                                   style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-lg-flex d-xxl-flex justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-lg-flex d-xxl-flex justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-lg-flex d-xxl-flex justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
</div>
<div class="d-flex"
     style="background: rgba(150,100,100,0);width: 100%;height: 468px;padding-bottom: 0px;margin-top: 173px;">
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
</div>
<div class="d-flex"
     style="background: rgba(150,100,100,0);width: 100%;height: 468px;padding-bottom: 0px;margin-top: 173px;">
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
</div>
<div class="d-flex"
     style="background: rgba(150,100,100,0);width: 100%;height: 468px;padding-bottom: 0px;margin-top: 173px;">
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
    <div style="background: rgba(255,255,255,0.74);width: 100%;height: 100%;margin: 4px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="height: 79%;margin: 0px;background: rgba(255,255,255,0);"><img style="width: 93%;height: 93%;"
                                                                                   src="assets/img/1a.png"></div>
        <div class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
             style="background: #9b7e7e;width: 100%;height: 50px;padding-left: 5px;padding-top: 5px;"><h5>Chausure nike
            150$</h5></div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
             style="height: 10%;">
            <button class="btn btn-primary" type="button"
                    style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                Reservez
            </button>
        </div>
    </div>
</div>
<div style="width: 100%;height: 40px;"></div>
<footer class="footer-basic">
    <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
            class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i
            class="icon ion-social-facebook"></i></a></div>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Home</a></li>
        <li class="list-inline-item"><a href="#">Services</a></li>
        <li class="list-inline-item"><a href="#">About</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
    </ul>
    <p class="copyright">Company Name © 2022</p></footer>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
<script src="assets/js/script.min.js"></script>
</body>
</html>
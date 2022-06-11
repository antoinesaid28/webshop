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
                    <div class="dropdown-menu"><a class="dropdown-item" href="connexion.php">Se deconnecter</a></div>
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
<div class="container">
    <div class="row">
        <div class="col-md-8" style="padding-top: 19px;">
            <div class="simple-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center swiper-slide"
                             style="background: rgb(255,255,255);"><img style="width: 100%;height: 100%;"
                                                                        src="assets/img/Capture_d_écran_2022-03-14_111444-removebg-preview.png">
                        </div>
                        <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center swiper-slide"
                             style="background: rgb(255,255,255);"><img style="width: 100%;height: 100%;"
                                                                        src="assets/img/Capture_d_écran_2022-03-14_124748-removebg-preview.png">
                        </div>
                        <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center swiper-slide"
                             style="background: rgb(255,255,255);"><img style="width: 100%;height: 100%;"
                                                                        src="assets/img/Capture_d_écran_2022-03-14_124815-removebg-preview.png">
                        </div>
                        <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center swiper-slide"
                             style="background: rgb(255,255,255);"><img style="width: 100%;height: 100%;"
                                                                        src="assets/img/Capture_d_écran_2022-03-14_124930-removebg-preview.png">
                        </div>
                        <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center swiper-slide"
                             style="background: rgb(255,255,255);"><img style="width: 100%;height: 100%;"
                                                                        src="assets/img/Capture_d_écran_2022-03-14_125002-removebg-preview.png">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="padding-top: 19px;">
            <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                 style="width: 100%;height: 100px;background: #ffffff;"><h1
                    class="d-flex d-sm-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xxl-center align-items-xxl-center"
                    style="width: 100%;height: 100%;color: rgb(61,83,105);"><br><strong><em>Nike Air
                Max&nbsp;95</em></strong><br><br></h1></div>
            <div class="d-sm-flex d-xxl-flex justify-content-sm-center align-items-sm-center"
                 style="width: 100%;height: 44px;background: #ffffff;"><h2
                    class="d-flex d-sm-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xxl-center align-items-xxl-center"
                    style="width: 100%;height: 106%;color: rgb(52,83,115);"><em>179,99</em><br>€<br><br></h2></div>
            <div class="d-xxl-flex" style="width: 100%;height: 110px;background: #ffffff;"><h6
                    class="d-xxl-flex justify-content-xxl-center"
                    style="width: 100%;height: 100%;padding-top: 0px;padding-left: 13px;">Details Du Produit :<br>Couleur
                affichée : Noir/Volt/Bleu cristal/Cramoisi&nbsp;<br><br></h6></div>
            <div class="d-flex d-xxl-flex" style="width: 100%;height: 49px;background: #ffffff;">
                <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center"
                     style="background: rgba(241,11,11,0);width: 50%;height: 47px;"><select>
                    <option value="Selection Taille" selected="">Selection Taille</option>
                    <option value="EU 38">EU 38</option>
                    <option value="EU 38.5">EU 38.5</option>
                    <option value="EU 39">EU 39</option>
                    <option value="EU 40">EU 40</option>
                    <option value="EU 41">EU 41</option>
                    <option value="EU 42">EU 42</option>
                    <option value="EU 43">EU 43</option>
                    <option value="EU 44">EU 44</option>
                    <option value="EU 45">EU 45</option>
                </select></div>
                <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center"
                     style="background: rgba(241,11,11,0);width: 50%;height: 47px;"><input type="number" min="0"
                                                                                           max="1000"
                                                                                           placeholder="Quantité"></div>
            </div>
            <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                 style="background: #ffffff;width: 100%;height: 51px;">
                <button class="btn btn-primary" type="button"
                        style="width: 50%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                    Reservez
                </button>
            </div>
            <div class="d-flex" style="width: 100%;height: 43px;background: #ffffff;">
                <div class="d-flex d-sm-flex d-md-flex d-xxl-flex"
                     style="width: 50%;background: rgba(210,16,16,0);padding-left: 12px;"><h5
                        style="padding-left: 0px;"><em>Avis</em></h5></div>
                <div class="d-flex d-sm-flex d-md-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-xxl-center align-items-xxl-center"
                     style="width: 50%;background: rgba(210,16,16,0);"><i class="fa fa-star"
                                                                          style="color: rgb(255,184,0);"></i><i
                        class="fa fa-star" style="color: rgb(252,197,1);"></i><i class="fa fa-star"
                                                                                 style="color: rgb(252,197,1);"></i><i
                        class="fa fa-star" style="color: rgb(252,197,1);"></i><i class="fa fa-star-half"
                                                                                 style="color: rgb(252,197,1);"></i>
                </div>
            </div>
            <div style="width: 100%;height: 100px;background: #ffffff;">
                <div class="d-xxl-flex justify-content-xxl-start align-items-xxl-center"
                     style="width: 100%;background: rgba(171,133,133,0);height: 34px;"><i
                        class="fa fa-truck d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                        style="width: 10%;height: 100%;"></i><small class="form-text"
                                                                    style="color: rgb(0,0,0);"><strong>Livraison
                    Gratuit</strong></small></div>
                <div class="d-xxl-flex align-items-xxl-center"
                     style="width: 100%;height: 34px;background: rgba(171,133,133,0);"><i
                        class="fa fa-reply d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                        style="width: 10%;height: 100%;"></i><small class="form-text"
                                                                    style="color: rgb(0,0,0);"><strong>Retour Gratuit
                    sous 30 jours</strong></small></div>
                <div class="d-xxl-flex align-items-xxl-center"
                     style="width: 100%;height: 34px;background: rgba(171,133,133,0);"><i
                        class="icon ion-locked d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                        style="width: 10%;height: 100%;"></i><small class="form-text"
                                                                    style="color: rgb(0,0,0);"><strong>Paiement
                    Sécurisé</strong></small></div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex simple-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="d-flex swiper-slide" style="background: rgba(255,255,255,0);">
                <div style="background: #d09191;width: 389px;margin: 39px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
                         style="height: 79%;margin: 0px;background: rgba(255,255,255,0);width: 100%;"><img
                            style="width: 93%;height: 93%;" src="assets/img/1a.png"></div>
                    <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                         style="background: #f70f0f;width: 100%;height: 47px;"><h1
                            class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                            style="width: 100%;height: 100%;">Heading</h1></div>
                    <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="background: rgb(92,51,51);width: 100%;height: 42px;">
                        <button class="btn btn-primary" type="button"
                                style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                            Reservez
                        </button>
                    </div>
                </div>
                <div style="background: #d09191;width: 389px;margin: 39px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
                         style="height: 79%;margin: 0px;background: rgba(255,255,255,0);width: 100%;"><img
                            style="width: 93%;height: 93%;" src="assets/img/1a.png"></div>
                    <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                         style="background: #f70f0f;width: 100%;height: 47px;"><h1
                            class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                            style="width: 100%;height: 100%;">Heading</h1></div>
                    <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="background: #5c3333;width: 100%;height: 42px;">
                        <button class="btn btn-primary" type="button"
                                style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                            Reservez
                        </button>
                    </div>
                </div>
                <div style="background: #d09191;width: 389px;margin: 39px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
                         style="height: 79%;margin: 0px;background: rgba(255,255,255,0);width: 100%;"><img
                            style="width: 93%;height: 93%;" src="assets/img/1a.png"></div>
                    <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                         style="background: #f70f0f;width: 100%;height: 47px;"><h1
                            class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                            style="width: 100%;height: 100%;">Heading</h1></div>
                    <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="background: #5c3333;width: 100%;height: 42px;">
                        <button class="btn btn-primary" type="button"
                                style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                            Reservez
                        </button>
                    </div>
                </div>
            </div>
            <div class="d-flex swiper-slide" style="background: rgba(255,255,255,0);">
                <div style="background: #d09191;width: 389px;margin: 39px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
                         style="height: 79%;margin: 0px;background: rgba(255,255,255,0);width: 100%;"><img
                            style="width: 93%;height: 93%;" src="assets/img/1a.png"></div>
                    <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                         style="background: #f70f0f;width: 100%;height: 47px;"><h1
                            class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                            style="width: 100%;height: 100%;">Heading</h1></div>
                    <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="background: #5c3333;width: 100%;height: 42px;">
                        <button class="btn btn-primary" type="button"
                                style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                            Reservez
                        </button>
                    </div>
                </div>
                <div style="background: #d09191;width: 389px;margin: 39px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
                         style="height: 79%;margin: 0px;background: rgba(255,255,255,0);width: 100%;"><img
                            style="width: 93%;height: 93%;" src="assets/img/1a.png"></div>
                    <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                         style="background: #f70f0f;width: 100%;height: 47px;"><h1
                            class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                            style="width: 100%;height: 100%;">Heading</h1></div>
                    <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="background: #5c3333;width: 100%;height: 42px;">
                        <button class="btn btn-primary" type="button"
                                style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                            Reservez
                        </button>
                    </div>
                </div>
                <div style="background: #d09191;width: 389px;margin: 39px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
                         style="height: 79%;margin: 0px;background: rgba(255,255,255,0);width: 100%;"><img
                            style="width: 93%;height: 93%;" src="assets/img/1a.png"></div>
                    <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                         style="background: #f70f0f;width: 100%;height: 47px;"><h1
                            class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                            style="width: 100%;height: 100%;">Heading</h1></div>
                    <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="background: #5c3333;width: 100%;height: 42px;">
                        <button class="btn btn-primary" type="button"
                                style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                            Reservez
                        </button>
                    </div>
                </div>
            </div>
            <div class="d-flex swiper-slide" style="background: rgba(255,255,255,0);">
                <div style="background: #d09191;width: 389px;margin: 39px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
                         style="height: 79%;margin: 0px;background: rgba(255,255,255,0);width: 100%;"><img
                            style="width: 93%;height: 93%;" src="assets/img/1a.png"></div>
                    <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                         style="background: #f70f0f;width: 100%;height: 47px;"><h1
                            class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                            style="width: 100%;height: 100%;">Heading</h1></div>
                    <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="background: #5c3333;width: 100%;height: 42px;">
                        <button class="btn btn-primary" type="button"
                                style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                            Reservez
                        </button>
                    </div>
                </div>
                <div style="background: #d09191;width: 389px;margin: 39px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
                         style="height: 79%;margin: 0px;background: rgba(255,255,255,0);width: 100%;"><img
                            style="width: 93%;height: 93%;" src="assets/img/1a.png"></div>
                    <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                         style="background: #f70f0f;width: 100%;height: 47px;"><h1
                            class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                            style="width: 100%;height: 100%;">Heading</h1></div>
                    <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="background: #5c3333;width: 100%;height: 42px;">
                        <button class="btn btn-primary" type="button"
                                style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                            Reservez
                        </button>
                    </div>
                </div>
                <div style="background: #d09191;width: 389px;margin: 39px;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;">
                    <div class="d-flex d-sm-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center"
                         style="height: 79%;margin: 0px;background: rgba(255,255,255,0);width: 100%;"><img
                            style="width: 93%;height: 93%;" src="assets/img/1a.png"></div>
                    <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                         style="background: #f70f0f;width: 100%;height: 47px;"><h1
                            class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                            style="width: 100%;height: 100%;">Heading</h1></div>
                    <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="background: #5c3333;width: 100%;height: 42px;">
                        <button class="btn btn-primary" type="button"
                                style="width: 90%;height: 100%;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;background: rgba(75,191,115,0.71);color: rgb(0,0,0);">
                            Reservez
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
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
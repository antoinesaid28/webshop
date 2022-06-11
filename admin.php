<?php
require('connect.php');



session_start();
require_once 'connect.php'; // ajout connexion bdd
// si la session existe pas soit si l'on est pas connecté on redirige
if (!isset($_SESSION['userA'])) {
    header('Location:indexe.php');
    die();
}
require('ajouterProduit.php');
require('suppression.php');





?>
<!DOCTYPE html>
<html lang="fr" style="background: var(--bs-gray-900); color: var(--bs-gray-900)">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>SNEAKER SHOP</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" />
  <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/fonts/ionicons.min.css" />
  <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css" />
  <!-- <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css" /> -->
  <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css" />
  <!--<link rel="stylesheet" href="assets/css/Footer-Basic.css" />-->
  <link rel="stylesheet" href="assets/css/Header-Blue.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css" />
  <link rel="stylesheet" href="assets/css/Login-Form-Dark.css" />
  <link rel="stylesheet" href="assets/css/Ludens---Dark-Mode-Admin-Dashboard.css" />
  <link rel="stylesheet" href="assets/css/Map-Clean.css" />
  <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css" />
  <link rel="stylesheet" href="assets/css/Responsive-Product-Slider.css" />
  <link rel="stylesheet" href="assets/css/Simple-Slider.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="stylesheet" href="assets/css/moncss.css" />
  <link rel="stylesheet" href="assets/css/Tamplate-SB-Admin-on-BSS.css" />
</head>

<body style="color: var(--bs-indigo); background: var(--bs-gray-900)">



  <div id="wrapper" style="background: var(--bs-gray-900)">
    <div class="d-flex flex-column" id="content-wrapper" style="background: #2d2f3e">
      <div id="content" style="color: #2d2f3e; background: var(--bs-gray-900)">
        <nav class="navbar navbar-light navbar-expand shadow d-xl-flex justify-content-xl-start mb-4 topbar static-top" style="background: #1f232d">
          <div class="container-fluid">
            <button class="btn btn-light d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
              <i class="fas fa-bars"></i>
            </button>
            <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion p-0" type="button"  style="
                  background: linear-gradient(90deg, #232732 0%, #1f232d 100%);
                ">
              <div class="container-fluid d-flex flex-column p-0">
                <img src="assets/img/SNEAKER_SHOP_Logo_-_Original_-_5000x5000-removebg-preview.png" style="width: 103px" />
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.html">
                  <div class="sidebar-brand-icon">
                    <a class="navbar-brand" href="index.html"></a>
                  </div>
                </a>
              </div>
            </nav>
            <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input class="bg-light form-control form-control-sm d-xl-flex border-0 small" type="text" placeholder="Search for ..." style="
                      margin-left: 100px;
                      padding-left: 133px;
                      padding-right: 125px;
                    " /><button class="btn btn-primary py-0" type="button">
                  <i class="fas fa-search"></i>
                </button>
              </div>

            </form>

            <ul class="navbar-nav flex-nowrap ms-auto">
              <li class="nav-item dropdown d-sm-none no-arrow">
                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="me-auto navbar-search w-100">
                    <div class="input-group">
                      <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..." />
                      <div class="input-group-append">
                        <button class="btn btn-primary py-0" type="button">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow">
                  <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                    <h6 class="dropdown-header">alerts center</h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="me-3">
                        <div class="bg-primary icon-circle">
                          <i class="fas fa-file-alt text-white"></i>
                        </div>
                      </div>
                      <div>
                        <span class="small text-gray-500">December 12, 2019</span>
                        <p>A new monthly report is ready to download!</p>
                      </div>
                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="me-3">
                        <div class="bg-success icon-circle">
                          <i class="fas fa-donate text-white"></i>
                        </div>
                      </div>
                      <div>
                        <span class="small text-gray-500">December 7, 2019</span>
                        <p>$290.29 has been deposited into your account!</p>
                      </div>
                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="me-3">
                        <div class="bg-warning icon-circle">
                          <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                      </div>
                      <div>
                        <span class="small text-gray-500">December 2, 2019</span>
                        <p>
                          Spending Alert: We've noticed unusually high
                          spending for your account.
                        </p>
                      </div>
                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow">
                  <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                    <h6 class="dropdown-header">alerts center</h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image me-3">
                        <img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg" />
                        <div class="bg-success status-indicator"></div>
                      </div>
                        <a class="forgot" href="admin.php">Admin</a>
                      <div class="fw-bold">
                        <div class="text-truncate">
                          <span>Hi there! I am wondering if you can help me with
                            a problem I've been having.</span>
                        </div>
                        <p class="small text-gray-500 mb-0">
                          Emily Fowler - 58m
                        </p>
                      </div>
                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image me-3">
                        <img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg" />
                        <div class="status-indicator"></div>
                      </div>
                      <div class="fw-bold">
                        <div class="text-truncate">
                          <span>I have the photos that you ordered last
                            month!</span>
                        </div>
                        <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                      </div>
                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image me-3">
                        <img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg" />
                        <div class="bg-warning status-indicator"></div>
                      </div>
                      <div class="fw-bold">
                        <div class="text-truncate">
                          <span>Last month's report looks great, I am very happy
                            with the progress so far, keep up the good
                            work!</span>
                        </div>
                        <p class="small text-gray-500 mb-0">
                          Morgan Alvarez - 2d
                        </p>
                      </div>
                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image me-3">
                        <img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg" />
                        <div class="bg-success status-indicator"></div>
                      </div>
                      <div class="fw-bold">
                        <div class="text-truncate">
                          <span>Am I a good boy? The reason I ask is because
                            someone told me that people say this to all dogs,
                            even if they aren't good...</span>
                        </div>
                        <p class="small text-gray-500 mb-0">
                          Chicken the Dog · 2w
                        </p>
                      </div>
                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                  </div>
                </div>
                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
              </li>
              <div class="d-none d-sm-block topbar-divider"></div>
              <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow">
                  <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-100 small"style="color: rgb(254,248,248);">Admnistrateur : Mr <?= $_SESSION["userA"];?></span>
                      <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg" /></a>
                  <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">

                  </div>
                    <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Se deconnecter</a>
                    <a class="forgot" href="inscriptionAdmine.php">Inscription Admin</a>
                </div>

              </li>
            </ul>
          </div>
        </nav>
        <h3 class="text-white mb-4">Membres</h3>
        <div class="container-fluid" style="margin-bottom: 50px">
          <div class="card" id="TableSorterCard" style="border-style: none; border-radius: 6.5px">
            <div class="card-header py-3" style="border-width: 0px; background: rgb(23, 25, 33)">
              <div class="row table-topper align-items-center">
                <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px; padding: 5px 15px">
                  <p class="m-0 fw-bold" style="color: rgb(255, 255, 255)">
                    Liste des membres
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="table-responsive" style="border-top-style: none; background: #171921">
                  <table class="table table-striped table tablesorter" id="ipi-table">
                    <thead class="thead-dark" style="
                          background: rgb(33, 37, 48);
                          border-width: 0px;
                          border-color: rgb(0, 0, 0);
                          border-bottom-color: #21252f;
                          color: white;
                        ">
                      <tr style="
                            border-style: none;
                            border-color: rgba(255, 255, 255, 0);
                            background: #21252f;
                          ">
                        <th class="text-center">ID</th>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Prenom</th>
                        <th class="text-center">Mail</th>
                        <th class="text-center filter-false sorter-false">
                          Actions
                        </th>
                      </tr>
                    </thead>
                    <tbody class="text-center" style="border-top-width: 0px ;">
                      <?php
                      $recup_membre = $pdo->query('SELECT * FROM membre');



                      while ($user = $recup_membre->fetch()) {
                      ?>

                        <tr style="background: #262a38">
                          <td style="color: rgb(255, 255, 255)"><?= $user['id']; ?> </td>
                          <td style="color: rgb(255, 255, 255)"><?= $user['nom']; ?> </td>
                          <td style="color: rgb(255, 255, 255)"><?= $user['prenom']; ?> </td>
                          <td style="color: rgb(255, 255, 255)"><?= $user['mail']; ?> </td>
                          <td class="text-center align-middle" style="max-height: 60px; height: 60px">
                            <a class="btn btnMaterial btn-flat primary semicircle" role="button" href="#" style="color: #00bdff">
                              <i class="far fa-eye"></i></a>
                            <a class="btn btnMaterial btn-flat success semicircle" role="button" href="#" style="color: rgb(0, 197, 179)">
                              <i class="fas fa-pen"></i></a>

                            <a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" style="margin-left: 5px" href="admin.php?supprime=<?= $user['id'] ?>">

                              <i class="fas fa-trash btnNoBorders" style="color: #dc3545"></i></a>


                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"></a>
  </div>
  <div id="content-1" style="color: #2d2f3e">
    <div class="container-fluid" style="margin-bottom: 50px; background: var(--bs-gray-900)">
      <div class="row" style="background: var(--bs-gray-900)">
        <div class="col-12 col-sm-6 col-md-6">
          <h3 class="text-white mb-4" style="color: var(--bs-gray-900); background: var(--bs-gray-900)">
            Réservations
          </h3>
        </div>
      </div>
      <div class="card" id="TableSorterCard-1" style="border-style: none; border-radius: 6.5px">
        <div class="card-header py-3" style="border-width: 0px; background: rgb(23, 25, 33)">
          <div class="row table-topper align-items-center">
            <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px; padding: 5px 15px">
              <p class="m-0 fw-bold" style="color: rgb(255, 255, 255)">
                liste de réservation
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12" style="background: var(--bs-gray-900)">
            <div class="table-responsive" style="border-top-style: none; background: #171921">
              <table class="table table-striped table tablesorter" id="ipi-table">
                <thead class="thead-dark" style="
                      background: rgb(33, 37, 48);
                      border-width: 0px;
                      border-color: rgb(0, 0, 0);
                      border-bottom-color: #21252f;
                      color: white;
                    ">
                  <tr style="
                        border-style: none;
                        border-color: rgba(255, 255, 255, 0);
                        background: #21252f;
                      ">
                    <th class="text-center">Produit</th>
                    <th class="text-center">Client</th>
                    <th class="text-center">Prix</th>
                    <th class="text-center">Statut</th>
                    <th class="text-center">Quantite</th>
                    <th class="text-center filter-false sorter-false">
                      Actions
                    </th>
                  </tr>
                </thead>
                <tbody class="text-center" style="border-top-width: 0px">
                  <tr style="background: #262a38">
                    <td style="color: rgb(255, 255, 255)">Ana</td>
                    <td style="color: rgb(255, 255, 255)">Diseñador</td>
                    <td style="color: rgb(255, 255, 255)">Diseño</td>
                    <td style="color: rgb(255, 255, 255)">Ana</td>
                    <td style="color: rgb(255, 255, 255)">Ana</td>
                    <td class="text-center align-middle" style="max-height: 60px; height: 60px">
                      <a class="btn btnMaterial btn-flat primary semicircle" role="button" href="#" style="color: #00bdff"><i class="far fa-eye"></i></a><a class="btn btnMaterial btn-flat success semicircle" role="button" href="#" style="color: rgb(0, 197, 179)"><i class="fas fa-pen"></i></a><a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px" data-bs-toggle="modal" data-bs-target="#delete-modal" href="#"><i class="fas fa-trash btnNoBorders" style="color: #dc3545"></i></a>
                    </td>
                  </tr>
                  <tr style="background: #212430">
                    <td style="color: rgb(255, 255, 255)">Fer<br /></td>
                    <td style="color: rgb(255, 255, 255)">Desarrollador</td>
                    <td style="color: rgb(255, 255, 255)">Development</td>
                    <td style="color: rgb(255, 255, 255)">Development</td>
                    <td style="color: rgb(255, 255, 255)">Development</td>
                    <td class="text-center align-middle" style="max-height: 60px; height: 60px">
                      <a class="btn btnMaterial btn-flat primary semicircle" role="button" href="#" style="color: #00bdff"><i class="far fa-eye"></i></a><a class="btn btnMaterial btn-flat success semicircle" role="button" href="#" style="color: rgb(0, 197, 179)"><i class="fas fa-pen"></i></a><a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px" data-bs-toggle="modal" data-bs-target="#delete-modal" href="#"><i class="fas fa-trash btnNoBorders" style="color: #dc3545"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="content-2" style="color: #2d2f3e">
    <div class="container-fluid" style="margin-bottom: 50px; background: var(--bs-gray-900)">
      <div class="row" style="background: var(--bs-gray-900)">
        <div class="col-12 col-sm-6 col-md-6">
          <h3 class="text-white mb-4" style="color: var(--bs-gray-900); background: var(--bs-gray-900)">
            Produits
          </h3>
        </div>
          <form id="modal-open" method="post" action="ajouterNouvauProduit.php">
              <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header"><h4>Ajouter Produits</h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body"><p>Nom du Produit</p><input type="text" name="nomp" style="width: 100%;"></div>
                          <p style="width: 466px;margin-left: 16px;">Image du Produit</p>
                          <section>
                              <div class="container-fluid">
                                  <div class="row">
                                      <div class="col-sm-12 col-md-8 col-lg-8 offset-sm-0 offset-md-2"
                                           style="width: 315px;margin-left: -4px;">
                                          <div class="file-upload-wrapper">
                                              <div class="view file-upload"
                                                   style="padding-bottom: 7px;padding-right: 4px;height: 43px;width: 329px;">
                                                  <input type="file" id="input-file-now" name="imagep" class="file_upload"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </section>
                          <p style="width: 466px;margin-left: 16px;">Catégorie du Produit</p><select name="categorie"
                                  style="height: 37.2px;margin-left: 18px;margin-right: 11px;">
                              <optgroup label="Catégorie du Produit" >
                                  <option value="Homme" selected="">Homme</option>
                                  <option value="Femme">Femme</option>
                              </optgroup>
                          </select>
                          <p style="width: 466px;margin-left: 16px;">Commentaire du Produit</p><textarea
                                  style="margin-left: 18px;margin-right: 11px;" name="commentaire"></textarea>
                          <p style="width: 466px;margin-left: 16px;">Description du Produit</p><textarea
                                  style="margin-left: 18px;margin-right: 11px;" name="descriptionp"></textarea>
                          <p style="width: 466px;margin-left: 16px;">Prix du Produit</p><input type="number" name="prix"
                                                                                               style="margin-left: 19px;margin-right: 11px;">
                          <p style="width: 466px;margin-left: 16px;">Quantité du Produit</p><input type="number" name="quantite"
                                                                                                   style="margin-left: 19px;margin-right: 11px;">
                          <div class="modal-footer">
                              <button class="btn btn-warning" style="background: rgb(10,135,188);" type="submit"
                                      data-bs-dismiss="modal">Ajouter
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
              <button class="btn btn-warning" type="button" data-bs-toggle="modal"data-bs-target="#exampleModal" style="width: 243.45px; height: 44px">
              <i class="fa fa-plus">
              </i>&nbsp;Ajouter un nouveau produit
               </button>
              <script src="assets/bootstrap/js/bootstrap.min.js"></script>
              <script src="assets/js/script.min.js"></script>

          </form>
        <!--     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Nouveau Produit</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  input
                  <div class="container">
                    <div>
                      <form method="$_POST" action="">
                        <div class="form-group mb-3">
                          <div id="formdiv">
                            <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                              <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 24px;"><strong>Nom</strong></p>
                              </div>
                              <div class="col-md-10 offset-md-1"><input class="form-control" type="text" style="margin-left: 0px;font-family: Roboto, sans-serif;" name="nomp" placeholder="nom" required /></div>
                            </div>
                            <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                              <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 24px;"><strong>Image</strong></p>
                              </div>
                              <div class="col-md-10 offset-md-1"><textarea class="form-control" style="font-family: Roboto, sans-serif;" placeholder="Image" name="imagep" required></textarea></div>
                            </div>
                            <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;margin-top: -16px;">
                              <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 24px;"><strong>Catégorie</strong></p>
                              </div>
                              <div class="col-md-10 offset-md-1"><select class="form-select" style="font-family: Roboto, sans-serif;" name="categorie">
                                  <optgroup label="Categorie">
                                    <option value>Homme</option>
                                    <option value>Femme</option>
                                  </optgroup>
                                </select></div>
                            </div>
                            <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                              <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 24px;"><strong>Commentaire</strong></p>
                              </div>
                              <div class="col-md-10 offset-md-1"><textarea class="form-control" style="font-family: Roboto, sans-serif;" placeholder="commentaire" name="commentaire" required></textarea></div>
                            </div>
                            <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                              <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 24px;"><strong>Description</strong></p>
                              </div>
                              <div class="col-md-10 offset-md-1"><textarea class="form-control" style="font-family: Roboto, sans-serif;font-size: 14px;" placeholder="description" name="descriptionp" required></textarea></div>
                            </div>
                            <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                              <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 24px;"><strong>Prix</strong></p>
                              </div>
                              <div class="col-md-10 offset-md-1"><input class="form-control" type="number" name="prix" required /></div>
                            </div>
                            <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                              <div class="col-12 col-md-4 offset-md-4">
                                <button class="btn btn-primary" style="margin-left: 16px;" type="submit" name="enregistrer">Enregistrer </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>  input
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quitter</button>
                </div>
              </div>
            </div>
          </div>-->



      </div>
    </div>
    <div class="card" id="TableSorterCard-2" style="border-style: none; border-radius: 6.5px">
      <div class="card-header py-3" style="border-width: 0px; background: rgb(23, 25, 33)">
        <div class="row table-topper align-items-center">
          <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px; padding: 5px 15px">
            <p class="m-0 fw-bold" style="color: rgb(255, 255, 255)">
              liste des produits
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12" style="background: var(--bs-gray-900)">
          <div class="table-responsive" style="border-top-style: none; background: #171921">
            <table class="table table-striped table tablesorter" id="ipi-table">
              <thead class="thead-dark" style="
                      background: rgb(33, 37, 48);
                      border-width: 0px;
                      border-color: rgb(0, 0, 0);
                      border-bottom-color: #21252f;
                      color: white;
                    ">
                <tr style="
                        border-style: none;
                        border-color: rgba(255, 255, 255, 0);
                        background: #21252f;
                      ">
                  <th class="text-center">Nom</th>
                  <th class="text-center">Catégorrie</th>
                  <th class="text-center">Description</th>
                  <th class="text-center">Prix</th>
                  <th class="text-center">Quantité</th>
                  <th class="text-center">Photo</th>
                  <th class="text-center filter-false sorter-false">
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody class="text-center" style="border-top-width: 0px">
                <?php
                $recup_produit = $pdo->query('SELECT * FROM produits');

                while ($prod = $recup_produit->fetch()) {
                ?>

                  <tr style="background: #262a38">
                    <td style="color: rgb(255, 255, 255)"><?= $prod['nomp']; ?></td>
                    <td style="color: rgb(255, 255, 255)"><?= $prod['categorie']; ?></td>
                    <td style="color: rgb(255, 255, 255)"><?= $prod['descriptionp']; ?></td>
                    <td style="color: rgb(255, 255, 255)"><?= $prod['prix']; ?>€</td>
                    <td style="color: rgb(255, 255, 255)"><?= $prod['quantite']; ?></td>

                    <td style="color: rgb(255, 255, 255)">
                      <img id="basketshoes" src=" <?= $prod['imagep']; ?>" alt="photo chaussure">
                    </td>
                    <td class="text-center align-middle" style="max-height: 60px; height: 60px">
                      <a class="btn btnMaterial btn-flat primary semicircle" role="button" href="#" style="color: #00bdff"><i class="far fa-eye"></i></a>
                      <a class="btn btnMaterial btn-flat success semicircle" role="button" href="#" style="color: rgb(0, 197, 179)"><i class="fas fa-pen"></i></a>
                      <a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" style="margin-left: 5px" href="admin.php?supprimep=<?= $prod['id']; ?>"><i class="fas fa-trash btnNoBorders" style="color: #dc3545"></i></a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer class="bg-white sticky-footer" style="background: linear-gradient(#1f232d 0%, #1f232d 100%)">
    <div class="container my-auto">
      <div class="text-center my-auto copyright text-gray-100" style="font-size: 13.5px">
        <span>Copyright © Ludens&nbsp;<span id="year">2022</span></span>
      </div>
    </div>
  </footer>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
  <script src="assets/js/Lightbox-Gallery.js"></script>
  <script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard-1.js"></script>
  <script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard-2.js"></script>
  <script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard-3.js"></script>
  <script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard-4.js"></script>
  <script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard-5.js"></script>
  <script src="assets/js/Ludens---Dark-Mode-Admin-Dashboard.js"></script>
  <script src="assets/js/Simple-Slider.js"></script>
  <script src="../../Jquery/prettify.js"></script>
</body>

</html>
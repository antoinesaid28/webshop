<?php
session_start();
require('connect.php');



if (isset($_POST['ajouter'])) {
  //var_dump($_POST);
  $nomp = ($_POST['nomp']);
  $imagep = ($_POST['imagep']);
  $categorie = ($_POST['categorie']);
  $commentaire = nl2br($_POST['commentaire']);
  $descriptionp = nl2br($_POST['descriptionp']);
  $prix = $_POST['prix'];
  $quantite = $_POST['quantite'];



  //$sql = "INSERT INTO produits (nomp,imagep,categorie, commentaire,descriptionp,prix) values ('$nomp', '$imagep', '$categorie', '$commentaire', '$descriptionp', '$prix')";

    $stmt = $pdo->prepare("insert into produits (nomp,imagep,categorie, commentaire,descriptionp,prix,quantite) values (?,?,?,?,?,?,?)");
    $stmt->bindParam(1,$nomp);
    $stmt->bindParam(2,$imagep);
    $stmt->bindParam(3,$categorie);
    $stmt->bindParam(4,$commentaire);
    $stmt->bindParam(5,$descriptionp);
    $stmt->bindParam(6,$prix);
    $stmt->bindParam(7,$quantite);
    $stmt->execute();

  //$resultat = mysqli_query($connexion, $sql);
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>nouveau produit</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />


</head>

<body>
  <div>
    <h1>AJOUTER NOUVEAU PRODUIT</h1>
  </div>
  <div class="container">
    <div>
      <form method="POST" action="">
        <div class="form-group mb-3">
          <div id="formdiv">
            <div class="row" style="margin-right: 0px; margin-left: 0px; padding-top: 24px">
              <div class="col-md-8 offset-md-1">
                <p style="
                      margin-left: 2%;
                      font-family: Roboto, sans-serif;
                      font-size: 24px;
                    ">
                  <strong>Nom</strong>
                </p>
              </div>
              <div class="col-md-10 offset-md-1">
                <input class="form-control" type="text" style="margin-left: 0px; font-family: Roboto, sans-serif" name="nomp" placeholder="Name" />
              </div>
            </div>
            <div class="row" style="margin-right: 0px; margin-left: 0px; padding-top: 24px">
              <div class="col-md-8 offset-md-1">
                <p style="
                      margin-left: 2%;
                      font-family: Roboto, sans-serif;
                      font-size: 24px;
                    ">
                  <strong>Image</strong>
                </p>
              </div>
              <div class="col-md-10 offset-md-1">
                  <input type="file" name="imagep">
                <textarea class="form-control" style="font-family: Roboto, sans-serif" placeholder="Image" ></textarea>
              </div>
            </div>
            <div class="row" style="
                  margin-right: 0px;
                  margin-left: 0px;
                  padding-top: 24px;
                  margin-top: -16px;
                ">
              <div class="col-md-8 offset-md-1">
                <p style="
                      margin-left: 2%;
                      font-family: Roboto, sans-serif;
                      font-size: 24px;
                    ">
                  <strong>Catégorie</strong>
                </p>
              </div>
              <div class="col-md-10 offset-md-1">
                <select class="form-select" style="font-family: Roboto, sans-serif" name="categorie">
                  <optgroup label="Categorie">
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class="row" style="margin-right: 0px; margin-left: 0px; padding-top: 24px">
              <div class="col-md-8 offset-md-1">
                <p style="
                      margin-left: 2%;
                      font-family: Roboto, sans-serif;
                      font-size: 24px;
                    ">
                  <strong>Commentaire</strong>
                </p>
              </div>
              <div class="col-md-10 offset-md-1">
                <textarea class="form-control" style="font-family: Roboto, sans-serif" placeholder="commentaire" name="commentaire"></textarea>
              </div>
            </div>
            <div class="row" style="margin-right: 0px; margin-left: 0px; padding-top: 24px">
              <div class="col-md-8 offset-md-1">
                <p style="
                      margin-left: 2%;
                      font-family: Roboto, sans-serif;
                      font-size: 24px;
                    ">
                  <strong>Description</strong>
                </p>
              </div>
              <div class="col-md-10 offset-md-1">
                <textarea class="form-control" style="font-family: Roboto, sans-serif; font-size: 14px" placeholder="Description" name="descriptionp"></textarea>
              </div>
            </div>
            <div class="row" style="margin-right: 0px; margin-left: 0px; padding-top: 24px">
              <div class="col-md-8 offset-md-1">
                <p style="
                      margin-left: 2%;
                      font-family: Roboto, sans-serif;
                      font-size: 24px;
                    ">
                  <strong>Prix</strong>
                </p>
              </div>
              <div class="col-md-10 offset-md-1">
                <input class="form-control" type="number" name="prix" />
              </div>

            </div>
              <div class="row" style="margin-right: 0px; margin-left: 0px; padding-top: 24px">
                  <div class="col-md-8 offset-md-1">
                      <p style="
                      margin-left: 2%;
                      font-family: Roboto, sans-serif;
                      font-size: 24px;
                    ">
                          <strong>Quantité</strong>
                      </p>
                  </div>
                  <div class="col-md-10 offset-md-1">
                      <input class="form-control" type="number" name="quantite" />
                  </div>

              </div>
            <div class="row" style="margin-right: 0px; margin-left: 0px; padding-top: 24px">
              <div class="col-12 col-md-4 offset-md-4">

                <button class="btn btn-primary" style="margin-left: 16px" type="submit" name="ajouter">
                  Ajouter
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
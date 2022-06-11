<?php
require('connect.php');
if (isset($_POST['enregistrer'])) {
    $nomp = htmlspecialchars($_POST['nomp']);
    $imagep = htmlspecialchars($_POST['imagep']);
    $categorie = htmlspecialchars($_POST['categorie']);
    $commentaire = nl2br(htmlspecialchars($_POST['commentaire']));
    $descriptionp = nl2br(htmlspecialchars($_POST['descriptionp']));
    $prix = $_POST['prix'];

    $insertionProduit =  $pdo->prepare('INSERT INTO produits(nomp,imagep,categorie, commentaire,descriptionp,prix) VALUES(?,?,?, ?,?,?)');
    $insertionProduit->execute(array($nomp, $imagep, $categorie, $commentaire, $descriptionp, $prix));
    echo $nomp;
    echo $imagep;
}

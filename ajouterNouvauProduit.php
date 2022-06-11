<?php

session_start();
require_once('connect.php');





    $nomp = ($_POST['nomp']);
    $imagep = ($_POST['imagep']);
    $categorie = ($_POST['categorie']);
    $commentaire = nl2br($_POST['commentaire']);
    $descriptionp = nl2br($_POST['descriptionp']);
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];




    $stmt = $pdo->prepare("insert into produits (nomp,imagep,categorie, commentaire,descriptionp,prix,quantite) values (?,?,?,?,?,?,?)");
    $stmt->bindParam(1, $nomp);
    $stmt->bindParam(2, $imagep);
    $stmt->bindParam(3, $categorie);
    $stmt->bindParam(4, $commentaire);
    $stmt->bindParam(5, $descriptionp);
    $stmt->bindParam(6, $prix);
    $stmt->bindParam(7, $quantite);
    $stmt->execute();
header('Location: admin.php');
    echo "Enregistrement reussi avec succès";
    //$resultat = mysqli_query($connexion, $sql);




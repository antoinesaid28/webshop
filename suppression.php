<?php
require('connect.php');

// SUPRESSION DE MEMBRE
if (isset($_GET['supprime'])) {
    $supprime = $_GET['supprime'];

    $stmt = $pdo->prepare("DELETE FROM membre where id= ?");
    $stmt->bindParam(1, $supprime);
    $stmt->execute();
}

// SUPRESSION DE produit
if (isset($_GET['supprimep'])) {
    $supprimep = $_GET['supprimep'];

    $stmt = $pdo->prepare("DELETE FROM produits where id= ?");
    $stmt->bindParam(1, $supprimep);
    $stmt->execute();
}

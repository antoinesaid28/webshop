<?php

require_once "connect.php";
$nom = $_POST["nomA"];
$prenom = $_POST["prenomA"];
$mail = $_POST["emailA"];
$password = $_POST["passwordA"];

//conexion base de donnée

$options = [
    'cost' => 12,
];
$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt = $pdo->prepare("insert into admin (nom_Admin,prenom_Admin,mail_Admin,password_Admin) values(?,?,?,?) ");
    $stmt->bindParam(1,$nom);
    $stmt->bindParam(2,$prenom);
    $stmt->bindParam(3,$mail);
    $stmt->bindParam(4,$hashpass);
    $stmt->execute();


    echo "Enregistrement reussi avec succès";
header('Location: admin.php');
?>

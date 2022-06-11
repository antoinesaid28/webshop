<?php

require_once "connect.php";
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$checkbox = $_POST["checkbox"];
$age = $_POST["age"];
$telephone = $_POST["telephone"];
$adresse = $_POST["adresse"];
$email = $_POST["email"];
$password = $_POST["password"];

//conexion base de donnée

$options = [
    'cost' => 12,
];
$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt = $pdo->prepare("insert into membre(nom,prenom,sex,age,telephone,adresse,mail,password) values(?,?,?,?,?,?,?,?) ");
    $stmt->bindParam(1,$nom);
    $stmt->bindParam(2,$prenom);
    $stmt->bindParam(3,$checkbox);
    $stmt->bindParam(4,$age);
    $stmt->bindParam(5,$telephone);
    $stmt->bindParam(6,$adresse);
    $stmt->bindParam(7,$email);
    $stmt->bindParam(8,$hashpass);
    $stmt->execute();

    $stmt->closeCursor();
    echo "Enregistrement reussi avec succès";
header('Location: index.php');
?>

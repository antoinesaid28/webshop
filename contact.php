<?php
require_once "connect.php";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$stmt = $pdo->prepare("insert into contact(name,mail,commentaire) values(?,?,?) ");
$stmt->bindParam(1,$name);
$stmt->bindParam(2,$email);
$stmt->bindParam(3,$message);
$stmt->execute();

$stmt->closeCursor();
echo "Enregistrement reussi avec succès";

?>


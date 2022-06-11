<?php
session_start(); // Démarrage de la session
require_once 'connect.php'; // On inclut la connexion à la base de données

if (!empty($_POST['emailA']) && !empty($_POST['passwordA'])) // Si il existe les champs email, password et qu'il sont pas vident
{
    // Patch XSS
    $emailA = htmlspecialchars($_POST['emailA']);
    $passwordA = htmlspecialchars($_POST['passwordA']);

    $emailA = strtolower($emailA); // email transformé en minuscule

    // On regarde si l'utilisateur est inscrit dans la table utilisateurs
    $check = $pdo->prepare('SELECT prenom_Admin, mail_Admin, password_Admin FROM admin WHERE mail_Admin = ?');
    $check->execute(array($emailA));
    $data = $check->fetch();
    $row = $check->rowCount();


    // Si > à 0 alors l'utilisateur existe
    if ($row > 0) {
        // Si le mail est bon niveau format
        if (filter_var($emailA, FILTER_VALIDATE_EMAIL)) {
            // Si le mot de passe est le bon
            if (password_verify($passwordA, $data['password_Admin'])) {
                // On créer la session et on redirige sur landing.php
                $_SESSION['userA'] = $data['prenom_Admin'];
                header('Location: admin.php');
                die();
            } else {
                header('Location: indexe.php?login_err=password');
                die();
            }
        } else {
            header('Location: indexe.php?login_err=email');
            die();
        }
    } else {
        header('Location:indexe.php?login_err=already');
        die();
    }
} else {
    header('Location: indexe.php?');
    die();
} // si le formulaire est envoyé sans aucune données

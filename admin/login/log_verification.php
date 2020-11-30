<?php

require('../../bootstrap/init.php');

$username = $_POST['username'];
//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, password FROM log_admin WHERE user_name = :username');
$req->execute(array(
    'username' => $username));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

if (!$resultat)
{
    exit('Mauvais identifiant ou mot de passe !');
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['user_name'] = $username;
        $_SESSION['password'] = $_POST['password'];
    }
    else {
        exit('Mauvais identifiant ou mot de passe !');
    }
}

header('Location: /admin/index.php');

<?php

/** @var PDO $bdd */

// On vérifie si le champ Login n'est pas vide.
if (empty($_SESSION['user_name'])) // Si c'est le cas, le visiteur ne s'est pas loger et subit une redirection
{
    header('Location: /admin/login/login.php');
}

// Nous allons chercher le vrai mot de passe ( crypté ) de l'utilisateur connecté
// Cryptage du mot de passe donné par l'utilsateur à la connexion par requête SQL
$request = $bdd->prepare("SELECT user_name, password FROM log_admin WHERE id=?;");
$request->execute([$_SESSION['id']]);
$utilisateurTrouve = $request->fetch();

$utilisateurEstDifferent = $utilisateurTrouve['user_name'] !== $_SESSION['user_name'];
$motDePasseEstDifferent = password_verify($utilisateurTrouve["password"], $_SESSION["password"]);

if ($utilisateurEstDifferent || $motDePasseEstDifferent ) {
    exit("Données de session corrompues. <a href='/admin/disconnect.php'>Déconnecter</a>");
}
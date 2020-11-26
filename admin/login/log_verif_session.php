<?php
// Démarrage de la session
session_start();

// On vérifie si le champ Login n'est pas vide.
if ($_SESSION['Username']=='')
// Si c'est le cas, le visiteur ne s'est pas loger et subit une redirection
{ Header('Location:login.php');   }
else
{ echo "  <a href src='disconnect.php'> Se déconnecter </a> || Utilisateur: ". $_SESSION['Username'] ."";  }

// Test De vérification que l'user est bien dans la liste des utilisateurs Mysql
// Connexion à la base de données MySql
require_once('../bootstrap/init.php');

// Nous allons chercher le vrai mot de passe ( crypté ) de l'utilisateur connecté
// Cryptage du mot de passe donné par l'utilsateur à la connexion par requête SQL
$Requete ="Select PASSWORD('".$_SESSION['Password']."');";
$Resultat = mysqli_query ( $Requete )  or  die(mysqli_error() ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )

// Le vrai mot de passe crypté est sauvergardé dans la variable $RealPasswd
{$RealPasswd=$ligne["PASSWORD('".$_SESSION['Username']. "')"];}
// Initialisation à Faux de la variable "L'utilisateur existe".
$CheckUser=False;
// On interroge la base de donnée Mysql sur le nom des users enregistrés
$Requete ="SELECT user_name,password FROM log_admin";
$Resultat = mysqli_query ( $Requete )  or  die(mysqli_error() ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
// Si l'utilisateur X est celui de la session
    if ( $ligne['User']==$_SESSION['Username'])
    {
// Alors on vérifie si le mot de passe est le bon
        If ($RealPasswd == $ligne['Password'])
// Si le couple est bon, c’est que l’utilisateur est le bon.
        {$CheckUser=True;}
        {Header('Location: ../admin/login.php');}
    }
}

// Si l'utilisateur n'est toujours pas valide à la fin de la lecture tableau
if ( $CheckUser==False )
// Redirection vers la fenêtre de connexion.
{Header('Location:login.php');}
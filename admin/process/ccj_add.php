<?php

    require(__DIR__.'../../../bootstrap/init.php');

global $bdd;
// Traitement de l'enregistrement
$isEdit = isset($_POST["id"]);
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$ml = $_POST['ml'];
$adresse = $_POST['adresse'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$presentation = $_POST['presentation'];

$sql = $bdd->prepare("INSERT INTO ccj(nom_ccj, presentation_ccj, mail_contact_ccj, mission_locale_nom, ville_ccj, code_postal_ccj, adresse_ccj)             
                VALUES (:nom, :presentation, :mail, :ml, :ville, :cp, :adresse) ");
$sql->execute([
    'nom' => $nom,
    'presentation' => $presentation,
    'mail' => $mail,
    'ml' => $ml,
    'cp' => $cp,
    'ville' => $ville,
    'adresse' => $adresse

]);


header( 'location: ../ccjs.php');
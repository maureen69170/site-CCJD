<?php

    require(__DIR__.'/../../bootstrap/init.php');

    // Traitement de l'enregistrement
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $ml = $_POST['ml'];
    $adresse = $_POST['adresse'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];
    $presentation = $_POST['presentation'];

    // Initialiser une variable $isEdit
    $isEdit = isset($_POST["id"]);

    //  modification

    global $bdd;
    $request = $bdd->prepare("UPDATE ccj 
                                        SET nom_ccj = ?, presentation_ccj = ?, mail_contact_ccj = ?, mission_locale_nom = ?, ville_ccj = ? , code_postal_ccj = ? , adresse_ccj = ?
                                         WHERE id = ? ");
    $request->execute([
        $nom ,
        $presentation ,
        $mail ,
        $ml ,
        $ville ,
        $cp ,
        $adresse,
        $isEdit
    ]);



header( 'location: ../ccjs.php');
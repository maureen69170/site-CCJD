<?php

require(__DIR__.'/../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

try{
    $bdd = new PDO(
        'mysql:dbname='.$_ENV['DB_NAME'].'; host='.$_ENV['DB_HOST']. '; charset=utf8',
        $_ENV['DB_USER'],
        $_ENV['DB_PASSWORD']
);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (Exception $exception){
    die('Il y a une erreur :'.$exception->getMessage());
}

/**
 * Retourne la liste des CCJ
 *
 * @return array
 */
function getAllCcjs() {
    global $bdd;

    $request = $bdd->prepare('SELECT * FROM ccj');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function findCcj(string $id) {
    global $bdd;

    $request = $bdd->prepare("SELECT * FROM ccj WHERE id= ?");
    $request->execute([
        $id
    ]);
    return $request->fetch(PDO::FETCH_ASSOC);
}

/*function insertCcj(){
    global $bdd;
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $ml = $_POST['ml'];
    $adresse = $_POST['adresse'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];
    $presentation = $_POST['presentation'];

        $sql = $bdd->prepare("INSERT INTO ccj(nom_ccj, presentation_ccj, mail_contact_ccj, mission_locale_nom, ville_ccj, code_postal_ccj, adresse_ccj)             
                VALUES (?, ?,?,?,?, ?, ?) ");
        $sql->execute([
            $nom ,
            $presentation ,
            $mail ,
            $ml ,
            $ville ,
            $cp ,
            $adresse
        ]);
}*/

/**
 * Retourne la liste des Users
 *
 * @return array
 */
function getAllUsers() {
    global $bdd;

    $request = $bdd->prepare("SELECT * FROM log_admin");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function findUser(string $id) {
    global $bdd;

    $request = $bdd->prepare("SELECT * FROM log_admin WHERE id=". $id);
    $request->execute();
    return $request->fetch(PDO::FETCH_ASSOC);
}
<?php
require(__DIR__.'/../../bootstrap/init.php');
$isEdit = isset($_GET["id"]);
global $bdd;

    $query = $bdd->prepare("DELETE FROM ccj WHERE id = '.$isEdit.'");
    $query->execute([$isEdit]);
    /*var_dump($query);*/

header( 'location: ../ccjs.php');
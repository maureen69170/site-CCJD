<?php
require(__DIR__.'../../../bootstrap/init.php');
$isEdit = isset($_POST["id"]);
global $bdd;

    $query = ("DELETE FROM ccj WHERE ccj.id = '$isEdit'");


header( 'location: ../ccjs.php');
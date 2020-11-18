<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="../images/icones/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../images/icones/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/icones/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/icones/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/icones/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/icones/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/icones/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/icones/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/icones/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../images/icones/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/icones/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../images/icones/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/icones/favicon-16x16.png">
    <link rel="manifest" href="../images/icones/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Page Galerie des Projets Communs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/galery_communs_projects.css">
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="60">
<!--NAVBAR-->
<?php
include ('../partials/navbar.php');
?>


<!--HEADER-->
<section id="header" class="container-fluid <!--progress-bar-striped  progress-bar-animated-->">
    <div class="heading">
        <h1>Voici les différents projets en communs !</h1>
    </div>
</section>

<!--GALERY-->
<section id="projets">
    <div class="container">
        <div class="blue-divider"></div>
        <div class="heading3">
            <h2>Nos Projets Communs</h2>
        </div>
        <div class="row">
            <?php /*foreach ($projets as $projet) : */?>
                <div class="col-md-12">
                    <div class="card mb-3 container" style="max-width: 100%; width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="../images/projets-communs/image-projet.jpg!d" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nom du projet</h5>
                                    <p class="card-text">Mini Description du projet</p>
                                    <a href="fiche_projet_communs.php" class="btn-card btn">En Savoir Plus</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php /*endforeach; */?>
        </div>
    </div>
</section>

<!--FOOTER-->
<?php
include ('../partials/footer.php');
?>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>

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
    <link rel="stylesheet" href="../css/fiche_projets_communs.css">
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="60">
<!--NAVBAR-->
<?php
include ('../partials/navbar.php');
?>

<section id="header" class="container-fluid">
    <div class="col-xs-8 col-md-4 profile-picture">
        <img src="../images/projets-communs/image-projet.jpg!d" alt="">
    </div>
    <div class="heading">
        <h1>Nom du Projet</h1>
        <span><a href="#presentation"><img src="../images/icones/circlewithdownarrow_114618.png" alt="Fleche vers le bas"></a></span>
    </div>
</section>

<section id="presentation">
    <div class="blue-divider"></div>
    <div class="heading2">
            <h2>Quel est le projet ?</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="home-presentation">
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid at atque, aut commodi cum dicta, eligendi expedita, fugit hic itaque magnam nihil non numquam praesentium saepe voluptatem voluptates voluptatibus!</span>
                    <span>Adipisci, blanditiis debitis deserunt ducimus expedita facilis magni nam neque pariatur quasi qui quis reiciendis rem! Aspernatur cumque, delectus earum error explicabo harum iste, laudantium quaerat quasi quia quidem quos.</span>
                    <span>Architecto, at atque autem ducimus earum ex maiores perspiciatis quasi quos veniam. Debitis eaque illum natus nesciunt quisquam repellat tenetur. Consequuntur corporis excepturi impedit, libero molestias nulla perferendis repudiandae sint?</span>
                    <span>Aliquam aperiam consequuntur dolorum eum fugit hic in, laudantium molestiae nobis ratione repellat sit suscipit totam. Architecto dicta, doloribus hic odit quos rerum sapiente. A aliquid earum molestias. Facilis, odio.</span>
                    <span>Ad ducimus ea eius obcaecati odit ratione reiciendis sit temporibus! Adipisci alias aliquid animi cupiditate distinctio dolorem hic ipsum, iusto laboriosam magnam necessitatibus nemo odit possimus qui, quia sapiente, voluptatem?</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="information">
    <div class="white-divider"></div>
    <div class="heading2">
        <h2>Informations</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <i class="fas fa-clock fa-lg">Date: 22/11/2020</i>
            </div>
            <div class="col-md-6">
                <i class="fas fa-map-marker-alt fa-lg">Localisation: Lyon</i>
                <!--<h3><i class="fas fa-map-marker-alt fa-lg">Localisation: </i>Lyon</h3>
                <p class="home-presentation">
                    <span>22/11/2020</span>
                </p>-->
            </div>
            <!--<div class="col-md-12">

            </div>-->
        </div>
    </div>
</section>

<footer class="text-center" id="footer">
    <div class="container">
        <a href="#header">
            <i class="fas fa-chevron-circle-up fa-3x"></i>
        </a>
        <div class="blue-divider"></div>
        <h2>ccjd !</h2>
        <div class="row">
            <div class="col-md-6">
                <a href="">
                    <h4>Mentions Légales</h4>
                </a>
            </div>
            <div class="col-md-6">
                <a href="">
                    <h4>Politique de Confidentialitée</h4>
                </a>
            </div>
        </div>
    </div>
</footer>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="../js/script.js"></script>
</body>
</html>
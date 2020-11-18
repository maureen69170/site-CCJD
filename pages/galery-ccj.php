<?php
    require ('../database/connect.php');


$request = $bdd->prepare('SELECT * FROM ccj');
$request->execute();
$ccjs = $request->fetchAll(PDO::FETCH_ASSOC);
?>

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
    <title>CCJ Galery Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/galery.css">
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="60">
<!--NAVBAR-->
<?php
    include ('../partials/navbar.php');
?>

<section id="header" class="container-fluid <!--progress-bar-striped  progress-bar-animated-->">
    <div class="heading">
        <h1>Voici les différents CCJ de la région !</h1>
    </div>
</section>



<section id="galery">
    <div class="container">
        <div class="white-divider"></div>
        <div class="heading5">
            <h2>portfolio</h2>
        </div>
        <div class="row">
            <?php foreach ($ccjs as $ccj) : ?>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card__side card__side--front-1">
                        <div class="card__title card__title--1">
                            <img src="../<?php echo $ccj['image_card']; ?>" alt="">
                        </div>

                        <div class="card__details">
                            <h3><?php echo $ccj['nom_ccj']; ?></h3>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                            <div class="card__back">
                                <h4><?php echo 'CCJ de '.$ccj['ville_ccj']; ?></h4>
                            </div>
                            <?php echo "<a href='fiche_presentation_ccj.php?id=".$ccj['id']."' class='btn-card btn--white'>Voir plus</a>"; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
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
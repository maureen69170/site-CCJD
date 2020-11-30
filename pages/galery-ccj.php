<?php
    require('../bootstrap/init.php');


$request = $bdd->prepare('SELECT * FROM ccj');
$request->execute();
$ccjs = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <?php include('../partials/head.php'); ?>
    <title>CCJ Galery Page</title>
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
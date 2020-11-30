<?php
require('../bootstrap/init.php');
global $bdd;
$request = $bdd->prepare('SELECT * FROM ccj WHERE id='. $_GET['id'].' ');
$request->execute();
$ccjs1 = $request->fetchAll(PDO::FETCH_ASSOC);
/*var_dump($ccjs1['presentation_ccj']);*/

/*$requestProjets= $bdd->prepare('SELECT * FROM ccj LEFT JOIN projets ON ccj.id WHERE  projets.ccj_id = projets.id ');
$requestProjets->execute();*/
$requestProjets= $bdd->prepare('SELECT * FROM ccj LEFT JOIN projets ON ccj.id= projets.ccj_id');
$requestProjets->execute();
$projets = $requestProjets->fetch(PDO::FETCH_ASSOC);


/*var_dump($projets);*/

?>
<!doctype html>
<html lang="en">
<head>
    <?php include('../partials/head.php'); ?>
    <title>CCJ Présentation Fiche Page</title>
    <link rel="stylesheet" href="../css/fiche_presentation_ccj.css">
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="60">
<nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars fa-3x"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <h1 class="navbar-brand">C.C.J.</h1>
            <li class="nav-item active topnav-centered">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item topnav-centered">
                <a class="nav-link" href="galery-ccj.php">Les CCJ</a>
            </li>

            <li class="nav-item topnav-centered">
                <a class="nav-link" href="../pages/projets_communs_galerie.php">Projets Communs</a>
            </li>
            <p>||</p>
            <li class="nav-item topnav-centered">
                <a class="nav-link" href="#presentation">Qui nous sommes ?</a>
            </li>

            <li class="nav-item topnav-centered">
                <a class="nav-link" href="#projets">Nos Projets</a>
            </li>

            <li class="nav-item topnav-centered">
                <a class="nav-link" href="#contact">Contactez nous !</a>
            </li>

            <li class="nav-item topnav-centered">
                <?php foreach ($ccjs1 as $ccjs) :?>
                <a class="nav-link" href="mailto:<?php echo $ccjs['mail_contact_ccj']; ?>">Interessé?</a>
                <?php endforeach; ?>
            </li>

            <li class="nav-item topnav-centered">
                <a class="nav-link" href="#reseaux">Nos Réseaux</a>
            </li>
        </ul>
    </div>
</nav>



<section id="header" class="container-fluid">
    <div class="col-xs-8 col-md-4 profile-picture">
        <img src="../images/ccj/fake-img-personnes.jpg" alt="Fake Image de Personnes">
    </div>
    <?php foreach ($ccjs1 as $ccjs) : ?>
    <div class="heading">

        <h1><?php echo $ccjs['nom_ccj']; ?></h1>

        <span><a href="#presentation"><img src="../images/icones/circlewithdownarrow_114618.png" alt="Fleche vers le bas"></a></span>
    </div>
    <?php endforeach; ?>
</section>

<section id="presentation">
    <div class="blue-divider"></div>
    <div class="heading2">
        <h2>Qui nous sommes ?</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <?php foreach ($ccjs1 as $ccjs) :?>
                <p class="home-presentation">
                    <span><?php echo $ccjs['presentation_ccj']; ?></span>
                </p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="projets">
    <div class="container">
        <div class="blue-divider"></div>
        <div class="heading3">
            <h2>Nos Projets</h2>
        </div>
        <div class="row">
            <?php /*foreach ($projets as $projet) :*/?>
            <div class="col-md-12">
                <div class="card mb-3 container" style="max-width: 100%; width: 100%;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="../images/ccj/fake-img-personnes.jpg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $projets['nom_projet']; ?></h5>
                                <p class="card-text"><?php echo $projets['texte_projet']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php /*endforeach; */?>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="white-divider"></div>
        <div class="heading4">
            <h2>Adresse</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contact-panel-container">
                    <div class="contact-panel">
                        <div class="contact-heading">
                            <?php foreach ($ccjs1 as $ccjs) :?>
                            <h3><?php echo $ccjs['mission_locale_nom']; ?></h3>
                            <p><?php echo $ccjs['adresse_ccj']; ?></p>
                            <p><?php echo $ccjs['code_postal_ccj']; ?> <?php echo $ccjs['ville_ccj']; ?>.</p>
                            <a href="contact.php">
                                <i class="fas fa-envelope-open-text fa-3x"></i>
                            </a>
                            <p>
                                <i class="fas fa-share fa-lg"></i>
                                Contactez nous si vous avez des questions !
                            </p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="rounded-block">
                    <div class="contact-panel">
                        <i class="fas fa-map-marked-alt fa-5x"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-panel-container">
                    <div class="contact-panel-gps">
                        <?php foreach ($ccjs1 as $ccjs) :?>
                        <div>
                            <iframe src="<?php echo $ccjs['maps']; ?>" width="240" height="250" frameborder="0"
                                    style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="reseaux">
    <div class="container">
        <div class="blue-divider"></div>
        <div class="heading5">
            <h2>Nos Réseaux</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-offset-3 social-menu">
                <img src="../images/reseaux/jeun_avenir_nametag_insta.png" alt="Site beta CCJD">
            </div>
            <div class="col-md-3 col-offset-3 social-menu">
                <img src="../images/reseaux/snapV2.png" alt="Tp insta like">
            </div>
        </div>
    </div>
</section>


<!--HEADER-->
<?php
    include('../partials/footer.php');
?>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="../js/script.js"></script>

</body>
</html>
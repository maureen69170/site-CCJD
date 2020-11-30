<?php
require('../bootstrap/init.php');

$isEdit = isset($_GET["id"]);

if($isEdit) {
    $ccj = findCcj($_GET["id"]);

    if(!$ccj) {
        die("CCJ non trouvé.");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php'); ?>
    <title>
        Ajout/Edition de CCJ
    </title>
</head>

<body class="">
<div class="wrapper ">
    <?php include('partials/menu.php'); ?>

    <div class="main-panel" id="main-panel">
        <?php
            $topBarTitle = "Ajout/Edition d'un CCJ";
            include('partials/top_bar.php');
        ?>

        <div class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Editer/ajouter CCJ</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="process/ccj_modify.php">
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group" hidden>
                                            <label>ID</label>
                                            <input type="text" class="form-control"  placeholder="id ccj"  name="id" value="<?= $ccj["id"] ?? '' ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control"  placeholder="Nom CCJ"  name="nom" value="<?= $ccj["nom_ccj"] ?? '' ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3 px-1">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Email CCJ" name="mail" value="<?= $ccj["mail_contact_ccj"] ?? '' ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nom de la Mission Locale</label>
                                            <input type="text" class="form-control" placeholder="Nom de la Mission Locale" name="ml" value="<?= $ccj["mission_locale_nom"] ?? '' ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Adresse</label>
                                            <input type="text" class="form-control" placeholder="Adresse" name="adresse" value="<?= $ccj["adresse_ccj"] ?? '' ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <label>Code Postal</label>
                                            <input type="text" class="form-control" placeholder="Code Postal" name="cp" value="<?= $ccj["code_postal_ccj"] ?? '' ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Ville</label>
                                            <input type="text" class="form-control" placeholder="Ville" name="ville" value="<?= $ccj["ville_ccj"] ?? '' ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Présentation</label>
                                            <textarea rows="4" cols="80" class="form-control" placeholder="Presentation du CCJ" name="presentation" value="<?= $ccj["presentation_ccj"] ?? '' ?>"><?= $ccj["presentation_ccj"] ?? '' ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3 offset-5">
                                        <button type="submit" class="btn btn-success">Modifier CCJ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('partials/footer.php'); ?>
    </div>
</div>

<?php include('partials/scripts.php'); ?>

</body>

</html>
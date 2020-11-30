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
        Liste des Utilisateurs Admin
    </title>
</head>

<body class="">
<div class="wrapper ">
    <?php include('partials/menu.php'); ?>

    <div class="main-panel" id="main-panel">
        <?php
        $topBarTitle = "Liste des Utilisateurs Admin";
        include('partials/top_bar.php');
        ?>

        <div class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Demande de Confirmation de Supression</h4>
                            <p>Vous etes entrain de supprimer un CCJ de définitivement, si c est ce que vous voulez faire cliquer sur la poubelle en bas.</p>
                        </div>
                        <div class="card-body">
                            <form action="process/ccj_delete.php" method="get">
                                <input type="hidden" name="id" value="<?php echo $isEdit; ?>">
                                Nom: <?php echo $ccj['nom_ccj']; ?><br>
                                ville: <?php echo $ccj['ville_ccj']; ?><br>
                                <!--<input name="supprimer" type="Submit" value="Oui supprimer définitivement">-->
                                <a href="/admin/process/ccj_delete.php?id=<?= $ccj['id']; ?>">
                                    <button type="button" name="supprimer" class="btn btn-danger"><i class="fas fa-trash fa-2x"></i></button>
                                </a>
                            </form>

                            <!--<p><?/*= $ccj['nom_ccj']; */?></p>
                            <p><?/*= $ccj['password']; */?></p>

                            <a href="/admin/process/ccj_delete.php?id=<?/*= $ccj['id']; */?>">
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash fa-2x"></i></button>
                            </a>-->

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

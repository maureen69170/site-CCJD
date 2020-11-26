<?php
require('../bootstrap/init.php');

$ccjs = getAllCcjs();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php'); ?>
    <title>
        Liste des CCJD
    </title>
</head>

<body class="">
<div class="wrapper ">
    <?php include('partials/menu.php'); ?>

    <div class="main-panel" id="main-panel">
        <?php
        $topBarTitle = "Liste des CCJD";
        include('partials/top_bar.php');
        ?>

        <div class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Les CCJ du Département</h4>
                            <p>Ici vous pouvez modifier les informations sur un CCJ, ainsi que de supprimer ou ajouter un CCJ.</p>
                        </div>
                        <div class="card-body">
                            <a href="ccj_form_ajout.php" style="font-size: 20px;">
                                <button type="button" class="btn btn-primary">
                                    <i class="fas fa-plus-circle fa-2x"></i>
                                    <p>Ajouter</p>
                                </button>
                            </a>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Nom
                                        </th>
                                        <th>
                                            Ville
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th class="text-right">
                                            Actions
                                        </th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($ccjs as $ccj) : ?>
                                        <tr>
                                            <td>
                                                <?= $ccj['id'];   ?>
                                            </td>
                                            <td>
                                                <?= $ccj['nom_ccj']; ?>
                                            </td>
                                            <td>
                                                <?= $ccj['ville_ccj']; ?>
                                            </td>
                                            <td>
                                                <?= $ccj['mail_contact_ccj']; ?>
                                            </td>
                                            <td class="text-right">
                                                <a href="/admin/ccj_form.php?id=<?= $ccj['id']; ?>">
                                                    <button type="button" class="btn btn-info"><i class="fas fa-tools fa-2x"></i></button>
                                                </a>
                                                <a href="/admin/ccj_confirm_delete.php?id=<?= $ccj['id']; ?>">
                                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash fa-2x"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
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
<?php
require('../bootstrap/init.php');

//Verification

//variables
/*$username = $_POST['username'];*/

//Hachage du password
/*$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);*/
if (!empty($_POST['username']) && !empty($_POST['password'])){
    //variables
    $username = $_POST['username'];

    //Hachage du password
    $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //Insert
    /** @var PDO $bdd */
    $request = $bdd->prepare("INSERT INTO log_admin(user_name, password) VALUES ('".$username."', '".$pass_hache."')");
    $request->execute([
        $username,
        $pass_hache

    ]);
    header('location: /admin/user.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../admin/partials/head.php'); ?>
    <title>
        Ajouter un utilisateur
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../admin/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../admin/assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
<div class="wrapper ">
    <?php include('../admin/partials/menu.php'); ?>

    <div class="main-panel" id="main-panel">
        <?php
        $topBarTitle = "Ajouter un utilisateur";
        include('../admin/partials/top_bar.php');
        ?>

        <div class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="title"><?= $topBarTitle ?></h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="user_form_ajout.php">
                                <div class="row">
                                    <div class="col-md-6 pr-1 offset-3">
                                        <div class="form-group">
                                            <label>Nom d'utilisateur</label>
                                            <input type="text" class="form-control"  placeholder="Nom de l'utilisateur"  name="username">
                                        </div>

                                        <div class="form-group">
                                            <label>Mot de passe</label>
                                            <input type="password" class="form-control"  placeholder="Entrer un mot de passe"  name="password">
                                        </div>
                                    </div>
                                    <div class="col-md-3 offset-5">
                                        <button type="submit" class="btn btn-success">Ajouter Utlilisateur</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('../admin/partials/footer.php'); ?>
    </div>
</div>

<?php include('../admin/partials/scripts.php'); ?>

</body>

</html>
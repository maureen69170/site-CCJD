<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../partials/head.php'); ?>
    <title>
        Login
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/login.css">
</head>

<body>
<div class="page-header header-filter" style="background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-login">
                    <form class="form" method="POST" action="/admin/login/log_verification.php">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Login</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <!--<i class="material-icons">face</i>-->
                                        <i class="far fa-user fa-2x"></i>
                                    </span>
                                </div>
                                <label for="username"></label>
                                <input type="text" class="form-control" name="username" placeholder="First Name...">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock fa-2x"></i>
                                      <!--<i class="material-icons">lock_outline</i>-->
                                    </span>
                                </div>
                                <label for="password"></label>
                                <input type="password" class="form-control" name="password" placeholder="Password...">
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" id="submit" class="btn btn-primary btn-link btn-wd btn-lg">Connexion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center ">
    </footer>
</div>

</body>
</html>
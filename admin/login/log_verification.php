<?php
session_start();
$_SESSION['Username']=$_POST['username'];
$_SESSION['Password']=$_POST['password'];
HEADER('Location: log_verif_session.php');

<?php session_start();
if (!isset($_SESSION['id_user'])) {
    header('location: ..\index.php');
}
if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['id_user']);
    header("location: ..\index.php");
}   ?>
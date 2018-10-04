<?php

session_start();
if(!$_SESSION['loggedIn'] || empty($_SESSION['LoggedIn'])) {
    header('Location: ../login/home_login.php');
    exit;
}
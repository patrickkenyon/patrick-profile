<?php

session_start();
if(!$_SESSION['loggedIn']) {
    header('Location: ../login/home_login.php');
    exit;
}
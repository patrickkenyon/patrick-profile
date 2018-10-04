<?php
session_start();

if(password_verify($_POST['password'], '$2y$10$rj/kIibmdF60HC7puwAEb.Og5KEfsPgiYWZsmPdNPai8LrKsugf/y') && ($_POST['username'] == 'patrickkenyon')) {
    $_SESSION['loggedIn'] = TRUE;
    header('Location: ../admin/dashboard.php');
} else {
    header('Location: home_login.php?error=1');
}


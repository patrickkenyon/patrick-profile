<?php
session_start();


if(password_verify($_POST['password'], '$2y$10$HCUDMjzVnzRKz/8lBvfSlOEsKIGTkwUgC7eVCEvfPjVgxDBoWr8a2') && ($_POST['username'] == 'patrickkenyon')) {
    $_SESSION['loggedIn'] = TRUE;
    header('Location: ../admin/dashboard.php');
} else {
    header('Location: home_login.php?error=1');
}


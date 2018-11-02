<?php
session_start();


if(password_verify($_POST['password'], '$2y$10$lVtUeoVH5NdRs92WxygAguRBm2G3ie1mXplJm4Oi8OJ50sUtPB4E2') && ($_POST['username'] == 'patrickkenyon')) {
    $_SESSION['loggedIn'] = TRUE;
    header('Location: ../admin/dashboard.php');
} else {
    header('Location: home_login.php?error=1');
}
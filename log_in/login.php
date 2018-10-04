<?php
session_start();

if(password_verify($_POST['password'], '$2y$10$l0HdvUusZt8n6O6qEE2ixOriNiL4dUu6nM1t1RgthbwTwmVQ55ENm') && ($_POST['username'] == 'patrickkenyon')) {
    $_SESSION['loggedIn'] = TRUE;
    header('Location: account.php');
} else {
    header('Location: index.php?error=1');
}


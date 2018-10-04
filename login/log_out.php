<?php
session_start();
session_destroy();
header('location:home_login.php?error=2');
exit();
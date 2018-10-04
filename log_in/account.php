<?php

echo $_SESSION['loggedIn'];

session_start();
if(!$_SESSION['loggedIn']) {
        header('Location: account.php');
        exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Successful | Login</title>
</head>
<body>
    <h1>DO PLEASE HAVE A GOOD LOOK AT ALL OF MY BANK DETAILS AND STEAL MY MONEY</h1>
</body>
</html>

<?php

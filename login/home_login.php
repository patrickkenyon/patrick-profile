<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Login</title>
</head>
<body>
    <form method="POST" action="script_login.php">
        <input title="username" type="text" name="username"> Username<br/>
        <input title="password" type="password" name="password"> Password<br/>
        <input type="submit" value="Login">
        <?php
        if ($_GET['error'] == 1) {
            echo "</br></br>There has been an error with your login details";
        } elseif ($_GET['error'] == 2) {
            echo "</br></br>You have successfully logged out";
        } ?>
    </form>
</body>
</html>
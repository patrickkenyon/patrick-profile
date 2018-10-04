<?php

session_start();
if(!$_SESSION['loggedIn']) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>

    <h2>Dashboard</h2><br/>
    <h3>Please select section that you would like to edit:</h3><br/><br/>
    <a href="about_me.php"> About me</a><br/><br/>
    <a href="content.php"> Content</a><br/><br/>
    <a href="choose_project.php"> Project (edit or delete existing)</a><br/><br/>
    <a href="add_project.php"> Project (create new)</a><br/><br/>
    <?php echo backButton('dashboard.php'); ?>

</body>
</html>
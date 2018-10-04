<?php

require 'functions.php';
require 'validate_login.php';

$db = connectDatabase();
$stmt = $db->query("SELECT `bio_title`,`bio`,`contact_title`,`email`,`telephone` FROM `about_me`;");
$about_me_data = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>About me</title>
</head>
<body>

    <form method="POST" action="submit_about_me.php">
        <label>Bio title</label>
        <input type="text" name="bio_title" value="<?php echo $about_me_data["bio_title"] ?>">
        <label>Bio</label>
        <textarea rows="15" cols="50" name="bio"><?php echo $about_me_data["bio"] ?></textarea>
        <label>Contact title</label>
        <input type="text" name="contact_title" value="<?php echo $about_me_data["contact_title"] ?>">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $about_me_data["email"] ?>">
        <label>Telephone</label>
        <input type="tel" name="telephone" value="<?php echo $about_me_data["telephone"] ?>"><br/><br/>
        <input type="submit" name="submit" value="Approve Changes">
        <?php echo backButton('dashboard.php'); ?>
    </form>

</body>
</html>
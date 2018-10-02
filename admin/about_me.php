<?php

require 'functions.php';

$db = connectDatabase();
$stmt = $db->query("SELECT `bio_title`,`bio`,`contact_title`,`email`,`telephone` FROM `about_me`;");
$about_me_data = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About me</title>
</head>
<body>

    <form method="POST" action="submit_about_me.php">
        <p>Bio title</p><input type="text" name="bio_title" value="<?php echo $about_me_data["bio_title"] ?>">
        <p>Bio</p><textarea rows="15" cols="50" name="bio"><?php echo $about_me_data["bio"] ?></textarea>
        <p>Contact title</p><input type="text" name="contact_title" value="<?php echo $about_me_data["contact_title"] ?>">
        <p>Email</p><input type="email" name="email" value="<?php echo $about_me_data["email"] ?>">
        <p>Telephone</p><input type="tel" name="telephone" value="<?php echo $about_me_data["telephone"] ?>"><br/><br/>
        <input type="submit" name="submit" value="Approve Changes">
    </form>

</body>
</html>
<?php
$db = new PDO("mysql:dbname=portfolio;host=127.0.0.1", 'root');
$db->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$stmt = $db->query("SELECT `bio_title`,`bio`,`contact_title`,`email`,`telephone` FROM `about_me`;");
$about_me_data = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About me</title>
</head>
<body>

    <form method="post" action="about_me.php">
        <input type="text" name="bio_title" value=<?php echo $about_me_data[0]["bio_title"] ?>> Bio title<br/>
        <input type="text" name="bio" value=<?php echo $about_me_data[0]["bio"] ?>> Bio<br/>
        <input type="text" name="contact_title" value="<?php echo $about_me_data[0]["contact_title"] ?>"> Contact title<br/>
        <input type="email" name="email" value="<?php echo $about_me_data[0]["email"] ?>"> Email<br/>
        <input type="tel" name="telephone" value="<?php echo $about_me_data[0]["telephone"] ?>"> Telephone<br/>
        <input type="submit" value="Approve Changes">
    </form>

</body>
</html>

<?php

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
        <input type="text" name="bio_title" value="<?php echo $about_me_data[0]["bio_title"] ?>"> Bio title<br/>
        <textarea rows="15" cols="50" name="bio"><?php echo $about_me_data[0]["bio"] ?></textarea> Bio<br/>
        <input type="text" name="contact_title" value="<?php echo $about_me_data[0]["contact_title"] ?>"> Contact title<br/>
        <input type="email" name="email" value="<?php echo $about_me_data[0]["email"] ?>"> Email<br/>
        <input type="tel" name="telephone" value="<?php echo $about_me_data[0]["telephone"] ?>"> Telephone<br/>
        <input type="submit" name="submit" value="Approve Changes">
    </form>

</body>
</html>

<?php

$stmt2 = $db->prepare(
        "UPDATE `about_me` 
                  SET `bio_title` = :bio_title,`bio` = :bio,`contact_title` = :contact_title,`email` = :email, `telephone` = :telephone 
                  WHERE `id` = 1;");

$stmt2->bindParam(':bio_title', $_POST["bio_title"]);
$stmt2->bindParam(':bio', $_POST["bio"]);
$stmt2->bindParam(':contact_title', $_POST["contact_title"]);
$stmt2->bindParam(':email', $_POST["email"]);
$stmt2->bindParam(':telephone', $_POST["telephone"]);
$stmt2->execute();
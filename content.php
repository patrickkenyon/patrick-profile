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
    <title>Content</title>
</head>
<body>

<form method="post" action="content.php">
    <input type="text" name="name" value=""> Name<br/>
    <input type="text" name="sub_title" value=""> Sub title<br/>
    <input type="text" name="tagline" value=""> Tag-line<br/>
    <input type="submit" value="Approve Changes">
</form>

</body>
</html>

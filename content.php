<?php

$db = new PDO("mysql:dbname=portfolio;host=127.0.0.1", 'root');
$db->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$stmt = $db->query("SELECT `name`,`sub_title`,`tagline`FROM `content`;");
$content_data = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Content</title>
</head>
<body>

<form method="POST" action="submit_content.php">
    Name<input type="text" name="name" value="<?php echo $content_data[0]["name"] ?>"><br/>
    Sub title<input type="text" name="sub_title" value="<?php echo $content_data[0]["sub_title"] ?>"><br/>
    Tagline<textarea rows="15" cols="50" name="tagline"><?php echo $content_data[0]["tagline"] ?></textarea><br/>
    <input type="submit" value="Approve Changes">
</form>

</body>
</html>

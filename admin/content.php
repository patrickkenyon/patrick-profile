<?php

require 'functions.php';
require 'validate_login.php';

$db = connectDatabase();
$stmt = $db->query("SELECT `name`,`sub_title`,`tagline`FROM `content`;");
$content_data = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Content</title>
</head>
<body>

<form method="POST" action="submit_content.php">
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $content_data["name"]; ?>">
    <label>Sub title</label>
    <input type="text" name="sub_title" value="<?php echo $content_data["sub_title"]; ?>">
    <label>Tagline</label>
    <textarea rows="15" cols="50" name="tagline"><?php echo $content_data["tagline"]; ?></textarea><br/><br/>
    <input type="submit" value="Approve Changes">
    <?php echo backButton('dashboard.php'); ?>
</form>

</body>
</html>

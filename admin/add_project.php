<?php

require 'functions.php';

$db = connectDatabase();
$stmt = $db->query("SELECT `title`,`mini_description`,`background_image`,`project_url` FROM `projects`;");
$projects_data = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Add project</title>
</head>
<body>

<form method="POST" action="submit_add_project.php" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title" placeholder="Project title">
    <label>Mini description</label>
    <textarea rows="15" cols="50" name="mini_description" placeholder="Please enter a description of the project here."></textarea>
    <label>Upload image</label>
    <input type="file" name="background_image">
    <label>Project url</label>
    <input type="text" name="project_url" placeholder="Project url"><br/><br/>
    <input type="submit" value="Add new project">
    <?php echo backButton('dashboard.php'); ?>
</form>

</body>
</html>

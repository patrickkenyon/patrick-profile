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
    <title>Add project</title>
</head>
<body>

<form method="POST" action="submit_add_project.php" enctype="multipart/form-data">
    <p>Title</p><input type="text" name="title" placeholder="Project title">
    <p>Mini description</p><textarea rows="15" cols="50" name="mini_description" placeholder="Please enter a description of the project here."></textarea>
    <p>Upload image</p><input type="file" name="background_image">
    <p>Project url</p><input type="text" name="project_url" placeholder="Project url"><br/><br/>
    <input type="submit" value="Add new project">
</form>

</body>
</html>

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
    Title: <input type="text" name="title" placeholder="Please enter the project title"><br/>
    Mini description: <textarea rows="15" cols="50" name="mini_description" placeholder="Please enter a description of the project here."></textarea><br/>
    Upload image: <input type="file" name="background_image"><br/>
    Project url: <input type="text" name="project_url" placeholder="Please provide a link to the project here"><br/>
    <input type="submit" value="Add new project">
</form>

</body>
</html>

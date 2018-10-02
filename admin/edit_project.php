<?php

require 'functions.php';

$db = connectDatabase();

$data = $_GET["id"];
$stmt = $db->query("SELECT `id`,`title`,`mini_description`,`background_image`,`project_url` FROM `projects` WHERE `id` =". $data .";");
$projects_data = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit project</title>
</head>
<body>

    <form method="POST" action="submit_edit_project.php">
        <p>Title</p><input type="text" name="title" value="<?php echo $projects_data[0]["title"] ?>"><br/>
        <p>Mini description</p><textarea rows="15" cols="50" name="mini_description"><?php echo $projects_data[0]["mini_description"] ?></textarea><br/>
        <p>Background image</p><input type="file" name="background_image" value="<?php echo $projects_data[0]["background_image"] ?>"><br/>
        <p>Project url</p><input type="text" name="project_url" value="<?php echo $projects_data[0]["project_url"] ?>"><br/><br/>
        <input type="submit" value="Edit existing projects">
    </form>

</body>
</html>
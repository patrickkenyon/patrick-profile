<?php

require 'functions.php';

$db = connectDatabase();

$stmt = $db->prepare("SELECT `id`,`title`,`mini_description`,`background_image`,`project_url` FROM `projects` WHERE `id` = :id ;");
$stmt->bindParam(':id', $_GET["id"]);
$stmt->execute();
$projects_data = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Edit project</title>
</head>
<body>

    <form method="POST" action="submit_edit_project.php?id=<?php echo $_GET['id']; ?>">
        <label>Title</label>
        <input type="text" name="title" value="<?php echo $projects_data[0]["title"]; ?>"><br/>
        <label>Mini description</label>
        <textarea rows="15" cols="50" name="mini_description"><?php echo $projects_data[0]["mini_description"]; ?></textarea><br/>
        <label>Background image</label>
        <input type="file" name="background_image" value="<?php echo $projects_data[0]["background_image"]; ?>"><br/>
        <label>Project url</label>
        <input type="text" name="project_url" value="<?php echo $projects_data[0]["project_url"]; ?>"><br/><br/>
        <input type="submit" value="Edit existing projects">
        <?php echo backButton('choose_project.php'); ?>
    </form>

</body>
</html>
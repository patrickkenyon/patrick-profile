<?php

$db = new PDO("mysql:dbname=portfolio;host=127.0.0.1", 'root');
$db->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

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

    <form method="post" action="submit_edit_project.php">
        <input type="text" name="title" value="<?php echo $projects_data[0]["title"] ?>"> Title<br/>
        <textarea rows="15" cols="50" name="bio"><?php echo $projects_data[0]["mini_description"] ?></textarea> Mini description<br/>
        <input type="text" name="contact_title" value="<?php echo $projects_data[0]["background_image"] ?>"> Background image<br/>
        <input type="email" name="email" value="<?php echo $projects_data[0]["project_url"] ?>"> Project url<br/>
        <input type="submit" name="submit" value="Edit existing projects">
    </form>

</body>
</html>
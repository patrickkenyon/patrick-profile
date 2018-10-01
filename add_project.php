<?php

$db = new PDO("mysql:dbname=portfolio;host=127.0.0.1", 'root');
$db->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$stmt = $db->query("SELECT `title`,`mini_description`,`background_image`,`project_url` FROM `projects`;");
$projects_data = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add project</title>
</head>
<body>

<form method="POST" action="submit_add_project.php" enctype="multipart/form-data">
    <input type="text" name="title" value="<?php echo $projects_data[0]["title"] ?>"> Title<br/>
    <textarea rows="15" cols="50" name="bio"><?php echo $projects_data[0]["mini_description"] ?></textarea> Mini description<br/>
    <input type="file" name="background_image"> Upload image<br/>
    <input type="email" name="email" value="<?php echo $projects_data[0]["project_url"] ?>"> Project url<br/>
    <input type="submit" value="Add new project">
</form>

</body>
</html>

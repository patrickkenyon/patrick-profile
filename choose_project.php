<?php

$db = new PDO("mysql:dbname=portfolio;host=127.0.0.1", 'root');
$db->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$stmt = $db->query("SELECT `id`,`title`FROM `projects`;");
$projects_data = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Choose project</title>
</head>
<body>

    <form method="GET" action="edit_project.php">
        Select a project to edit <select name="id">
            <?php
            foreach ($projects_data as $project) { ?>
                <option value=<?php echo $project['id']?>><?php echo $project['title']; ?></option>
            <?php } ?>
        </select><br/>
        <input type="submit" value="Choose project">
    </form>

</body>
</html>
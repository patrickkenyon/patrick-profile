<?php

require 'functions.php';

$db = connectDatabase();
$stmt = $db->query("SELECT `id`,`title`FROM `projects`;");
$projects_data = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Choose project</title>
</head>
<body>

    <form method="GET" action="edit_project.php">
        <label>Select a project to edit</label>
        <select name="id">
            <?php
            foreach ($projects_data as $project) { ?>
                <option value="<?php echo $project['id']?>"><?php echo $project['title']; ?></option>
            <?php } ?>
        </select><br/><br/>
        <input type="submit" value="Choose project">
        <?php echo backButton('dashboard.php'); ?>
    </form>

</body>
</html>
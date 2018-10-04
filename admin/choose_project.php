<?php

require 'functions.php';
require 'validate_login.php';

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
    <script>
        function confirmationBox() {
            return confirm("Are you sure you want to delete this?");
        }
    </script>
</head>
<body>

    <form method="GET" action="edit_project.php">
        <label>Select a project to <strong>EDIT</strong></label>
            <?php echo projectDropDown($projects_data) ?>
        <input type="submit" value="Choose project">
    </form>

    <form method="POST" action="delete_project.php" onsubmit="return confirmationBox();">
        <label>Select a project to <strong>DELETE</strong></label>
            <?php echo projectDropDown($projects_data) ?>
        <input type="submit" value="Delete project">
        <?php echo backButton('dashboard.php'); ?>
    </form>

</body>
</html>
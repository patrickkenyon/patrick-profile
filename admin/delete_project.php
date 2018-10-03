<?php

require 'functions.php';

$db = connectDatabase();

$stmt = $db->prepare(
    "DELETE FROM `projects`
    WHERE `id` = :id;");
$stmt->bindParam(':id', $_POST["id"]);
$stmt->execute();
echo 'you have successfully deleted the project';
echo backButton('choose_project.php');
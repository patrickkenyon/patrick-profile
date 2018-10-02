<?php

require 'functions.php';

if (empty($_POST["name"])) {
    exit ('Please enter a value for name');
}

$db = connectDatabase();

$stmt = $db->prepare(
    "UPDATE `content` 
              SET `name` = :name1,`sub_title` = :sub_title,`tagline` = :tagline 
              WHERE `id` = 1;");

$stmt->bindParam(':name1', $_POST["name"]);
$stmt->bindParam(':sub_title', $_POST["sub_title"]);
$stmt->bindParam(':tagline', $_POST["tagline"]);
$stmt->execute();

header('location:content.php');
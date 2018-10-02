<?php

require 'functions.php';

if (
    (empty($_POST["bio_title"])) ||
    (empty($_POST["bio"])) ||
    (empty($_POST["contact_title"])) ||
    (empty($_POST["email"])) ||
    (empty($_POST["telephone"]))
) {
    exit ('Please enter values for all fields');
}

$db = connectDatabase();

$stmt = $db->prepare(
    "UPDATE `about_me` 
              SET `bio_title` = :bio_title,`bio` = :bio,`contact_title` = :contact_title,`email` = :email, `telephone` = :telephone 
              WHERE `id` = 1;");

$stmt->bindParam(':bio_title', $_POST["bio_title"]);
$stmt->bindParam(':bio', $_POST["bio"]);
$stmt->bindParam(':contact_title', $_POST["contact_title"]);
$stmt->bindParam(':email', $_POST["email"]);
$stmt->bindParam(':telephone', $_POST["telephone"]);
$stmt->execute();

header('location:about_me.php');
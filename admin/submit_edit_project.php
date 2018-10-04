<?php

require 'functions.php';

$db = connectDatabase();

projectDataCheck($_POST["title"], $_POST["mini_description"],$_FILES["background_image"]["name"],$_POST["project_url"],'choose_project.php');

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["background_image"]["name"]);
$dbfile =  "uploads/". basename($_FILES["background_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (!file_exists($target_file)) {

    // Check file size
    if ($_FILES["background_image"]["size"] > 2000000) {
        $uploadOk = 0;
        echo backButton('choose_project.php');
        exit('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        $uploadOk = 0;
        echo backButton('choose_project.php');
        exit('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');

    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo backButton('choose_project.php');
        exit('Sorry, your file was not uploaded.');
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["background_image"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["background_image"]["name"]) . " has been uploaded.</br>";
        } else {
            echo backButton('choose_project.php');
            exit('Sorry, there was an error uploading your file.');
        }
    }
}

$stmt = $db->prepare(
    "UPDATE `projects`
    SET `title` = :title, `mini_description` = :mini_description,
    `background_image` = :background_image, `project_url` = :project_url
    WHERE `id` = :id;"
);

$stmt->bindParam(':id', $_GET["id"]);
$stmt->bindParam(':title', $_POST["title"]);
$stmt->bindParam(':mini_description', $_POST["mini_description"]);
$stmt->bindParam(':background_image', $dbfile);
$stmt->bindParam(':project_url', $_POST["project_url"]);
$stmt->execute();

echo 'The project has been successfully edited';
echo backButton('choose_project.php');


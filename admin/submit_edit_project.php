<?php
require 'functions.php';

$db = connectDatabase();

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["background_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["background_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (!file_exists($target_file)) {

    // Check file size
    if ($_FILES["background_image"]["size"] > 2000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["background_image"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["background_image"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if (
        (empty($_POST["title"])) ||
        (empty($_POST["mini_description"])) ||
        (empty($target_file))
    ) {
        exit ('Please enter values for title, mini description and background image.');
    }
}
$stmt = $db->prepare(
    "UPDATE `projects`
    SET `title` = :title, `mini_description` = :mini_description, 
    `background_image` = :background_image, `project_url` = :project_url
    WHERE `id` = :id;");

$stmt->bindParam(':id', $_GET["id"]);
$stmt->bindParam(':title', $_POST["title"]);
$stmt->bindParam(':mini_description', $_POST["mini_description"]);
$stmt->bindParam(':background_image', $target_file);
$stmt->bindParam(':project_url', $_POST["project_url"]);
$stmt->execute();
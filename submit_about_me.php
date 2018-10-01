<?php

$stmt2 = $db->prepare(
    "UPDATE `about_me` 
                  SET `bio_title` = :bio_title,`bio` = :bio,`contact_title` = :contact_title,`email` = :email, `telephone` = :telephone 
                  WHERE `id` = 1;");

empyt()

$stmt2->bindParam(':bio_title', $_POST["bio_title"]);
$stmt2->bindParam(':bio', $_POST["bio"]);
$stmt2->bindParam(':contact_title', $_POST["contact_title"]);
$stmt2->bindParam(':email', $_POST["email"]);
$stmt2->bindParam(':telephone', $_POST["telephone"]);
$stmt2->execute();
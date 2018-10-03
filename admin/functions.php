<?php

/*
 * this function creates a PDO instance connecting to the portfolio database, it also sets the default fetch mode to fetch associative.
 *
 * @return resource the database connection.
*/
function connectDatabase() {
    $db = new PDO("mysql:dbname=portfolio;host=127.0.0.1", 'root');
    $db->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    return $db;
}

/*
 * this function creates a redirect button to the desired page
 *
 * @param string @redirect_path is a user defined string
 *
 * @return void
*/
function backButton ($redirect_path) {
    return "</br></br><a href=$redirect_path>Back</a></br>";
}

/*
 * this function checks whether the user has submitted values for all required fields when creating or editing a project.
 * if these values exist then the script continues, if false then a redirect button and warning message appear.
 *
 * @param string $title is a user defined string
 * @param string $description is a user defined string
 * @param string $image is a user defined string
 * @param string $redirect_path is a user defined string
 *
 * @return void
*/
function projectDataCheck($title, $description, $image, $redirect_path) {
    if (
        empty($title) ||
        empty($description) ||
        empty($image)
    ) {
        echo "<a href=$redirect_path>Back</a></br>";
        exit ('Please enter values for title, mini description and background image.');
    }
}
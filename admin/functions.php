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

function backButton ($redirect_path) {
    echo "<a href=$redirect_path>Back</a></br>";
}

function validateData($data) {
    empty($data);
}

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
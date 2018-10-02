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

function validateData($data) {
    empty($data);
}
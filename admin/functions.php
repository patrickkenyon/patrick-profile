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
function backButton (string $redirect_path) {
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
function projectDataCheck(string $title, string $description, string $image, string $project_url, string $redirect_path) {
    if (
        empty($title) ||
        empty($description) ||
        empty($image) ||
        empty($project_url)
    ) {
        echo "<a href=$redirect_path>Back</a></br>";
        exit ('Please enter values for title, mini description and background image.');
    }
}

/*
 * this function creates a drop down list with all the current projects in the db with the associated names and project id's
 *
 * @param array $projects_data is a string drawn from the db with a select statement containing project id's and associated project names.
 *
 * @return string which takes the form of a drop down select.
*/
function projectDropDown(array $projects_data) {
    $output = '<select name="id">';
        foreach ($projects_data as $project) {
            $output .= '<option value="' .  $project['id'] . '">' .  $project['title'] . '</option>';
        }
    $output .= '</select><br/><br/>';
    return $output;
}

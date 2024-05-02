<?php

require_once(dirname(__FILE__) . "/config.php");

$connection = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME, $DB_PORT);
if ($connection == false){
    echo "Error when connection to database";
}

// TODO: close connection after use
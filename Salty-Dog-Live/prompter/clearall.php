<?php


date_default_timezone_set('America/New_York');
$mysqli = new mysqli('localhost', 'salty_dev', 'Mzu!d266', 'saltydog_dev');

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    exit;
}

$sql = 'TRUNCATE TABLE Song_Requests';


if ($mysqli->query($sql) === TRUE) {
    header("Location:https://www.saltydog.com/prompter");
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();



?>
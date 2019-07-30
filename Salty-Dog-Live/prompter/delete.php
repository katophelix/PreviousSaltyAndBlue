<?php


date_default_timezone_set('America/New_York');
$mysqli = new mysqli('localhost', 'salty_dev', 'Mzu!d266', 'saltydog_dev');

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    exit;
}

$id = $_POST['songid'];

$sql = 'DELETE FROM Song_Requests WHERE id = ' . $id;


if ($mysqli->query($sql) === TRUE) {
    header("Location:https://www.saltydog.com/music_new/prompter");
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();


?>
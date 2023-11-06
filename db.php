<?php
$hostname = 'localhost';
$username = '';
$password = '';
$database = 'petition-form';


$mysqli = mysqli_connect($hostname, $username, $password, $database);

if (!$mysqli) {
    die('Could not connect to the database: ' . mysqli_connect_error());
}
echo 'Connected to the database successfully.';
?>



<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'alpine';
$dbName = 'gallery1';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
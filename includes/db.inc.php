<?php

$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "beauty_salon";

if(!$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName))
{
    die("Failed to connect to database");
}
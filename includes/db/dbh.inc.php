<?php

$serverName = "localhost";
$dbUsername = "Ernesto";
$dbPassword = "1234";
$dbName = "social_web";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
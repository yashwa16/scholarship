<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "scholar1";

$con = mysqli_connect($serverName, $userName, $password, $database);

if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
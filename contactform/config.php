<?php
$host = "localhost";
$userName = "root"; //grower
$password = ""; //Grower-lab01
$dbName = "contact";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

<?php
$host = "localhost";
$userName = "growerla"; //grower
$password = "Grower-lab01"; //Grower-lab01
$dbName = "grower-lab.com";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

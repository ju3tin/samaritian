<?php
$host = "eu-cdbr-sl-lhr-01.cleardb.net:3306";
$userName = "ba8b59cfea5cda";
$password = "a701c56b";
$dbName = "ibmx_fa8d6555e096b37";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<?php
$servername = "eu-cdbr-sl-lhr-01.cleardb.net:3306";
$username = "ba8b59cfea5cda";
$password = "a701c56b";
$dbname = "ibmx_fa8d6555e096b37";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO submerchants (name, phone, email)
VALUES ('John', '12345', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
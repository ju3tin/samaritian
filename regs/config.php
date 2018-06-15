<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'eu-cdbr-sl-lhr-01.cleardb.net:3306');
define('DB_USERNAME', 'ba8b59cfea5cda');
define('DB_PASSWORD', 'a701c56b');
define('DB_NAME', 'ibmx_fa8d6555e096b37');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
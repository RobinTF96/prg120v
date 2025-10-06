<?php
$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');//"6887rofin5165";
$database = getenv('DB_DATABASE');

print("Host: $host, User: $username, Password: $password, Database: $database<br>");

$db = mysqli_connect($host, $username, $password, $database) or die ("Kunne ikke koble til databasen");

?>
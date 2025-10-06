<?php
$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$database = getenv('DB_DATABASE');

$db = mysqli_connect($host, $username, $password, $database) or die ("Kunne ikke koble til databasen");

?>
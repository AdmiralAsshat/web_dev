
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstdb";

//make connection to mysql database

$dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("Could not connect to database, ERROR: ".mysqli_connect_error());

//set encoding

mysqli_set_charset($dbc, "utf8");

echo "Successfully connected to ".$dbname." database";

?>
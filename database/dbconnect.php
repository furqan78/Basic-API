<?php
// Connect to the Database 
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "usersdb";
$conn = mysqli_connect($serverName, $userName, $password, $database);

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

?>
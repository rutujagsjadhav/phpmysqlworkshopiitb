<?php

$servername="localhost";
$username = "RutujaGJadhav";
$password = "9876";
$dbname = "result";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";


?>
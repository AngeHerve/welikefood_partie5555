<?php
$servername = "localhost";
$database = "spcom_kouassi";
$username = "spcom_userkouassi";
$password = "marie 2006";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



?>


<?php
// Create 4 variables to store these information
$server="127.0.0.1:3307";
$username="root";
$password="";
$database = "infits";
// Create connection
$conn = new mysqli($server, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
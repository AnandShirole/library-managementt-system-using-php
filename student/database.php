<?php
$servername = "localhost";
$username = "root";
$password = "anand";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
//create a db

$sql="CREATE DATABASE dbdada";
mysqli_query($conn, $sql);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected sql successfully";
?>
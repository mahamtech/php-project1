<?php
$servername = "localhost";
$username = "root";
$password = "devuser@123";
$database="project";

// Create connection
$dbconnect = mysqli_connect('localhost','root','devuser@123','project');

// Check connection
if (!$dbconnect) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
  echo "success";
}
?>
<?php
$servername = "localhost";
$username = "test";
$password = "devuser";
$database="project";

// Create connection
$dbconnect = mysqli_connect('localhost','test','devuser','project');

// Check connection
if (!$dbconnect) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
  echo "success";
}
?>
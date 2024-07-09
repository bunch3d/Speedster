<?php

$servername = "root"
$username = "localhost"
$password = ""
$database ="cars"

$conn = new  mysqli($servername, $username, $password, $database)

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


?>
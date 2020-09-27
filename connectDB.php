<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$database = "massagel2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (mysqli_connect_error()) {
  die("Connection failed: " .$conn->connect_error);
}
mysqli_set_charset($conn, "utf8");
//  echo 'Successfully';
?>
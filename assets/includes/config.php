<?php
$servername = "localhost";
$username = "root";
$db="car_booking";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $db, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

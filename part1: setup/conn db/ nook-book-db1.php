<?php
//* creates db
$servername = "localhost";
$username = "username";
$password = "pass1234";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connection was successful! ";

// Create database if it isnt already made
$sql = "CREATE DATABASE IF NOT EXISTS db_name";
if ($conn->query($sql) === TRUE) {
  echo "db_name has been created.";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>

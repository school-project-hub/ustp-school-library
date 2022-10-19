<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_borrowing_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die(mysqli_error($conn));
}
?>
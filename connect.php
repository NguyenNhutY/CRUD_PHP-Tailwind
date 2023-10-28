<?php
// Connect to the database (replace with your database credentials)
include('./key_connect.php');
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
include('./key_connect.php');
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['ID'])) {
    $id = $_GET['ID'];
    // Connect to the database (replace with your database credentials)
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
echo "Connected successfully!";
    // Delete the item from the database
    $sql = "DELETE FROM item WHERE id=$id";
    $conn->query($sql);

    // Close the database connection
    $conn->close();
}
header("Location: index.php");
?>

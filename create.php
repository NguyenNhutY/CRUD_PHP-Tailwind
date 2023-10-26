<?php
include('./key_connect.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item = $_POST['item'];
    if (!empty($item)) {
        // Connect to the database (replace with your database credentials)
        $conn = new mysqli($host, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully!";
        // Insert the item into the database
        $sql = "INSERT INTO items (name) VALUES ('$item')";
        $conn->query($sql);

        // Close the database connection
        $conn->close();
    }
}
header("Location: index.php");
?>

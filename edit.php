<?php
include('./key_connect.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $item = $_POST['item'];
    if (!empty($item)) {
        // Connect to the database (replace with your database credentials)
        $conn = new mysqli($host, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully!";
        // Update the item in the database
        $sql = "UPDATE items SET name='$item' WHERE id=$id";
        $conn->query($sql);

        // Close the database connection
        $conn->close();
    }
}
header("Location: index.php");
?>

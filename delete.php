<?php
    // Execute the desired action
    require_once './connect.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];
        // Connect to the database (replace with your database credentials)
        // Sanitize and validate the ID parameter
            // Delete the item from the database
            if ($id !== false) {
            $sql = @"DELETE FROM item WHERE ID_Student = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $id); // "i" stands for integer
            if ($stmt->execute()) {
                echo "<br>Student was deleted successfully<Br>";
            } else {
                echo "<br>Error: " . $stmt->error . "<br>";
            }
            
        }
        else {
            echo "Invalid ID parameter.";
        }
        $conn->close();
    }
?>





<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name = $_POST['name'];
$id_student = $_POST['id_student'];
$class = $_POST['class'];
if (!empty($name) && !empty($id_student)&& !empty($class)) {
require_once './connect.php';

$addsql = @"INSERT INTO item (Name, ID_Student, Class) VALUES (?, ?, ?)";
$stmt = $conn->prepare($addsql);
$stmt->bind_param("sss", $name, $id_student, $class);
if ($stmt->execute()) {
    header("Location:read.php");
} else {
    echo "<br>Error: " . $stmt->error . "<br>";
}
}
}
$conn->close();
?>
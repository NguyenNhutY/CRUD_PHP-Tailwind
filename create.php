<?php
require_once 'connect.php';
$name = mysqli_real_escape_string($conn, $_POST['name']);
$id_student = mysqli_real_escape_string($conn, $_POST['id_student']);
$class = mysqli_real_escape_string($conn, $_POST['class']);
$stmt = mysqli_prepare($conn, @"INSERT INTO item (ID_Student, Name, Class) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sss", $id_student, $name, $class);
mysqli_stmt_execute($stmt);
if (mysqli_stmt_affected_rows($stmt) > 0) {
    header("Location: read.php");
} else {
    echo "Error";
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
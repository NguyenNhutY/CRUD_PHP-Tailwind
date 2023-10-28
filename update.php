<?php
require_once 'connect.php';
$name = mysqli_real_escape_string($conn, $_POST['name']);
$id_student = mysqli_real_escape_string($conn, $_POST['id_student']);
$class = mysqli_real_escape_string($conn, $_POST['class']);
$id = intval($_POST['id']);
$update_sql = @"UPDATE item SET ID_Student=?, Name= ?, Class=? WHERE ID = ?";
$stmt = mysqli_prepare($conn, $update_sql);
mysqli_stmt_bind_param($stmt, "sssi", $id_student, $name, $class, $id);
if (mysqli_stmt_execute($stmt)) {
    header("Location: read.php");
} else {
}
mysqli_stmt_close($stmt);
?>

<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa
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
<<<<<<< HEAD
=======
}
mysqli_stmt_close($stmt);
?>
=======

$name = $_POST['name'];
$id_student = $_POST['id_student'];
$class = $_POST['class'];
$id = $_POST['id'];

require_once 'connect.php';

$updatesql = "UPDATE item SET ID_Student='$id_student', Name= '$name', Class='$class' WHERE ID = $id";

if (mysqli_query($conn, $updatesql)){

header("Location: read.php");
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa
}
mysqli_stmt_close($stmt);
?>
<<<<<<< HEAD
=======
>>>>>>> 59cdcb72b56f86e044f0e226ffb07d5e47228e61
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa

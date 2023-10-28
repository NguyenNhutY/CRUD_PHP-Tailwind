<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa
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
<<<<<<< HEAD
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
=======
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
=======
$name = $_POST['name'];
$id_student = $_POST['id_student'];
$class = $_POST['class'];

require_once 'connect.php';
$themsql = "INSERT INTO item (ID_Student, Name, Class) VALUES ('$id_student', '$name', '$class')";
if (mysqli_query($conn, $themsql)){
header("Location: read.php");
}
>>>>>>> 59cdcb72b56f86e044f0e226ffb07d5e47228e61
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa

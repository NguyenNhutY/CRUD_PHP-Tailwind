<?php
$name = $_POST['name'];
$id_student = $_POST['id_student'];
$class = $_POST['class'];

require_once 'connect.php';
$themsql = "INSERT INTO item (ID_Student, Name, Class) VALUES ('$id_student', '$name', '$class')";
if (mysqli_query($conn, $themsql)){
header("Location: read.php");
}

<?php

$name = $_POST['name'];
$id_student = $_POST['id_student'];
$class = $_POST['class'];
$id = $_POST['id'];

require_once 'connect.php';

$updatesql = "UPDATE item SET ID_Student='$id_student', Name= '$name', Class='$class' WHERE ID = $id";

if (mysqli_query($conn, $updatesql)){

header("Location: read.php");
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name = $_POST['name'];
$id_student = $_POST['id_student'];
$class = $_POST['class'];
if (!empty($name) && !empty($id_student)&& !empty($class)) {
require_once './connect.php';

$addsql = "INSERT INTO item (Name, ID_Student,Class) VALUES ('$name','$id_student','$class') ";

if ($conn->query($addsql) === TRUE) {
    echo "<br>New record created successfully<Br>";
  } else {
    echo "Error: " . $addsql . "<br>" . $conn->error;
  }
  
// Close the database connection
$conn->close();

echo "<Br>Them thanh cong<Br>";

}
}
?>
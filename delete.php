<?php
$svid = $_GET['id'];
require_once 'connect.php';
$xoa_sql = "DELETE FROM item WHERE ID = '$svid'";

mysqli_query($conn, $xoa_sql);
header("Location: read.php");
?>
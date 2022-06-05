<?php
require_once('connection.php');
$id = $_GET['del'];
mysqli_query($conn, "delete from student where id = $id");
header('location:studData.php');
?>
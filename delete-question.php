<?php
require_once('connection.php');
$qid = $_GET['delete'];
mysqli_query($conn, "delete from questions_table where id = $qid");
header('location:quelist.php');
?>
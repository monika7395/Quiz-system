<?php
//connect to the database
$host = "localhost";
$username = "root";
$password = "";
$db = "quizdbase";
$conn = mysqli_connect($host, $username, $password, $db);
if(!$conn){
    die("connection failed" .mysqli_connect_error()); 
}
?>
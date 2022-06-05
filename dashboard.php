<!--?php
session_start();
if(!isset($_SESSION['user'])){
  header('location:admin.php');
}
?-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Test</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css/family=plat" rel="stylesheet">
<!--link rel="stylesheet" href="login.css"-->
<style>
 body{   
background: url(img/photo-1516542076529-1ea3854896f2.jpg);
background-size: cover;
 }
 </style>
</head>
<body>
<div class="container-fluid">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> 
  <a class="navbar-brand" href="#" >DashBoard</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
    <span class="navbar-toggler-icon"></span> 
  </button> 
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
    <ul class="navbar-nav mr-auto"> 
    <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Students Data
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="studData.php">Registers Student</a>
        <a class="dropdown-item" href="stud_result.php">Students Result</a>
      </div> 
      </li>
      <li class="nav-item active"> 
        <a class="nav-link" href="adminpage.php">Add Questions</a> 
      </li> 
      <li class="nav-item active"> 
        <a class="nav-link" href="quelist.php">Questions List</a> 
      </li>
      <li class="nav-item active"> 
        <a class="nav-link" href="feed.php">Feedback</a> 
      </li> 
      <li class="nav-item active"> 
        <a class="nav-link" href="admin.php">Log Out</a> 
      </li> 
    </ul> 
    
    </div>
  </nav>
  </div> 
</body>
</html>       
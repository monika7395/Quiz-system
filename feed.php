<?php
  require_once('connection.php');
 if(isset($_GET['del'])){
  $id = $_GET['del'];
  mysqli_query($conn, "delete from feedback where id = $id");
 }
  ?>
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

<!--link rel="stylesheet" href="login.css"-->

<script type="text/javascript">

$(document).ready(function(){
    $(".remove").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>

      <script type="text/javascript">
         function myfun(){
            window.print();
         }
      </script>
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
    <div class="container" style="margin-top:50px;">
     <br><h1 class="text-center text-primary animateuse" style="font-weight:bold;">Uptricks Screening Process</h1><br>
     <h3 class="text-center text-success" style="font-weight:bold;">Admin Panel</h3>
     <div class="container"> 
       <?php
         $result = mysqli_query($conn, "select id,name,subject,email,feedback from feedback");
         echo "<br><br>";
         echo "<table class='table table-striped table-bordered table-responsive' style='width:100%;'>";
         echo "<tr>";
         echo "<td>S.no</td>";
         echo "<td>Name</td>";
         echo "<td>Subject</td>";
         echo "<td>Email</td>";
         echo "<td>Feedback</td>";
         echo "<td colspan=2 class='text-center'>Action</td>";
         echo "</tr>";
         while($retrive=(mysqli_fetch_array($result))){
           $id = $retrive['id'];
           $name = $retrive['name'];
           $t_que = $retrive['subject'];
           $attempt = $retrive['email'];
           $score = $retrive['feedback'];
           echo "<tr>";
           echo "<td>$id</td>";
           echo "<td>$name</td>";
           echo "<td>$t_que</td>";
           echo "<td>$attempt</td>";
           echo "<td>$score</td>";
           echo "<td><center><a href='feed.php?del=$id'><button class='btn btn-danger remove' name='delete' onclick='deletedata()'>Delete</button></a></center></td>";
           echo "</tr>";
           echo "</table";
           
         }
       ?>
       <form>
      <button type="button" class="btn btn-primary" style="margin-left:400px;margin-bottom:20px;" onclick="myfun()">PRINT</button></form>
  </div>
  </div>
</body> 
</html>

<?php 
include('server.php'); ?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Online Test</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="login.css">
<style>

.imag img{
  width: 200px;
  height : 650px;
}
.logo a{
  color: black;
  margin-right:20px;
}
.container-fluid img{
  width: 50px;
  
}
.form-container{
  width: 350px;
  height: 470px;
  background: rgba(44,62,80,0.7);
  padding: 40px;
  border-radius: 3px;
}
input{
width: 240px;
text-align: center;
background: transparent;
border: none;
border-bottom: 1px solid #fff;
font-family: 'Play', sans-serif;
font-size: 16px;
font-weight: 200px;
padding: 10px, 0;
transition: border 0.5s;
outline: none;
color: #fff;    
}

</style>
</head>
<body>
<div class="container-fluid">
<header>
<img src="" /></a>
<center><h1 style="font-weight:bold;font-size:60px;margin-top:4%;margin-bottom:6%;">Online Management System</h1>
  
</center>
</header>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-8"style="margin-top:-50px;">
<img src="img/tranp.png" style="width:700px; height:650px;"/>
</div>
<div class="col-md-4">
<form action="" method="post" class="form-container">
<h2 style="color:white;">Sign In</h2><br><br>
      <!--display validation errors here-->
      <?php include('errors.php'); ?>
      <input type="hidden" name="id">
      <div class="form-group">
	    <input type="text" name="username" placeholder="Enter username" class="form-control"required>
      </div><br/>
      <div class="form-group">
	    <input type="password" name="pass_1" placeholder="Enter password"class="form-control" required>
      </div><br/><br/>
      <a href=""><button type="submit" class="btn-lg btn-info" name="login">Sign In</button></a><br/><br/><br/>
    </form>
    </div>

</div>
<div class="container"style="margin-bottom:20px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black"> <u><p>Follow Us On</u> :</p></font>
  <a href="https://www.facebook.com/uptricks/"><img src="img/facebook.png"style="width:30px;margin-right:15px;"></a>
  <a href="https://twitter.com/uptricksservi"><img src="img/twitter (1).png"style="width:30px;margin-right:15px;"></a>
  <a href="https://www.linkedin.com/company/uptricks-services/"><img src="img/linkedin.png"style="width:30px;margin-right:15px;"></a>
  <a href="https://www.instagram.com/uptricks_services/"><img src="img/instagram (1).png"style="width:30px;margin-right:15px;"></a>
</div>
</div>

  
</body>
</html>
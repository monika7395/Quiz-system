<?php
//connect to the database
include('connection.php');


$option1 = "";
if(isset($_POST['register'])){
$que = htmlentities($_POST['question']);
$option1 = htmlentities($_POST['option1']);
$option2 = htmlentities($_POST['option2']);
$option3 = htmlentities($_POST['option3']);
$option4 = htmlentities($_POST['option4']);
$ans = htmlentities($_POST['answer_id']);
if($que!="" && $option1!="" && $option2!="" && $option3!="" && $option4!=""&& $ans!=""){
$q = "INSERT INTO questions_table(question, a1, a2, a3, a4,correct) VALUES ('$que', '$option1', '$option2', '$option3', '$option4','$ans')";
$data = mysqli_query($conn, $q);
if($data){
  echo "data inserted into database";
}
}
else{
  echo "all fields are required";
}
}

?>
<?php

$contect = mysqli_connect("localhost", "root", "", "test_db");
$item1 = "";
$item2 = "";
$item3 = "";
$item4 = "";
$item5 = "";
$item6 = "";
$item7 = "";

if(isset($_POST["import"]))
{
    if($_FILES['file']['name'])
    {
        $filename =explode(".", $_FILES['file']['name']);
        if($filename[1]=='csv')
        {
            
            $handle = fopen($_FILES['file']['tmp_name'], "r");
            while($data =fgetcsv($handle))
            {
                
                $item1 = htmlentities($data[0]);
                $item2 = htmlentities($data[1]);
                $item3 = htmlentities($data[2]);
                $item4 = htmlentities($data[3]);
                $item5 = htmlentities($data[4]);
                $item6 = htmlentities($data[5]);
                $sql="INSERT INTO questions_table(question, a1, a2, a3, a4, correct) VALUES ('$item1', '$item2', '$item3', '$item4', '$item5', '$item6')";
                mysqli_query($conn, $sql);

            }
            fclose($handle);
           
            print "import done";
        }
        

    }
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
<link href="https://fonts.googleapis.com/css/family=plat" rel="stylesheet">
<!--link rel="stylesheet" href="login.css"-->

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
  </div> <br><br>
<div class="container">
     <br><h1 class="text-center text-primary" style="font-weight:bold;">Uptricks Screening Process</h1><br>
     <h3 class="text-center text-success" style="font-weight:bold;">Admin Panel</h3><br>
     
     <div class="row"> 
  <div class="col-sm-6"> 
    <div class="card"> 
      <div class="card-body"> 
        <h5 class="card-title">Post New Question</h5> 
        <form action="" method="post"> 
            <div class="form-group"> 
                <label for="question">Add New Question</label> 
                
                      
                <input type="text" class="form-control" name="question" aria-describedby="" placeholder="Add New Question"> 
            </div> 
            <div class="form-group"> 
                <label for="option1">Option 1</label> 
                <input type="text" class="form-control" name="option1" placeholder="Option 1"> 
            </div>
            <div class="form-group">    
                <label for="option2">Option 2</label> 
                <input type="text" class="form-control" name="option2" placeholder="Option 2"> 
            </div>
            <div class="form-group">    
                <label for="option3">Option 3</label> 
                <input type="text" class="form-control" name="option3" placeholder="Option 3"> 
            </div>
            <div class="form-group">    
                <label for="option4">Option 4</label> 
                <input type="text" class="form-control" name="option4" placeholder="Option 4"> 
            </div>
            
            <div class="form-group">
                <label for="answer_id">Answer </label> 
                <input type="text" class="form-control" name="answer_id" placeholder="Answer"> 
            </div>
            
                <button type="submit" class="btn btn-primary" name="register">Submit</button> 
        </form> 
      </div> 
    </div> 
  </div> 
 
  <div class="col-sm-6"> 
    <div class="card"> 
        <div class="card-body"> 
            <h5 class="card-title">Upload CSV File</h5> 
        <form action="" method="post" name="uploadCS" enctype="multipart/form-data"> 
            <div class="form-group"> 
                <label for="exampleFormControlFile1">Example file input</label> 
                <input type="file" class="form-control-file" id="file" name="file" accept=".csv"> 
            </div> 
            <button type="submit" name="import" class="btn btn-primary" id="submit">Submit</button> 
        </form> 
        
      </div> 
    </div> 
  </div> 
</div> 
<script type="text/javascript"> 
     $(document).ready( 
     function() { 
          $("#frmCSVImport").on( 
          "submit", 
          function() { 
 
               $("#response").attr("class", ""); 
               $("#response").html(""); 
               var fileType = ".csv"; 
               var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" 
                         + fileType + ")$"); 
               if (!regex.test($("#file").val().toLowerCase())) { 
                    $("#response").addClass("error"); 
                    $("#response").addClass("display-block"); 
                    $("#response").html( 
                              "Invalid File. Upload : <b>" + fileType 
                                        + "</b> Files."); 
                    return false; 
               } 
               return true; 
          }); 
     }); 
</script> 
</body>
</html>       
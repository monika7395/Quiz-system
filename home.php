<?php 
//error_reporting(0);
//ini_set('display_errors', 0);
include('server.php'); 
include_once('connection.php');?>


<?php
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en-US">
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
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<!--link href="https://fonts.googleapis.com/css/family=plat" rel="stylesheet">
<link rel="stylesheet" href="login.css"-->



       
          <script>
          var mins = 60;  
 
          //calculate the seconds  
          var secs = mins * 60;  
 
          //countdown function is evoked when page is loaded  
          function countdown() {  
               setTimeout('Decrement()', 60);  
          }  
 
          //Decrement function decrement the value.  
          function Decrement() {  
               if (document.getElementById) {  
                    minutes = document.getElementById("minutes");  
                    seconds = document.getElementById("seconds");  
 
                    //if less than a minute remaining  
                    //Display only seconds value.  
                    if (seconds < 59) {  
                         seconds.value = secs;  
                    }  
 
                    //Display both minutes and seconds  
                    //getminutes and getseconds is used to  
                    //get minutes and seconds  
                    else {  
                         minutes.value = getminutes();  
                         seconds.value = getseconds();  
                    }  
                    //when less than a minute remaining  
                    //colour of the minutes and seconds  
                    //changes to red  
                    if (mins < 1) {  
                         minutes.style.color = "red";  
                         seconds.style.color = "red";  
                    }  
                    //if seconds becomes zero,  
                    //then page alert time up  
                    if (mins < 0) {  
                         alert('time up');
                         minutes.value = 0;  
                         seconds.value = 0; 
                         $(".btn").show();
                         $(".next_q").hide();
                    //document.getElementById("form1").submit();
                    }  
                    //if seconds > 0 then seconds is decremented  
                    else {  
                         secs--;  
                         setTimeout('Decrement()', 1000);  
                    }  
               }  
          }  
 
          function getminutes() {  
               //minutes is seconds divided by 60, rounded down  
               mins = Math.floor(secs / 60);  
               return mins;  
          }  
 
          function getseconds() {  
               //take minutes remaining (as seconds) away  
               //from total seconds remaining  
               return secs - Math.round(mins * 60);
          }  
               </script>

     
<style>
li.test { display:none; }
li.activequestion{ display:block; }
.card{
      box-shadow: 0px 14px 28px rgba(34, 34, 3,0.22);
      opacity: 0.2%;
 }
 h4{
    font-family: 'Sofia';font-size: 22px;
}
img{
  width: 120px;
}
</style>
</head>  
<!-- onload function is evoke when page is load -->  
<!--countdown function is called when page is loaded -->  
 
<body onload="countdown()"> 
<div class="container-fluid">
  <img src="img/UPTRICKS LOGO Transpernt.png" />
  <h4 class="head text-center"style="margin-top:-6%;font-weight:bold;font-size:30px;">Online Test</h4>
  <div class="panel">
  <div class="dropdown"style="float:right;margin-top:-3%;">
  <img src="img/profile.png" style="width: 30px; heigth:30px;margin-right:5px;">
  <u><?php echo $_SESSION['username'];?></u>
  <button class="btn-sm btn-info dropdown-toggle" type="button" data-toggle="dropdown"style="margin-left:15px;">
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  <li><a href="login.php">Sign Out</a></li>
  <li><a href="#myModal"  data-target="#myModal"data-toggle="modal">Help</a></li>
  </ul>
  
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <img src="img/maps-and-flags (1).png"style="width:20px;"/>&nbsp; UpTricks Services Pvt. Ltd.
       Third Floor, Gagangiri Park,
       Opposite Eklavya Polytechnic College,
       Eklavya Colony, Kothrud, Pune, Maharashtra<br/>
       <img src="img/phone-call.png"style="width:20px;"/>&nbsp; +91 7030674732<br/>
       <img src="img/email-envelope-outline-shape-with-rounded-corners.png"style="width:20px;"/>&nbsp; info@uptricksservices.com
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

  </div>
  </div>
</div>
  
<div class="container">

     <br><h1 class="text-center text-primary" style="font-weight:bold;color:rgb('171, 17, 191');margin-top:1%;">Uptricks Screening Process</h1><br>
       <h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2><br>
      

<div>  
          Time Left ::  
          <input id="minutes" type="text" style="width: 20px;  
               border: none; font-size: 16px;  
               font-weight: bold; color: black;">  : 
                               
          <input id="seconds" type="text" style="width: 20px;  
                              border: none; font-size: 16px;  
                              font-weight: bold; color: black;">  
     </div><br>
    
      </div> 
<div class="container">     
<div class="card ">
  <?php
$sq = "select * from questions_table order by rand()";
$result = mysqli_query($conn, $sq);
while($row=mysqli_fetch_array($result)){ ?>
<li class="test " id="id_<?php echo $row['id']; ?>" >
<div class="card-header">
<?php echo $row['question']; /* here display the stuff */ ?><br>
</div>
  <form action="check.php" method="post" id="form1">
  <div class="card-body">
  <input type="radio" name="response[<?php echo $row['id']?>]" id="op1" value="<?php echo $row['a1']; ?>"><span id="op1text">&nbsp;<?php echo $row['a1']; ?></span><br/>
  <input type="radio" name="response[<?php echo $row['id']?>]" id="op2" value="<?php echo $row['a2']; ?>"><span id="op2text">&nbsp;<?php echo $row['a2']; ?></span><br/>
  <input type="radio" name="response[<?php echo $row['id']?>]" id="op3" value="<?php echo $row['a3']; ?>"><span id="op3text">&nbsp;<?php echo $row['a3']; ?></span><br/>
  <input type="radio" name="response[<?php echo $row['id']?>]" id="op4" value="<?php echo $row['a4']; ?>"><span id="op4text">&nbsp;<?php echo $row['a4']; ?></span><br/>
  
</li>  
<?php }
?>
</div>
 </div><br><br>
 <div class="container">
	   <center><span class="prev_q btn btn-info"style="margin-right:100px;">&laquo; Prev</span> 
        <input type="submit" class="btn btn-danger" name="submit_test" id="submit_test" value="Submit Test" style="display:none;">	   
       <span class="next_q btn btn-info">Next &raquo;</span></center>
		</form>
		</div>
	 <br><br>
<h5 class="text-center">@Uptricks Services</h5> 
</div> 
</body>
</html>


<script>
jQuery(document).ready(function(){
jQuery('li.test:first').addClass('activequestion');

jQuery('.next_q').click(function(){
var nonext=jQuery('.test:last').hasClass('activequestion');
if(nonext)
{ alert("no next available"); 
$(".btn").show();
$(".next_q").hide();
}
var currentdiv=jQuery('.activequestion').attr('id');
jQuery('.test.activequestion').next().addClass('activequestion');
jQuery('#'+currentdiv).removeClass('activequestion');
});

jQuery('.prev_q').click(function(){
var noprevious=jQuery('.test:first').hasClass('activequestion');
if(noprevious)
{ alert("no previous available"); return false; }
var currentdiv=jQuery('.activequestion').attr('id');
jQuery('.test.activequestion').prev().addClass('activequestion');
jQuery('#'+currentdiv).removeClass('activequestion');
});
});
</script>


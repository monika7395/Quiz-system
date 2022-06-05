<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start();
if(!isset($_SESSION['username'])){
   header('location:login.php');
}
require_once('connection.php');


?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.animateuse{
			animation: leelaanimate 0.5s infinite;
		}

@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}
</style>

   </head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-primary text-uppercase">Uptricks Screening Process</h1>
    	<br><br><br><br>
		<div class= "table-responsive">
      <table class="table text-center table-bordered table-hover">
	  <thead>
      	<tr>
      		<th colspan="3"> <h1 class="text text-success animateuse"style="font-weight:bold;"> Thank You for giving exam</h1></th>
      		
      	</tr>
	  </thead>
		  <tbody>
      	<tr>
		      	<td>
		      		Total number of questions
		      	</td>
		      	<td>
		      		Questions Attempted
		      	</td>	
		      	<td>
		      		Your score
		      	</td>
				  </tr>
<?php
	if(isset($_POST['submit_test'])){
        if(!empty($_POST['response'])){
        $que = mysqli_query($conn, "select * from questions_table");
        $row = mysqli_num_rows($que);?>
		<tr>
		       <td>
			       <?php echo $row; ?>
			   </td>
		<?php	    
		$count = count($_POST['response']);	?>   
			   <td>
			       <?php echo $count; ?>
			   </td>
		<?php
		$result = 0;
		$i = 1;
		
		$selected = $_POST['response'];
		while($rows = mysqli_fetch_array($que)){
			//print_r($rows['correct']);
			$checked =$rows['correct'] == $selected[$i];
			if($checked){
			   $result++;
			}
			$i++;
		}
		?>
		       <td>
					<?php $result;
					echo 'Result will display later'; ?>
			   </td>			   	   
		

		</tr>
		</tbody>
		</table>

	<?php
	$name = $_SESSION['username'];
	
	$sql = mysqli_query($conn, "select id from student where name='$name'");
	while($re = mysqli_fetch_array($sql)){
	  $id = $re['id'];
	}
	//echo $name = $r['name'];
	$query = "insert into student_exam(name, total_que, attempt, score, stud_id)values('$name', '$row', '$count', '$result', '$id')";
	mysqli_query($conn, $query);
	
	?>
	<div><br>
	<a href="login.php"><button type="submit" class="btn btn-primary"> LOGOUT</button> </a>&nbsp;&nbsp;&nbsp;
	<a href="feedback.php"><button type="submit" class="btn btn-danger"> Feedbacks</button> </a>

    </div>
    </div>
	</div>
	<?php
		}
	}
?>

</body>
</html>

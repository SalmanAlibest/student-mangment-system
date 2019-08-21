<?php
include('dbconn.php');
?>
<html>
    <head>
     <title>Student Mangment System</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/view-style.css">
    </head>   
    <body>
    <ul>
        <li>Home</li>
        <li>Gallery</li>
        <li>Gallery</li>
        <li>Feedback</li>
        <li><i class="fa fa-facebook-square fa-2x" style="color:cornflowerblue"></i></li>
        <li><i class="fa fa-instagram fa-2x" style="color:rgb(207, 20, 67)"></i></li>
        <li><i class="fa fa-twitter-square fa-2x"style="color:cornflowerblue"></i></li>
        <li><i class="fa fa-envelope-square fa-2x"style="color:tomato"></i></li>
        <li><i class="fa fa-plus-square fa-2x" style="color:darkgray"></i></li>        
    </ul>
	<form action="" method="post">
    <div  class="box">
            <h1 id="head">DELETE RECORD</h1>
    <label for="stud-id">Student-id:</label><br>
    <input type="text" id="stud-id" name="stud-id" size="30" placeholder="Enter Student Id" required autofocus><br><br>
    <button id="btn" name="btn">SUBMIT</button>
    </div>
     </form>
    </body>
</html>
<?php
if(isset($_POST['btn']))
{	
	$stud_id=$_POST['stud-id'];
	echo $stud_id;
	$query="DELETE FROM `student` WHERE `Id`='$stud_id'";
	$run=mysqli_query($con,$query);
	if($run==true)
	{
		header('location:dashboard.php');
	}
	else{
		header('location:delete.php');
	}
}
	?>
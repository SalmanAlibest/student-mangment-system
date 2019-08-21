<?php
include('dbconn.php');
?>
<html>
    <head>
     <title>Student Mangment System</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/insert-style.css">
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
	<form action="" method="post" enctype="multipart/form-data"/>
    <div class="box">
            <h1 id="head">INSERT RECORD</h1>
    <label for="stud-id">Student-id:</label><br>
    <input type="text" id="stud-id" name="stud-id" size="30" placeholder="Enter Student Id" required autofocus><br><br>
    <label for="stud-rnum">Student-Roll#:</label><br>
    <input type="text" id="stud-rnum" name="stud-rnum" size="30" placeholder="Enter Student Roll-Number" required><br><br>
    <label for="stud-name">Student-Name:</label><br>
    <input type="text" id="stud-name" name="stud-name" size="30" placeholder="Enter Student Name" required><br><br>
    <label for="stud-city">Student-City:</label><br>
    <input type="text" id="stud-city" name="stud-city" size="30" placeholder="Enter Student City" required><br><br>
    <label for="stud-pcntct">Student-Pcontact:</label><br>
    <input type="text" id="stud-pcntct" name="stud-pcntct" size="30" placeholder="Enter Student Parent Number" required><br><br>
    <label for="stud-std">Student-Standard:</label><br>
    <input type="number" id="stud-std" size="3"name="stud-std"><br><br>
    <label for="std-img">Student-Image:</label><br><br>
    <input type="file" id="stud-img" name="std-img"><br><br>
    <button id="btn" name="btn">SUBMIT</button>
    </div>
     </form> 
    </body>
</html>
<?php
	
if(isset($_POST['btn']))
{	$id=$_POST['stud-id'];
	$rnum=$_POST['stud-rnum'];
	$name=$_POST['stud-name'];
	$city=$_POST['stud-city'];
	$pcontct=$_POST['stud-pcntct'];
	$stndrd=$_POST['stud-std'];
	$img=$_FILES['std-img']['name'];
	$image=$_FILES['std-img']['tmp_name'];
	move_uploaded_file($image,"images/$img");
	$query="INSERT INTO `student`(`Id`, `RollNum`, `Name`, `City`, `Pcontact#`, `Standard`, `Image`) 
	VALUES ('$id','$rnum','$name','$city','$pcontct','$stndrd','$img');";
	$run=mysqli_query($con,$query);
	if($run==true)
	{
		header('location:dashboard.php');
	}
	else{
		header('location:insert.php');
	}

}
?>
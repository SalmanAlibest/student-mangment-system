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
	<form action="" method="post" enctype="multipart/form-data">
    <div class="box">
            <h1 id="head">UPDATE RECORD</h1>
    <label for="stud-id">Student-id:</label><br>
    <input type="text" id="stud-id" name="stud-id" size="30" placeholder="Enter Student Id"  autofocus><br><br>
    <label for="stud-rnum">Student-Roll#:</label><br>
    <input type="text" id="stud-rnum" name="stud-rnum" size="30" placeholder="Enter Student Roll-Number" ><br><br>
    <label for="stud-name">Student-Name:</label><br>
    <input type="text" id="stud-name" name="stud-name" size="30" placeholder="Enter Student Name" ><br><br>
    <label for="stud-city">Student-City:</label><br>
    <input type="text" id="stud-city" name="stud-city" size="30" placeholder="Enter Student City" ><br><br>
    <label for="stud-pcntct">Student-Pcontact:</label><br>
    <input type="text" id="stud-pcntct" name="stud-pcntct" size="30" placeholder="Enter Student Parent Number"><br><br>
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
{	
	echo	$id=$_POST['stud-id'];
	echo	$rnum=$_POST['stud-rnum'];
	echo	$stud_name=$_POST['stud-name'];
	echo	$city=$_POST['stud-city'];
	echo	$pcontct=$_POST['stud-pcntct'];
	echo	$stndrd=$_POST['stud-std'];
			$img=$_FILES['std-img']['name'];
			$image=$_FILES['std-img']['tmp_name'];
			move_uploaded_file($image,"images/$img");
		
	if($id==true && $rnum==true && $stud_name==true && $city==true && $pcontct==true && $stndrd==true && $img==true)
{
$query="UPDATE `student` SET `Id`='$id',`RollNum`='$rnum',`Name`='$stud_name',`City`='$city',
	`Pcontact#`='$pcontct',`Standard`='$stndrd',`Image`='$img' WHERE `Id`='$id';";
	}
else if($id==true && $stud_name==true)
{
	$query="UPDATE `student` SET `Id`=['$id'],`Name`=['$stud_name'] WHERE`Id`='$id';";

}
else if($id==true && $city==true)
{
	$query="UPDATE `student` SET `Id`=['$id'],`City`=['$city'] WHERE`Id`='$id';";
}
else if($id==true && $pcontct==true)
{
	$query="UPDATE `student` SET `Id`=['$id'],Pcontact#`=['$pcontct'] WHERE`Id`='$id';";
}
else if($id==true && $stndrd==true)
{
	$query="UPDATE `student` SET `Id`=['$id'],`Standard`=['$stndrd'],WHERE`Id`='$id';";
}
else if($id==true && $img==true )
{
	$query="UPDATE `student` SET `Id`=['$id'],`Image`=['$img'] WHERE`Id`='$id';";
}
else if($id==true && $rnum==true )
{
	$query="UPDATE `student` SET `Id`=['$id'],`RollNum`=['$rnum'],WHERE`Id`='$id';";
}
else{
	header('location:update.php');
}	
echo "Running";
$conn=mysqli_connect('localhost','root','','sms');
$run=mysqli_query($conn,$query);
echo "Run".$run;
if($run==true)
header('location:dashboard.php');
else{
	header('location:update.php');
}
}
?>
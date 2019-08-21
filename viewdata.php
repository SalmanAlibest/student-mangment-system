<?php
include('dbconn.php');
?>
<html>
    <head>
     <title>Student Mangment System</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/view-style.css">
    <style>
	
	</style>
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
	
	<?php showdata();?>
	</body>
</html>
	<?php
	function showdata(){
	global $con;
	$stud_id=$_GET['stud-id'];
	$query="SELECT * FROM `student` WHERE `Id`='$stud_id';";
	$run=mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	if($row==true)
	{ 	$data=mysqli_fetch_assoc($run);
		/*echo "".$id=$data['Id']."<br>";
		echo "".$rnum=$data['RollNum']."<br>";
		echo "".$name=$data['Name']."<br>";
		echo "".$city=$data['City']."<br>";
		echo "".$cont=$data['Pcontact#']."<br>";
		echo "".$stnd=$data['Standard']."<br>";*/
				$img=$data['Image'];
				$a= "images/".$img;			
				
	?>
	<table style="border: 3px solid white; width:900; height:500; margin-left:200px; font-size:25px; color:white; border-collapse:collapse; text-align:left;">
	<tr >
	<th>Student Id:</th>
	<td style="border: 2px solid white; border-collapse: collapse;"><?php echo $data['Id'] ?></td>
	</tr>
	<tr>
	<th style="border: 2px solid white; border-collapse:collapse;">Student Roll#:</th>
	<td style="border: 2px solid white; border-collapse:collapse;"><?php echo $data['RollNum'] ?></td>
	</tr style="border: 2px solid white; border-collapse:collapse;">
	<tr style="border: 2px solid white; border-collapse:collapse;">
	<th style="border: 2px solid white; border-collapse:collapse;">Student Name:</th>
	<td style="border: 2px solid white; border-collapse: collapse;"><?php echo $data['Name'] ?></td>
	</tr>
	<tr style="border: 2px solid white; border-collapse: collapse;">
	<th style="border: 2px solid white; border-collapse: collapse;">Student City:</th>
	<td style="border: 2px solid white; border-collapse: collapse;"><?php echo $data['City'] ?></td>
	</tr>
	<tr style="border: 2px solid white; border-collapse: collapse;">
	<th style="border: 2px solid white; border-collapse: collapse;">Student Contact:</th>
	<td style="border: 2px solid white; border-collapse: collapse;"><?php echo $data['Pcontact#'] ?></td>
	</tr>
	<tr style="border: 2px solid white; border-collapse: collapse;">
	<th style="border: 2px solid white; border-collapse: collapse;">Student Standard:</th>
	<td style="border: 2px solid white; border-collapse: collapse;"><?php echo $data['Standard'] ?></td>
	</tr>
	<tr style="border: 2px solid white; border-collapse: collapse;">
	<th style="border: 2px solid white; border-collapse: collapse;">Student Image:</th>
	<td style="border: 2px solid white; border-collapse: collapse;"><img src="<?php echo $a?>" height="150" width="150"/></td>
	</tr>
	</table>
<?php }} ?>

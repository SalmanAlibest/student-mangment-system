<html>
<title>
INSERT PICTURE 
</title>
<head>
<h1>
Inserting Picture 
</h1>
</head>
<body>
<form method="post" action="insertimg.php" enctype="multipart/form-data"/>
<input type="file" name="img" requird="required"/>
<input type="submit" name="submit" value="Enter=>"/>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$imagename=$_FILES['img']['name'];
$tempimgname=$_FILES['img']['tmp_name'];
$conn=mysqli_connect('localhost','root','','db1')
or die(mysqli_error());
move_uploaded_file($tempimgname,"images/$imagename");
$sql="INSERT INTO `dbimg`(`Image`) VALUES ('$imagename')";
$run=mysqli_query($conn,$sql);
echo "Uplaod";
}
?>
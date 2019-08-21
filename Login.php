<?php
include('dbconn.php');
?>
<html>
    <head>
     <title>Student Mangment System</title>
     <link rel="stylesheet" href="css/index-style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="box">
    <h1 id="head">ADMIN LOGIN</h1>
        <form action="" method="post">
        <div>
            <label for="adm-name">Admin-Name:</label>
            <input type="text" size="30" name="adm-name" id="adm-name" placeholder="Enter Name" required autofocus><br><br><br>
            <label for="adm-pwd">Admin-Password:</label>
            <input type="password" size="30" name="adm-pwd" id="adm-pwd" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Contain at least one number and one uppercase and lowercase letter" required><br><br>
           <button id="btn" name="btn">SUBMIT</button> 
        </div>
    </form>
</div>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
    $username=$_POST['adm-name'];
    $userpwd=$_POST['adm-pwd'];
$query="SELECT * FROM `admin` WHERE `Admin-Name`='$username' and `Admin-Password`='$userpwd';";
$run=mysqli_query($con,$query);
$row=mysqli_num_rows($run);
echo $row;
if($row==true)
{
    $data=mysqli_fetch_assoc($run);
    $id=$data['Admin-Name'];
    session_start();
    $_SESSION['uid']=$id;
    header('location:dashboard.php');
}
else
{
    header('location:Login.php');
}


}
?>

<?php
include('dbconn.php');
session_start();
 $uid=$_SESSION['uid'];
if($uid == true)
{
	
}
?>
    <html>
    <head>
     <title>Student Mangment System</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/dashboard-style.css">
    </head>   
    <body>
       
    <ul class="top">
        <li class="menu">Home</li>
        <li class="menu">Gallery</li>
        <li class="menu">Gallery</li>
        <li class="menu">Feedback</li>
        <li class="menu"><i class="fa fa-facebook-square fa-2x" style="color:cornflowerblue"></i></li>
        <li class="menu"><i class="fa fa-instagram fa-2x" style="color:rgb(207, 20, 67)"></i></li>
        <li class="menu"><i class="fa fa-twitter-square fa-2x"style="color:cornflowerblue"></i></li>
        <li class="menu"><i class="fa fa-envelope-square fa-2x"style="color:tomato"></i></li>
        <li class="menu"><i class="fa fa-plus-square fa-2x" style="color:darkgray"></i></li>        
    </ul>
    <h1>ADMIN DASH BOARD</h1>
	<h2 style="color:white; margin-left:50px;"> Admin Name:  <?php echo "".$uid;?> </h2>
    </html>
	<html>
        <div>
       <div id="op"><a href="logout.php">Logout</a> </div><div id="op"><a href="admin-pwd.php">Change-Password</a></div>
    <ul>
          <li class="menu"><a href="view.php">View Student Record</a></li>
          <li class="menu"><a href="insert.php">Insert Student Record</a></li>
          <li class="menu"><a href="update.php">Update Student Record</a></li>
          <li class="menu"><a href="delete.php">Delete Student Record</a></li>
      </ul> 
    </div>
</body>
</html>

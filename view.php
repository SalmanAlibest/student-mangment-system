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
    <form action="viewdata.php" method="get">
	<div  class="box">
	<h1 id="head">VIEW RECORD</h1>
    <label for="stud-id">Student-id:</label><br>
    <input type="text" id="stud-id" name="stud-id" size="30" placeholder="Enter Student Id" required autofocus><br><br>
   <button id="btn" name="btn">SUBMIT</button>
    </div>
    </form>  
    </body>
</html>

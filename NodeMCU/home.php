<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, 		initial-scale=1">
		<link rel="stylesheet" 		href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" 		href="https://fonts.googleapis.com/css?family=Lobster">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #900C3F;
			width: 100%;
		}

		ul.topnav li {float: left;width:20%;font-size: 17px;}

		ul.topnav li a {
			display: block;
			color: #FFFE33;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #C70039;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		.w3-lobster {
 		 font-family: "Lobster", serif;
		}
		</style>
		
		<title>Home</title>
	</head>
	
	<body>
		<div class="w3-container w3-lobster">
  		<p class="w3-xxxlarge">Student Attendance Portal</p>
		</div>
		<ul class="topnav">
			<li><a class="active" href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="Attendance.php">Attendance</a></li>
		</ul>
		<br>
		<h3><b>Welcome to Student Attendance Portal</b></h3>
		
		<img src="attd.jpg" alt="" style="width:55%;">
	</body>
</html>
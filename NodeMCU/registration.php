
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
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		
		}
		
		textarea {
			resize: none;
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
		.w3-lobster {
 		 font-family: "Lobster", serif;
		}
		input[type=text],select {
  		width: 100%;
  		padding: 12px 20px;
  		margin: 8 px 0;
  		box-sizing: border-box;
  		border: 1.5px solid #ccc;
  		-webkit-transition: 0.5s;
  		transition: 0.5s;
  		outline: none;
		}

		input[type=text]:focus {
 		 border: 1.5 px solid #555;
		}
		
		.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #900C3F;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color:#C70039 ;
  color: black;
}
</style>
		<title>Registration</title>
		
		
	</head>
	
	<body>
		<center>
		<div class="w3-container w3-lobster">
  		<p class="w3-xxxlarge">Student Attendance Portal</p>
		</center>
		</div>
		<ul class="topnav">
			<li><a href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a class="active" href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="Attendance.php">Attendance</a></li>
		</ul>

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:500px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					
					<div class="w3-container w3-lobster">
  				<p class="w3-xlarge"><h3 align="center">Registration Form</h3></p>
		
		</div>
					
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post" >
					<div class="control-group">
						<label class="control-label">ID</label>
						<div class="controls">
						<input type="text" textarea name="id" id="getUID" placeholder="Please Tag your Card / Key Chain to display ID" rows="5" cols="30" required></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
						<input id="div_refresh" name="name" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Gender</label>
						<div class="controls">
							<select name="gender">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls">
							<input name="email" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Mobile Number</label>
						<div class="controls">
							<input name="mobile" type="text"  placeholder="" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Semester</label>
						<div class="controls">
							<select name="sem">
								<option value="1">Sem I</option>
								<option value="2">Sem II</option>
								<option value="3">Sem III</option>
								<option value="4">Sem IV</option>
								<option value="5">Sem V</option>
								<option value="6">Sem VI</option>
								<option value="7">Sem VII</option>
								<option value="8">Sem VIII</option>
							</select>
						</div>
					</div>

					<br>
					
					<div class="form-actions">
						<button type="submit" class="block">Save</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->	
	</body>
</html>
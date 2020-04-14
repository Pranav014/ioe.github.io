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
		
		.table {
			margin: auto;
			width: 85%; 

		}
		
		thead {
			
			color: #FFFFFF;
		}
		.w3-lobster {
 		 font-family: "Lobster", serif;
		}
		</style>
		
		<title>User Data</title>
	</head>
	
	<body>
		<div class="w3-container w3-lobster">
  		<p class="w3-xxxlarge">Student Attendance Portal</p>
		</div>
		<ul class="topnav">
			<li><a href="home.php">Home</a></li>
			<li><a class="active" href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="Attendance.php">Attendance</a></li>
		</ul>
		<br>
		<div class="container">
            <div class="row">
                <h3><b>User Data Table</b></h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="#581845" color="#FFFFFF">
                      <th><center>Name</th>
                      <th><center>ID</th>
			<th><center>Gender</th>
			<th><center>Email</th>
                      <th><center>Mobile Number</th>
			<th><center>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM Users ORDER BY name ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['Name'] . '</td>';
                            echo '<td>'. $row['ID'] . '</td>';
                            echo '<td>'. $row['Gender'] . '</td>';
							echo '<td>'. $row['Email'] . '</td>';
							echo '<td>'. $row['Number'] . '</td>';
							echo '<td><a class="btn btn-success" href="user data edit page.php?id='.$row['ID'].'">Edit</a>';
							echo ' ';
							echo '<a class="btn btn-danger" href="user data delete page.php?id='.$row['ID'].'">Delete</a>';
							echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
				</table>
			</div>
		</div> <!-- /container -->
	</body>
</html>

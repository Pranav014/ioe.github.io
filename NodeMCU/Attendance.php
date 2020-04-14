
<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
	require 'database.php';
	//$id = $UIDresult;
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
			input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
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
			margin: 0;
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
		.table {
			margin: 5px auto;
			width: 65%; 
}
		thead {
			
			color: #FFFFFF;
		}
		input[type=text] {
  		width: 100%;
  		padding: 12px 20px;
  		margin: 8 px 0;
  		box-sizing: border-box;
  		border: 1.5px solid #ccc;
  		-webkit-transition: 0.5s;
  		transition: 0.5s;
  		outline: none;
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

select {
        width: 100%;
        margin: 0px;
    }
    .invisible{
    	visibility: invisible;
    }
    #atten{
    	visibility: invisible;
    }
     

		</style>
		
		<title>Attendance Report</title>
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
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a  class="active" href="Attendance.php">Attendance</a></li>
		</ul>

		<div class="container">
			<br>
			<div class="center" style="margin-left: 123px; width:900px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<center>
		<div class="w3-container w3-lobster">
  		<p class="w3-xlarge"><b>Attendance Report</b></p>
		</center>
					
				</div>
				<br>
				<form class="form-horizontal" action="Attendance.php" method="post" >
					
					<div class="control-group">
						<label class="control-label">Student</label>
						<div class="controls">
							<select name="student">
								<option value="Pranav Khismatrao">Pranav</option>
								<option value="Vallari Manavi">Vallari</option>
								<option value="Vaibhav Jambhale">Vaibhav</option>
								<option value="Anjali Diwate">Anjali</option>
								<option value="Tanmay Doke">Tanmay</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">From</label>
						<div class="controls">
							<input id="div_refresh" name="From_date" type="date"  placeholder="" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">To</label>
						<div class="controls">
							<input id="div_refresh" name="to_date" type="date"  placeholder="" required>
						</div>
					</div>
				

					<br>
					
					<div class="form-actions">
						<button type="submit" class="block">See Attendance</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->
<div class="invisible" style="margin-left: 228px; width:900px; border-style: solid; border-color: #f2f2f2;">
	<b>NAME: </b>
	<?php 
	$name = $_POST['student'];
	echo "<b>".$name."</b>";
	if($name != null){

	?>
	 <style type="text/css">
            .invisible {
                visibility:visible;
            }
        </style>
	<br>
	<b>FROM: </b>
	<?php 
	$from_date = $_POST['From_date'];
$to_date = $_POST['to_date'];
echo $from_date;
	
?>
<br>
<b>TO: </b>
<?php 
echo $to_date;
}
?>
</div>
<div class="row" >
		<table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="#581845" color="#FFFFFF">
                      
                     <th><center>Subject</th>
			<th><center>Attendance</th>
                    </tr>
                  </thead>
                  <tbody>
 <?php
 if ( !empty($_POST)) {



//echo $sub."  ".$from_date."  ".$to_date."<br>";
$subject = array();
$subject['BDA'] = 1;
$subject['IOE'] = 2;
$subject['UID'] = 3;
$subject['DBM'] = 4;
$subject['R Prog'] = 5;
$subject['DevOps'] = 6;
//$sub = $_POST['sub'];
//$lectures = array()
foreach ($subject as $key => $value) {
	# code...


//String str = i;
$sql_exist = "SELECT COUNT(*) FROM attendance where SubjectID = ? and Date>= ? and Date<=? and Student_Name = ?";
	$q = $pdo->prepare($sql_exist);
	$q->execute(array($value,$from_date,$to_date,$name));
	$data1 = $q->fetch(PDO::FETCH_ASSOC);
	//echo $data1['COUNT(*)'];
	echo '<tr>';
    
    echo '<td>' . $key . '</td>';
	echo '<td>'. $data1['COUNT(*)']. '</td>';
    echo '</tr>';
}
}

?>
 </tbody>
				</table>
			</div>
	</body>
</html>

<?php
date_default_timezone_set("Asia/Calcutta");
$Today_day = date('l"');
$mydate=date("Y-m-d"); 
$static_time = '10:30:00';
$time = date("H:i:s");
	$UIDresult=$_POST["UIDresult"];
	$Write="<?php $" . "UIDresult='" . $UIDresult . "'; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);

	require 'database.php';
	$id = $UIDresult;
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM Users where id = ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($id));
	$data = $q->fetch(PDO::FETCH_ASSOC);

	
	//echo $time."<br>";
	//echo "Today is " . date("l");
	//$date_time = $mydate." ".$time;
	//echo $Today_day; //"$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
	//ubject_array[2];
	$sql_exist = "SELECT * FROM student_attendance where rfid = ? and in_Date=?";
	$q = $pdo->prepare($sql_exist);
	$q->execute(array($id,$mydate));
	$data1 = $q->fetch(PDO::FETCH_ASSOC);


	if($data1['Name'] == null){
		$sql_insert = "INSERT INTO  student_attendance (rfid,name,in_Date,in_Time,out_Time,Batch,Room) values(?, ?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql_insert);
		//$q->execute(array($id,$data['Name'],$mydate,$time,$time,'A2','617'));
		$q->execute(array($id,$data['Name'],$mydate,$time,$time,'A2','617'));
	}
	else{
		$Student_Name = $data1['Name'];
		$sql_update = "UPDATE student_attendance SET out_Time = ? where rfid='$id'";
		$q = $pdo->prepare($sql_update);
		$q->execute(array($time));


		$sql_post_update = "SELECT * FROM student_attendance where rfid = ? and in_Date=?";
		$qpost_update = $pdo->prepare($sql_post_update);
		$qpost_update->execute(array($id,$mydate));
		$data_post_update = $qpost_update->fetch(PDO::FETCH_ASSOC);





		$sql_exist = "SELECT * FROM 617_sem_8_tt where To_Time> ? and To_Time <= ? and Day = ?";
		$q = $pdo->prepare($sql_exist);
		$q->execute(array($data_post_update['in_Time'],$data_post_update['out_Time'],$Today_day));
		$x = 0;
		
		while($data_subjects = $q->fetch(PDO::FETCH_ASSOC)){
			echo $data_subjects['SubjectID']."  ".$data_subjects['From_Time'];
			//ubject_array[$x];
			// = $x+1;
			$sql_attendance = "INSERT INTO  attendance (SubjectID,date,From_Time,To_Time,Student_Name,Present) values(?, ?, ?, ?, ?, ?)";
			$q1 = $pdo->prepare($sql_attendance);
			$q1->execute(array($data_subjects['SubjectID'],$mydate,$data_subjects['From_Time'],$data_subjects['To_Time'],$Student_Name,1));
		}
		
		
		

	}
	
	Database::disconnect();


echo "<br><br>";

// Return date/time info of a timestamp; then format the output

?>
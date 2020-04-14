<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $sem = $_POST['sem'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO Users (name,id,gender,email,number,sem) values(?, ?, ?, ?, ?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$id,$gender,$email,$mobile,$sem));
		Database::disconnect();
		header("Location: user data.php");
    }
?>
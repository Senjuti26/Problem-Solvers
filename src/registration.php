<?php
	include("./includes/connection.php");
	
	//for creating unique id with database checked
	$f = 0;
	$id = "";
	while($f != 1){
		$temp_id = uniqid("UR");
		//query for checking the uniqueid is exist in table or not
		$sql = "SELECT * FROM user WHERE user_id='".$temp_id."'";	
		$q = mysqli_query($con,$sql);
		if(mysqli_num_rows($q)==0){
			$id = $temp_id;
			$f = 1;
		}
	}
	
	$user_id = $id;
	$name = $_POST["name"];
	$address = $_POST["address"];
	$phno = $_POST["phno"];
	$state=$_POST["state"];
	$city=$_POST["city"];
	$email = $_POST["email"];
	$password = md5($_POST["pas"]);

	$sql = "INSERT INTO user(user_id,name,address,phno,state,city,email,password) VALUES
	('".$user_id."','".$name."','".$address."','".$phno."','".$state."','".$city."','".$email."','".$password."')";
	$q=mysqli_query($con,$sql);
	if($q == 1){
		session_start();	
		$sql = "SELECT * FROM user WHERE user_id='".$user_id."'";
		$res = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($res)){
			$_SESSION["user_id"] = $rs["user_id"];
		}
		header("location:./index.php");
	}
	else{
		header("location:./error/insert_error.php");
	}
	mysqli_close($con);
?>
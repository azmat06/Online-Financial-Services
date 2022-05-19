<?php 	
	
	if (isset($_POST["bttn1"])) {
		
		$username=$_POST["username1"];
		$password=$_POST["pass1"];

		if($username=="" || $password==""){
			header("location: ../merchantlogin.php?error=emptyinput");
			exit();
		}
		require_once '../db_connect.php';
		$sql="select * from account WHERE username='".$username."' AND password='".$password."';";
		$result = mysqli_query($conn, $sql);
		$accountresult = mysqli_fetch_all($result, MYSQLI_ASSOC);
		// mysql_close($conn);

		if($accountresult[0]["username"]==$username && $accountresult[0]["password"]==$password){
			session_start();
			$_SESSION['accuid']=$accountresult[0]["account_id"];
			$_SESSION['acctype']='merchant';
			$_SESSION['useruid']=$username;
			header("location: ../merchantlogin.php?error=successmerchant");
			header('location: ../dashboard.php');
			exit();
		}else{
			header("location: ../merchantlogin.php?error=invalidinput");
			
			exit();
		}
	}else{
		header("location: ../merchantlogin.php");
		exit();
	}
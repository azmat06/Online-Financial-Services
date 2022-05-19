<?php 
	
	
	if (isset($_POST["bttn2"])) {
		
		$username=$_POST["username1"];
		$password=$_POST["pass1"];

		if($username=="" || $password==""){
			header("location: ../adminlogin.php?error=emptyinput");
			exit();
		}
		require_once '../db_connect.php';
		$sql="select * from admin WHERE username='".$username."' AND password='".$password."';";
		$result = mysqli_query($conn, $sql);
		$accountresult = mysqli_fetch_all($result, MYSQLI_ASSOC);
		// mysql_close($conn);

		if($accountresult[0]["username"]==$username && $accountresult[0]["password"]==$password){
			session_start();
			$_SESSION['accuid']=$accountresult[0]["admin_id"];
			$_SESSION['acctype']='admin';
			$_SESSION['useruid']=$username;
			header("location: ../adminlogin.php?error=successadmin");
			header('location: ../dashboard.php');
			exit();
		}else{
			header("location: ../adminlogin.php?error=invalidinput");
			exit();
		}
	}else{
		header("location: ../adminlogin.php");
		exit();
	}
	
	
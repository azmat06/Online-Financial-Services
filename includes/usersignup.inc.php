<?php 
	
	if(isset($_POST['bttn1'])){

		require_once '../db_connect.php';
		require_once 'functions.inc.php';

		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$bankacc=$_POST['bankacc'];

		$username=$_POST['username'];
		$pwd=$_POST['password'];
		$cpwd=$_POST['cpassword'];

		if(empty($fname) || empty($lname) || empty($email) || empty($mobile) || empty($bankacc) || empty($username) || empty($pwd) || empty($cpwd)){
			header('location: ../usersignup.php?error=emptyinput');
			exit();
		}
		if(uidIsInvalid($conn, $username)==true){
			header('location: ../usersignup.php?error=invaliduid');
			exit();
		}
		if(!is_numeric($mobile)){
			header('location: ../usersignup.php?error=invalidmobile');
			exit();
		}
		if(!is_numeric($bankacc)){
			header('location: ../usersignup.php?error=invalidbank');
			exit();
		}
		if($pwd != $cpwd){
			header('location: ../usersignup.php?error=passwordsdonotmatch');
			exit();
		}

		$sql1="insert into account(fname, lname, email, mobile_no, bank_acc_no, username, password) values('".$fname."','".$lname."','".$email."','".$mobile."','".$bankacc."','".$username."','".$pwd."');";
		if(mysqli_query($conn, $sql1)){


			$sql2="select account_id from account where username='".$username."';";
			$result=mysqli_query($conn, $sql2);
			$returnedlist=mysqli_fetch_all($result, MYSQLI_ASSOC);

			$account_id=$returnedlist[0]['account_id'];
			$sql3="insert into users(user_id, balance) values(".$account_id.",50);";
			if(mysqli_query($conn, $sql3)){
				header('location: ../usersignup.php?error=successuser');
				exit();
			}

			header('location: ../usersignup.php?error=fatalerroroccured');
			exit();

		}else{
			header('location: ../usersignup.php?error=unknownerror');
			exit();
		}


	}else{
		header('location: ../usersignup.php');
		exit();
	}
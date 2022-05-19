<?php 
	session_start();
	if(isset($_POST['bttn1'])){

		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$bankacc=$_POST['bankacc'];

		if(!is_numeric($mobile)){
			header('location: ../updateacc.willremovelater.php?error=invalidmobile');
			exit();
		}
		if(!is_numeric($bankacc)){
			header('location: ../updateacc.willremovelater.php?error=invalidbank');
			exit();
		}

		require_once '../db_connect.php';
		$sql="update account set fname='".$fname."', lname='".$lname."', email='".$email."', bank_acc_no='".$bankacc."', mobile_no='".$mobile."' where account_id=".$_SESSION['accuid'].";";
		if(mysqli_query($conn, $sql)) {
			header('location: ../updateacc.willremovelater.php?error=success');
			exit();
		}else{
			header('location: ../updateacc.willremovelater.php?error=plzkillme');
			exit();
		}
	}else{
		header('location: ../dashboard.php');
		exit();
	}
<?php 
	session_start();
	if(isset($_POST['bttn1'])){
		require_once '../db_connect.php';

		$amount=$_POST['amount'];
		$password=$_POST['password'];

		if(empty($amount) || empty($password)){
			header('location: ../feature3_depwith_withdraw.php?aid='.$_SESSION['dwaid'].'?error=emptyinput');
			exit();
		}
		if (!is_numeric($amount)) {
			header('location: ../feature3_depwith_withdraw.php?aid='.$_SESSION['dwaid'].'?error=invalidamount');
			exit();
		}
		$sql1="select * from account where account_id=".$_SESSION['accuid'].";";
		$result1=mysqli_query($conn, $sql1);
		$returnedlist1=mysqli_fetch_all($result1, MYSQLI_ASSOC);

		if($returnedlist1[0]['password'] != $password){
			header('location: ../feature3_depwith_withdraw.php?aid='.$_SESSION['dwaid'].'?error=incorrectpwd');
			exit();
		}

		$sql2="select * from users where user_id=".$_SESSION['accuid'].";";
		$result2=mysqli_query($conn, $sql2);
		$returnedlist2=mysqli_fetch_all($result2, MYSQLI_ASSOC);
		$newbalance= $returnedlist2[0]['balance'] - $amount;
		if($newbalance <=0){
			header('location: ../feature3_depwith_withdraw.php?aid='.$_SESSION['dwaid'].'?error=notenoughmoney');
			exit();
		}

		$sql3="update users set balance=".$newbalance." where user_id=".$_SESSION['accuid'].";";
		mysqli_query($conn, $sql3);

		//redundant
		$sql4="insert into withdraw(amount, user_id, agent_id) values(".$amount.", ".$_SESSION['accuid'].", ".$_SESSION['dwaid'].");";
		mysqli_query($conn, $sql4);

		header('location: ../feature3_depwith_withdraw.php?aid='.$_SESSION['dwaid'].'?error=success');
		exit();

	}else{
		header('location: ../dashboard.php');
		exit();
	}
<?php 
	session_start();
	if(isset($_POST['bttn1'])){

		$receiverid=$_POST['uid'];//reciever id
		$amount=$_POST['amount'];

		require_once '../includes/functions.inc.php';
		require_once '../db_connect.php';

		if(empty($receiverid) || empty($amount)){
			header('location: ../sendmoney.willremovelater.php?error=emptyinput');
			exit();
		}
		if(!is_numeric($amount)){
			header('location: ../sendmoney.willremovelater.php?error=invalidamount');
			exit();
		}
		if(!is_numeric($receiverid)){
			header('location: ../sendmoney.willremovelater.php?error=invalidid');
			exit();
		}
		if(accidIsInvalid($conn, $receiverid)){
			header('location: ../sendmoney.willremovelater.php?error=invalidaccid');
			exit();
		}
		

		$sql1="select * from users where user_id=".$receiverid.";";
		$sql2="select * from users where user_id=".$_SESSION['accuid'].";";

		$result1=mysqli_query($conn, $sql1);//receiver
		$result2=mysqli_query($conn, $sql2);//sender

		$record1=mysqli_fetch_all($result1, MYSQLI_ASSOC);//receiver
		$record2=mysqli_fetch_all($result2, MYSQLI_ASSOC);//sender

		$receiverbalance=$record1[0]['balance'];//receiver
		$senderbalance=$record2[0]['balance'];//sender

		if($senderbalance <= $amount){
			header('location: ../sendmoney.willremovelater.php?error=notenoughmoney');
			exit();
		}else{
			$newsenderbalance = $senderbalance - $amount;//-->2
			$newreceiverbalance = $receiverbalance + $amount;//-->1

			$sql1="update users set balance=".$newreceiverbalance." where user_id=".$receiverid.";";//receiver
			$sql2="update users set balance=".$newsenderbalance." where user_id=".$_SESSION['accuid'].";";//sender

			$sql3="insert into money_sent(amount, sender_id, receiver_id) values(".$amount.", ".$_SESSION['accuid'].", ".$receiverid.");";
			mysqli_query($conn, $sql1);
			mysqli_query($conn, $sql2);
			mysqli_query($conn, $sql3);

			header('location: ../sendmoney.willremovelater.php?error=transfersuccess');
			exit();
		}

	}else{
		header('location: ../dashboard.php');
		exit();
	}
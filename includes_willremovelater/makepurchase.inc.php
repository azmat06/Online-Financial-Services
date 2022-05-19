<?php 
session_start();
if(isset($_POST['bttn1'])){
	require_once '../db_connect.php';

	$merchantid=$_POST['merchantid'];
	$price=$_POST['price'];
	$serviceid=$_POST['serviceid'];

	$sql1="select balance from users where user_id=".$_SESSION['accuid'].";";
	$result1=mysqli_query($conn, $sql1);
	$list1=mysqli_fetch_all($result1, MYSQLI_ASSOC);
	$balance=$list1[0]['balance'];
	$newbalance= $balance - $price;

	if($newbalance<=0){
		header('location: ../feature3_makepurchase.php?error=notenoughmoney');
		exit();
	}

	$sql2="update users set balance =".$newbalance." where user_id=".$_SESSION['accuid'].";";

	$sql3="insert into transactions(merchant_id, user_id, service_id) values(".$merchantid.", ".$_SESSION['accuid'].", ".$serviceid.");";
	if(mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)){
		header('location: ../feature3_makepurchase.php?error=success');
		exit();
	}else{
		header('location: ../feature3_makepurchase.php?error=catastophicfailure');
		exit();
	}

}else{
	header('location: ../dashboard.php');
	exit();
}
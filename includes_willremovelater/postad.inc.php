<?php 
session_start();
if (isset($_POST['bttn1'])) {
	require_once "../db_connect.php";

	$sname=$_POST['sname'];
	$price=$_POST['price'];
	$sdetails=$_POST['sdetails'];

	if(empty($sname) || empty($price) || empty($sdetails)){
		header('location: ../feature3_postservicead.php?error=emptyinput');
		exit();
	}
	if(!is_numeric($price)){
		header('location: ../feature3_postservicead.php?error=invalidprice');
		exit();
	}

	$sql="insert into services(s_name, merchant_id, price, s_details) values('".$sname."', ".$_SESSION['accuid'].", ".$price.", '".$sdetails."');";
	mysqli_query($conn, $sql);
	header('location: ../feature3_postservicead.php?error=success');
	exit();

}else{
	header('location: ../dashboard.php');
	exit();
}
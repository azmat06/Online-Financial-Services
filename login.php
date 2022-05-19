<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ProjTitle</title>
	<link rel="stylesheet" type="text/css" href="css/indexStyle.css">
	<link rel="stylesheet" type="text/css" href="css/form-design.css">
	<link rel="stylesheet" type="text/css" href="css/signupANDlogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "icon" href = "image/pageIco.png" type = "image/x-icon">
	<script type="text/javascript" src=js/index.js></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
	<?php 
		include_once 'header.php';
	 ?>
	<section class="main">
		<?php include_once 'aside.php' ?>

		<main id="mainshit" class="form-style">
			<section class="container1">
				<div class="container5">Log In</div>
				<div class="container6 plus"><a href="userlogin.php"><i class="fas fa-user-alt" style='font-size: 20vh'></i>Sign in as User</a></div>
				<div class="container6"><a href="adminlogin.php"><i class="fas fa-cat" style='font-size: 20vh'></i>Sign in as Admin</a></div><br>
				<div class="container6 plus"><a href="agentlogin.php"><i class="fas fa-users" style='font-size: 20vh'></i>Sign in as Agent</a></div>
				<div class="container6"><a href="merchantlogin.php"><i class="fas fa-user-tie" style='font-size: 20vh'></i>Sign in as Merchant</a></div>
			</section>
		</main>

	</section>
	<?php include('footer.php'); ?>

</html>
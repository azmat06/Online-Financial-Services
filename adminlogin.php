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
				<div class="container5">Login</div>
				<div class="container7">
					<span><i class="fas fa-cat" style='font-size: 2vw;color:red;'></i> Sign in as Admin</span>
					<form class="form-style" action="includes/adminlogin.inc.php" method="post">
						<i class="fa fa-drivers-license" style="width: 2vw;"></i>
						<input type="text" name="username1" class="tbox" placeholder="Enter your username"><br>
						<i class="fa fa-unlock-alt" style="width: 2vw;"></i>
						<input type="Password" name="pass1" class="tbox" placeholder="Enter your password"><br>
						<input type="submit" class="button1" name="bttn2" value="Sign In">
					</form>
				</div>
				<?php if(isset($_GET["error"])){
					if($_GET["error"]=="emptyinput"){
						echo '<div class="errmessage" style="width:100%; text-align: center;">Please fill out all the fields</div>';
					}else if($_GET["error"]=="invalidinput"){
						echo '<div class="errmessage" style="width:100%; text-align: center;">Incorrect username or password! Please try again.</div>';
					}else if($_GET["error"]=="successadmin"){
						echo '<div class="errmessage" style="width:100%; text-align: center;">You have signed up successfully</div>';
					}
				}
				?>
			</section>
		</main>

	</section>
	<?php include('footer.php'); ?>

</html>
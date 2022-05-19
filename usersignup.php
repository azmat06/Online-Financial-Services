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
	<link rel="stylesheet" type="text/css" href="css/signupform.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "icon" href = "image/pageIco.png" type = "image/x-icon">
	<script type="text/javascript" src=js/index.js></script>
</head>
<body>
	<?php 
		include_once 'header.php';
	 ?>
	<section class="main">
		<?php include_once 'aside.php' ?>

		<main id="mainshit" class="form-style">
			<section class="container1">
				<div class="container2">Sign up as User</div>
				<div class="container4">
					<div class="container3">
						<form action="includes/usersignup.inc.php" method="post">
							<fieldset>
								<legend>Fill up the form below:</legend>
								<label>Name:</label>
								<input type="text"  class="tbox row1" name="fname" value="" placeholder="First">
								<input type="text" value="" class="tbox row1" name="lname" placeholder="Last"><br>
								<label>Email:</label>
								<input type="email" value="" class="tbox row2" name="email" placeholder="john@example.net"><br>
								<label for="field4">Mobile no.</label>
								<input type="text" value="" class="tbox row3" name="mobile" placeholder="Mobile Number">
								<label for="field4">Bank Account no.</label>
								<input type="text" value="" class="tbox row3" name="bankacc" placeholder="Bank Account Number"><br>
								<label>Username:</label>
								<input type="text" value="" class="tbox row4" name="username" placeholder="Username (Display Name)"><br>
								<label>Password:</label>
								<input type="password" value="" class="tbox row5" name="password" placeholder="Password"><br>
								<label>Confirm password:</label>
								<input type="password" value="" class="tbox row6" name="cpassword" placeholder="Re-enter Password"><br>

								<input type="submit" class="button1" name="bttn1" value="Create Account">
							</fieldset>
						</form>
					</div>
				</div>
				<?php 
				// error handling
				 ?>
			</section>
		</main>

	</section>
	<?php include('footer.php'); ?>

</html>
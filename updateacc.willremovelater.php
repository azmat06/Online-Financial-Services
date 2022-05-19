<?php
session_start();
require_once "db_connect.php";

$sqls="select * from account where account_id=".$_SESSION['accuid'].";";
$result=mysqli_query($conn, $sqls);
$returnedlist=mysqli_fetch_all($result, MYSQLI_ASSOC);

$fname=$returnedlist[0]['fname'];
$lname=$returnedlist[0]['lname'];
$email=$returnedlist[0]['email'];
$mobile=$returnedlist[0]['mobile_no'];
$bankacc=$returnedlist[0]['bank_acc_no'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ProjTitle</title>
	<link rel="stylesheet" type="text/css" href="css/indexStyle.css">
	<link rel="stylesheet" type="text/css" href="css/form-design.css">
	<link rel="stylesheet" type="text/css" href="css/featureDesign.css">
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
				<div class="container2">Example Heading</div>
				<div class="container4">

			<form action="includes_willremovelater/updateacc.inc.php" method="post">
							<fieldset>
								<legend>Update Account Info:</legend>
								<label>Name:</label>
								<input type="text"  class="tbox row1" name="fname" value=<?php echo $fname; ?> placeholder="First">
								<input type="text" value=<?php echo $lname; ?> class="tbox " name="lname" placeholder="Last"><br>
								<label>Email:</label>
								<input type="email" value=<?php echo $email; ?> class="tbox" name="email" placeholder="john@example.net"><br>
								<label for="field4">Mobile no.</label>
								<input type="text" value=<?php echo $mobile; ?> class="tbox" name="mobile" placeholder="Mobile Number">
								<label for="field4">Bank Account no.</label>
								<input type="text" value=<?php echo $bankacc; ?> class="tbox" name="bankacc" placeholder="Bank Account Number"><br>

								<input type="submit" class="button1" name="bttn1" value="Update Account">
							</fieldset>
			</form>
			<?php
			 	if(isset($_GET['error'])){
			 		if($_GET['error']=="invalidmobile"){
			 			echo "<div>Insert a valid mobile number</div>";
			 		}else if($_GET['error']=="invalidbank"){
			 			echo "<div>Insert a valid bank account number</div>";
			 		}else if($_GET['error']=="success"){
			 			echo "<div>Account info has been updated successfully</div>";
			 		}
			 	}
			 ?>

			 </div>
		</section>

		</main>

	</section>
	<?php include('footer.php'); ?>

</html>
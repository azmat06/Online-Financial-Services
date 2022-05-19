<?php
session_start();

require_once "db_connect.php";
$sqls="select s.merchant_id ,a.fname, a.lname, a.mobile_no, a.email, s.s_name, s.price, s.s_details, s.service_id from (services s inner join merchants m on s.merchant_id=m.merchant_id inner join account a on m.merchant_id=a.account_id) where service_id != all (select service_id from transactions where user_id=".$_SESSION['accuid'].");";
$result=mysqli_query($conn, $sqls);
$logs=mysqli_fetch_all($result, MYSQLI_ASSOC);
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


			<?php foreach($logs as $log): ?>

				<form method="post" action="includes_willremovelater/makepurchase.inc.php">
					<fieldset>
						<legend style="font-weight: bolder;"><?php echo $log['s_name']; ?></legend>
						<div><?php echo $log['s_details']; ?></div>
						<div style="float: right; font-weight: bolder;"><?php echo "$ ".$log['price']; ?></div>
						<div>Seller:<?php echo " ".$log['fname']." ".$log['lname']; ?></div>
						<div>Mobile number:<?php echo " ".$log['mobile_no']; ?></div>
						<div style="font-variant: normal;">EMAIL: <?php echo " ".$log['email']; ?></div>
						<input type="submit" name="bttn1" value="Purchase" style="float: right;" class="button1">
						<div style="display: none;">
							<input type="text" name="price" value=<?php echo $log['price']; ?>>
							<input type="text" name="merchantid" value=<?php echo $log['merchant_id']; ?>>
							<input type="text" name="serviceid" value=<?php echo $log['service_id']; ?>>
						</div>
					</fieldset>
				</form>
							

			<?php endforeach; ?>
			<?php if(isset($_GET['error'])){
				if($_GET['error']=='success'){
					echo "<div>Transaction Successful!</div>";
				}
			} ?>
			</div>
		</section>

		</main>

	</section>
	<?php include('footer.php'); ?>

</html>
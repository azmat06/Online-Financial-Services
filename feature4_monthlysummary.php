<?php
session_start();
require_once 'db_connect.php';
if(isset($_POST['bttn1'])){

	$month=$_POST['month'];
	$year=$_POST['year'];

	if(!is_numeric($month) || !is_numeric($year)){
		header('location: feature4_monthlysummary.php?error=emptyinput');
		exit();
	}
	$sql;
	if($_SESSION['acctype']=='user'){
		$sql="select a.fname, a.lname, m.merchant_id, t.transaction_id, t.date, t.service_id, s.s_name, s.price from (transactions t inner join merchants m on t.merchant_id=m.merchant_id inner join account a on m.merchant_id=a.account_id) inner join services s on t.service_id=s.service_id where t.user_id=".$_SESSION['accuid']."  and t.date like '".$year."-".$month."-_____:__:__' order by t.date desc;";
	}else if($_SESSION['acctype']=='merchant'){
		$sql="select a.fname, a.lname, u.user_id, t.transaction_id, t.date, t.service_id, s.s_name, s.price from (transactions t inner join users u on t.user_id=u.user_id inner join account a on u.user_id=a.account_id) inner join services s on t.service_id=s.service_id where t.merchant_id=".$_SESSION['accuid']." and t.date like '".$year."-".$month."-_____:__:__' order by t.date desc;";
	}
	$result=mysqli_query($conn, $sql);
	$logs=mysqli_fetch_all($result, MYSQLI_ASSOC);
}

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
			<form action="feature4_monthlysummary.php" method="post">
				<fieldset>
					<legend>Select Month</legend>
					
						<span>Choose month:</span>
						<select name="month">
							<option value="Month">Month</option>
							<option value="01">January</option>
							<option value="02">February</option>
							<option value="03">March</option>
							<option value="04">April</option>
							<option value="05">May</option>
							<option value="06">June</option>
							<option value="07">July</option>
							<option value="08">August</option>
							<option value="09">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
						<br>
						<span>Choose year:</span>
						<select name="year">
							<option value="Year">Year</option>
							<option value="2020">2022</option>
							<option value="2020">2021</option>
							<option value="2020">2020</option>
							<option value="2020">2019</option>
							<option value="2020">2018</option>
						</select>
						<input type="submit" name="bttn1" class="button1" value="View Summary" style="float: right; margin-right: 1%;">
					
					
				</fieldset>

			</form>
			<?php if($_SESSION['acctype']=='user' && isset($_POST['bttn1'])){ ?>

			<form>
				<fieldset>
					<legend>Monthly Transaction Statement</legend>
					<table style="border: 2px solid black; width: 100%; text-align: center;">
						<tr>
							<th>Transaction ID</th>
							<th>Date and Time</th>
							<th>Price</th>
							<th>Service</th>
							<th>Service ID</th>
							<th>Merchant's Name</th>
							<th>Merchant's ID</th>
						</tr>
						<?php foreach($logs as $log): ?>

							<tr>
								<td><?php echo $log['transaction_id']; ?></td>
								<td><?php echo $log['date']; ?></td>
								<td><?php echo $log['price']; ?></td>
								<td><?php echo $log['s_name']; ?></td>
								<td><?php echo $log['service_id']; ?></td>
								<td><?php echo $log['fname']." ".$log['lname']; ?></td>
								<td><?php echo $log['merchant_id']; ?></td>
							</tr>

						<?php endforeach; ?>
					</table>
				</fieldset>
			</form>

			<?php }else if($_SESSION['acctype']=='merchant' && isset($_POST['bttn1'])){ ?>

			<form>
				<fieldset>
					<legend>Transaction Statement</legend>
					<div>Viewing all transactions made on <?php echo $year."-".$month; ?>:</div>
					<table style="border: 2px solid black; width: 100%; text-align: center;">
						<tr>
							<th>Transaction ID</th>
							<th>Date and Time</th>
							<th>Price</th>
							<th>Service</th>
							<th>Service ID</th>
							<th>Customer's Name</th>
							<th>Customer's ID</th>
						</tr>
						<?php foreach($logs as $log): ?>

							<tr>
								<td><?php echo $log['transaction_id']; ?></td>
								<td><?php echo $log['date']; ?></td>
								<td><?php echo $log['price']; ?></td>
								<td><?php echo $log['s_name']; ?></td>
								<td><?php echo $log['service_id']; ?></td>
								<td><?php echo $log['fname']." ".$log['lname']; ?></td>
								<td><?php echo $log['user_id']; ?></td>
							</tr>

						<?php endforeach; ?>
					</table>
				</fieldset>
			</form>

			<?php } ?>

			</div>
		</section>
		</main>

	</section>
	<?php include('footer.php'); ?>

</html>
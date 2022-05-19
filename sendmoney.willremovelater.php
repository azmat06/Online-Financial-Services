<?php
session_start();

require_once "db_connect.php";
$sqls="select s.amount, s.receiver_id, s.date, a.fname, a.lname from (money_sent s inner join users u on s.receiver_id=u.user_id inner join account a on u.user_id=a.account_id) where sender_id=".$_SESSION['accuid'].";";
$result=mysqli_query($conn, $sqls);
$logs=mysqli_fetch_all($result, MYSQLI_ASSOC);

$sqlzs="select s.amount, s.sender_id, s.date, a.fname, a.lname from (money_sent s inner join users u on s.sender_id=u.user_id inner join account a on u.user_id=a.account_id) where receiver_id=".$_SESSION['accuid'].";";
$resultz=mysqli_query($conn, $sqlzs);
$logzs=mysqli_fetch_all($resultz, MYSQLI_ASSOC);
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

			<form action="includes_willremovelater/sendmoney.inc.php" method="post">
							<fieldset>
								<legend>Send Money:</legend>

								<label>Receiver ID:</label>
								<input type="text"  class="tbox " name="uid" value="" placeholder="Receiver ID">

								<label>Amount:</label>
								<input type="text"  class="tbox " name="amount" value="" placeholder="Amount">
								

								<input type="submit" class="button1" name="bttn1" value="Send">
							</fieldset>


			</form>
			<?php
			 	if(isset($_GET['error'])){
			 		// error handling
			 	}
			 ?>

			<form>
				<fieldset>
					<legend>Transfer History</legend>
					<div>Sent:</div>
					<table style="border: 2px solid black; width: 100%; text-align: center;">
						<tr>
							<th>Amount</th>
							<th>Receiver ID</th>
							<th>Receiver Name</th>
							<th>Date of Transfer</th>
						</tr>
						<?php foreach($logs as $log): ?>

							<tr>
								<td><?php echo $log['amount']; ?></td>
								<td><?php echo $log['receiver_id']; ?></td>
								<td><?php echo $log['fname']." ".$log['lname']; ?></td>
								<td><?php echo $log['date']; ?></td>
							</tr>

						<?php endforeach; ?>
					</table>


					<div>Received:</div>
					<table style="border: 2px solid black; width: 100%; text-align: center;">
						<tr>
							<th>Amount</th>
							<th>Sender ID</th>
							<th>Sender Name</th>
							<th>Date of Transfer</th>
						</tr>
						<?php foreach($logzs as $logz): ?>

							<tr>
								<td><?php echo $logz['amount']; ?></td>
								<td><?php echo $logz['sender_id']; ?></td>
								<td><?php echo $logz['fname']." ".$logz['lname']; ?></td>
								<td><?php echo $logz['date']; ?></td>
							</tr>

						<?php endforeach; ?>
					</table>
				</fieldset>
			</form>
			</div>
		</section>

		</main>

	</section>
	<?php include('footer.php'); ?>

</html>
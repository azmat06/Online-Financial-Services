<?php
session_start();
$_SESSION['dwaid']=$_GET['aid'];
require_once "db_connect.php";
//redundant
$sqls="select a.fname, a.lname, a.account_id, d.user_id, d.amount, d.date from (deposit d inner join agents g on d.agent_id=g.agent_id inner join account a on a.account_id=g.agent_id) where d.user_id=".$_SESSION['accuid'].";";
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


			<form action="includes_willremovelater/deposit.inc.php" method="post">
							<fieldset>
								<legend>Deposit Money:</legend>

								<label>Amount:</label>
								<input type="text"  class="tbox " name="amount" value="" placeholder="Amount">
								<br>
								<label>Confirm with Password:</label>
								<input type="password"  class="tbox " name="password" value="" placeholder="Enter Password">

								<input type="submit" class="button1" name="bttn1" value="Deposit">
							</fieldset>


			</form>
			<?php
			 	if(isset($_GET['error'])){
			 		// error handling
			 	}
			 ?>

			<form>
				<fieldset>
					<legend>Deposit History</legend>
					<table style="border: 2px solid black; width: 100%; text-align: center;">
						<tr>
							<th>Amount</th>
							<th>Agent Name</th>
							<th>Agent ID</th>
							<th>Date and Time</th>
						</tr>
						<?php foreach($logs as $log): ?>

							<tr>
								<td><?php echo $log['amount']; ?></td>
								<td><?php echo $log['fname']." ".$log['lname']; ?></td>
								<td><?php echo $log['account_id']; ?></td>
								<td><?php echo $log['date']; ?></td>
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
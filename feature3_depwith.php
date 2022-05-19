<?php
session_start();

require_once "db_connect.php";
$sqls="select * from (account c inner join agents a on c.account_id=a.agent_id);";
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


			<form>
				<fieldset>
					<legend>Choose an Agent</legend>
					<div>Sent:</div>
					<table style="border: 2px solid black; width: 100%; text-align: center;">
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile No.</th>
							<th>Deposit Link</th>
							<th>Withdraw Link</th>
						</tr>
						<?php foreach($logs as $log): ?>

							<tr>
								<td><?php echo $log['fname'].' '.$log['lname']; ?></td>
								<td><?php echo $log['email']; ?></td>
								<td><?php echo $log['mobile_no']; ?></td>
								<td><a href=<?php echo "feature3_depwith_makedeposit.php?aid=".$log['agent_id']; ?>> Make deposit >> </a></td>
								<td><a href=<?php echo "feature3_depwith_withdraw.php?aid=".$log['agent_id']; ?>> Withdraw >> </a></td>
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
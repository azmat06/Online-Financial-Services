<?php
session_start();
require_once "db_connect.php";

$sqls="select * from users where user_id=".$_SESSION['accuid'].";";
$result=mysqli_query($conn, $sqls);
$returnedlist=mysqli_fetch_all($result, MYSQLI_ASSOC);

$balance=$returnedlist[0]['balance'];

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



			<div>Main Account Balance: <?php echo $balance; ?></div>




		</div>
		</section>





		</main>

	</section>
	<?php include('footer.php'); ?>

</html>
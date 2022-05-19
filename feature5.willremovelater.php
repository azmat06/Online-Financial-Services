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
			 <?php 
			if($_SESSION['acctype']=='user' || $_SESSION['acctype']=='merchant'){
				echo "<a href='feature5_viewtransbyname.php'>Search transactions by Name</a><br>";
				echo "<a href='feature5_searchtransbyref.php'>Search transactions by Reference ID</a>";
			}else{
				echo "<div>This feature is only available for merchants and customers.</div>";
			} ?> 

			</div>
		</section>
		</main>

	</section>
	
	<?php include('footer.php'); ?>

</html>
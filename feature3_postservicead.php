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

			<form action="includes_willremovelater/postad.inc.php" method="post">
							<fieldset>
								<legend>Service Details:</legend>

								<label>Service Name:</label>
								<input type="text"  class="tbox " name="sname" value="" placeholder="Service name">
								<label>Price:</label>
								<input type="text"  class="tbox " name="price" value="" placeholder="Price tag"><br>
								<label>Service Description:</label>
								<input type="text"  class="tbox " name="sdetails" value="" placeholder="Details" style="width: 50%; overflow: auto;"><br>
								
								<input type="submit" class="button1" name="bttn1" value="Advertise">
							</fieldset>


			</form>
			<?php
			 	if(isset($_GET['error'])){
			 		if($_GET['error']=='success'){
			 			echo "Ad posted successfully";
			 		}
			 	}
			 ?>

			</div>
		</section>
			

		</main>

	</section>
	<?php include('footer.php'); ?>

</html>
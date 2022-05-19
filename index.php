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
			<form>
				<fieldset>
					<legend>Group1:</legend>
					<label>Field1</label>
					<input type="text" value="" class="tbox" name="field1" placeholder="Example1"><br>
					<label>Field2</label>
					<input type="text" value="" class="tbox" name="field2" placeholder="Example2"><br>
					<label>Field3</label>
					<input type="text" value="" class="tbox" name="field3" placeholder="Example3"><br>
					<label for="field4">Field4</label>
					<input type="text" value="" class="tbox" name="field4" placeholder="Example4"><br>
					<input type="button" class="button1" value="Input Button">
				</fieldset>
			</form>
			<div style="width: 80%; transform: rotateY(155deg) rotateX(69deg); font-size: 250px; position: static;color: blue; ">AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</div>
		</main>

	</section>
	<?php include('footer.php'); ?>

</html>
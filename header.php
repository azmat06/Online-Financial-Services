<header>
		<div class="navi"><a href="#"><span id="logo1">Lo</span><span id="logo2">go</span></a>
			<input type="checkbox" id="check">
			<label for="check" id="bars">
				<i class="fa fa-bars" style="font-size:30px" onclick="op1()"></i>
			</label>
		</div>
		<nav class="navi">

			<ul id="nbar">
				<script>
					function onResize(){
						if(document.documentElement.clientWidth>882){
							document.getElementById('nbar').style.display="block";
						}else{
							document.getElementById('nbar').style.display="none";
						}
					}
					window.addEventListener("resize", onResize);
					onResize();
				</script>
				<?php if(isset($_SESSION['accuid'])){
					echo "<li><a href='dashboard.php'>Dashboard</a>	</li>";
				}else{
					echo "<li><a href='index.php'>Home</a>	</li>";
				} ?>
				
				<li><a href="#">Contributors</a>
					<ul>
						<li><a href="#">labrat1</a></li>
						<li><a href="#">labrat2</a></li>
						<li><a href="#">labrat3</a></li>
						<li><a href="#">labrat4</a></li>
						<li><a href="#">labrat5</a></li>
					</ul>
				</li>
				<?php if(isset($_SESSION['accuid'])){
					echo "<li><a href='profile.php'>Profile</a></li>";
					echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
				}else{
					echo "<li><a href='signup.php'>Sign Up</a></li>";
					echo "<li><a href='login.php'>Login</a></li>";
				} ?>
			</ul>
		</nav>
	</header>
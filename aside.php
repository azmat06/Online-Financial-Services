<aside class="left">
			<h3>Menu</h3>
			<div>
				<?php 
				if(isset($_SESSION['accuid'])){

					echo "<ul><li><a href='feature2.willremovelater.php'>Feature2</a></li><li><a href='feature3.willremovelater.php'>Feature3</a></li><li><a href='feature4.willremovelater.php'>Feature4</a></li><li><a href='feature5.willremovelater.php'>Feature5</a></li></ul>";
				}else{
					echo "Nothing to show here";
				}
				?>
				<!-- <ul>
					<li><a href="trash/feature2.php">Feature2</a></li>
					<li><a href="trash/feature3.php">feature3</a></li>
					<li><a href="trash/feature4.php">Feature4</a></li>
					<li><a href="trash/feature5.php">Feature5</a></li>
				</ul> -->
			</div>
		</aside>
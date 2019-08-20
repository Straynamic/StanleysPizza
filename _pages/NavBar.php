
<link rel="stylesheet" type="text/css" href="../_css/NavBar.css">

<div class="topnav">
	<a class="linkSelect" id="logolink" href = "../index.php"><img id="logo" src="../_images/SiteLogo2.png"></a>
	<a class="linkSelect" href="../_pages/DeliveryType.php">Order Now</a>
	<a class="linkSelect" href="../_pages/Menu.php">Menu</a>
	<a class="linkSelect" href="../_pages/Rewards.php">Rewards</a>


	<?php
		

		if(isset($_SESSION['userId']))
		{
			echo '<a class="linkSelect" href="../_pages/Dashboard.php">DashBoard</a>';
			//echo '<a type ="submit" name="logout-submit" class="linkSelect" id="log" href="../_pages/Login.php">Log Out</a>';


			echo'<form action="../includes/logout.inc.php" method = "post">
				<button type ="submit" name="logout-submit">Logout</button>
				</form>';


		}
		else {
			echo '<a class="linkSelect" id="log" href="../_pages/Login.php">Log In</a>';
		}
	?>



</div>

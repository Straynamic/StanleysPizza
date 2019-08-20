<?php
	session_start();
?>

<!DOCTYPE HTML>  
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../_css/MainStyle.css">
		<title>Stanley's Pizzas</title>
	</head>

	<body>  
		<div class="myContainer">
			<?php include '../_pages/NavBar.php';?>

			<div class="FillerContent">


			<div class="MainBodyContent">
				<?php
				echo "<br><br><br>Welcome: " . $_SESSION['userName'] . "!<br><br>";
				?>
			</div>

			<?php
			
			?>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
			</div>

			<footer>
				<?php include '../_pages/Footer.php';?>
			</footer>
		</div>
	</body>
	

</html>
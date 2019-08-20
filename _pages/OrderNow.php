<?php
	session_start();
	ob_start();
?>

<!DOCTYPE HTML>  
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../_css/MainStyle_Flat.css">
	</head>

	<body> 
		<div class="myContainer">
			<?php include '../_pages/NavBar.php';?>
			<div id="mainBody">
				<?php include '../_pages/OrderValidation.php';?>
			</div>
			<div class="MainBodyContent">
				<?php
				echo "Order Type: " . $_SESSION["OrderType"] . ".<br><br>";
				?>
			</div>
			<br><br><br><br><br><br><br><br><br><br>

			<footer>
				<?php include '../_pages/Footer.php';?>
			</footer>
		<div>
	</body>


</html>
<?php
	session_start();
	ob_start();
?>

<!DOCTYPE HTML>  
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../_css/MainStyle.css">
		<title>Stanley's Pizzas</title>
	</head>

	<body>  
		<?php include '../_pages/NavBar.php';?>
		<h2 class="CenterText">How would you like your order?</h2>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
				echo $_POST['submit'];
				$_SESSION["OrderType"] = $_POST['submit'];
				header('Location: ../_pages/OrderNow.php');
			}
		?>

		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input class="DestinationButton" id="Delivery" type="submit" name="submit" value="Delivery">  
			<input class="DestinationButton" id="Carryout" type="submit" name="submit" value="Carryout">  
		</form>


		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	</body>

	<footer>
		<?php include '../_pages/Footer.php';?>
	</footer>
</html>
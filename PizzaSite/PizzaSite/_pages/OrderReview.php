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
		<?php include '../_pages/NavBar.php';?>

		<div class="MainBodyContent">
		<?php
		echo "<br><br><p>Order Type: " . $_SESSION["OrderType"] . ".</p>";
		echo "<p>Pizza Size: " . $_SESSION["PizzaSize"] . ".</p>";
		echo "<p>Cheese: " . $_SESSION["Cheese"] . ".</p>";
		echo "<p>Sauce: " . $_SESSION["Sauce"] . ".</p>";
		echo "<p>Meats: " . $_SESSION["Meats"] . ".</p>";
		echo "<p>Non Meats: " . $_SESSION["NonMeats"] . ".</p>";
		echo "<p>Discount applied: TestSiteOffer</p>";
		echo "<p>Total: $0.00 </p><br><br>";
		?>
		<a href="../_pages/OrderRecieved.php" class="DestinationButton" id="Delivery">Submit</a>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		

	</body>

	<footer>
		<?php include '../_pages/Footer.php';?>
	</footer>
</html>
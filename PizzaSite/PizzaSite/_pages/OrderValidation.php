<!DOCTYPE html>
<html>
<head>
	<title>Stanley's Pizzas</title>
</head>
<body>



	<?php

	// define variables and set to empty values
	$pizzaSize = $cheese = $sauce = $meats = $nonMeats= "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$pizzaSize = test_input($_POST["pizzaSize"]);
		$cheese = test_input($_POST["cheese"]);
		$sauce = test_input($_POST["sauce"]);

		// Loop to store and display values of individual checked checkbox.
		if(!empty($_POST['meats_list'])){
			foreach($_POST['meats_list'] as $selected)
			{
				if($meats !== "")
					$meats = $meats .", ". $selected;
				else
				{
					$meats = $meats . $selected;
				}
			}
		}
		else
		{
			$meats = "None";
		}
				// Loop to store and display values of individual checked checkbox.
		if(!empty($_POST['nonmeats_list'])){
			foreach($_POST['nonmeats_list'] as $selected)
			{
				if($nonMeats !== "")
					$nonMeats = $nonMeats .", ". $selected;
				else
				{
					$nonMeats = $nonMeats . $selected;
				}
			}
		}
		else
		{
			$nonMeats = "None";
		}

		$_SESSION["PizzaSize"] = $pizzaSize;
		$_SESSION["Cheese"] = $cheese;
		$_SESSION["Sauce"] = $sauce;
		$_SESSION["Meats"] = $meats;
		$_SESSION["NonMeats"] = $nonMeats;

		if($_SESSION["OrderType"] == "Delivery")
		{
			header('Location: ../_pages/CustomerInfo.php');
		}
		else {
			header('Location: ../_pages/OrderReview.php');
		}
		

	}




	/*
	if(isset($_POST['submit'])){

		if(!empty($_POST['meats_list'])) 
		{
			// Counting number of checked checkboxes.
			$checked_count = count($_POST['meats_list']);
			echo "You have selected following ".$checked_count." option(s): <br/>";

			// Loop to store and display values of individual checked checkbox.
			foreach($_POST['meats_list'] as $selected)
			{
				$meats = $meats . $selected;
				echo "<p>".$selected ."</p>";
			}
		}
		else
		{
			echo "<b>Please Select Atleast One Option.</b>";
		}
	}
	*/






	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>












	<h2>Pizza Customization</h2>


	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	 Pizza Size:
		<select name="pizzaSize" value="<?php echo $pizzaSize;?>">
			<option value="Small">Small</option>
			<option value="Medium" selected="selected">Medium</option>
			<option value="Large">Large</option>
			<option value="Extra Large">X-Large</option>
		</select>
		<br><br>
		Cheese:
		<select name="cheese" value="<?php echo $cheese;?>">
			<option value="None">None</option>
			<option value="Light">Light</option>
			<option value="Normal" selected="selected">Normal</option>
			<option value="Extra">Extra</option>
			<option value="MotherLoad">MotherLoad</option>
		</select>
			<br><br>
		Sauce:
		<select name="sauce" value="<?php echo $sauce;?>">
			<option value="None">None</option>
			<option value="Tomato" selected="selected">Tomato</option>
			<option value="Marinara">Marinara</option>
			<option value="BBQ">BBQ</option>
		</select>

		<br><br>

		Meats:<br>
	  <input type="checkbox" name="meats_list[]" value="Pepperoni">Pepperoni<br>
	  <input type="checkbox" name="meats_list[]" value="Ham">Ham<br>
	  <input type="checkbox" name="meats_list[]" value="Beef">Beef<br>
	  <input type="checkbox" name="meats_list[]" value="Salami">Salami<br>
	  <input type="checkbox" name="meats_list[]" value="Italian Sausage">Italian Sausage<br>
	  <input type="checkbox" name="meats_list[]" value="Chicken">Chicken<br>
	  <input type="checkbox" name="meats_list[]" value="Bacon">Bacon<br><br>

  		Non Meats:<br>
	  <input type="checkbox" name="nonmeats_list[]" value="Garlic">Garlic<br>
	  <input type="checkbox" name="nonmeats_list[]" value="Jalapeno">Jalapeno<br>
	  <input type="checkbox" name="nonmeats_list[]" value="Onions">Onions<br>
	  <input type="checkbox" name="nonmeats_list[]" value="Tomatoes">Tomatoes<br>
	  <input type="checkbox" name="nonmeats_list[]" value="Olives">Olives<br>
	  <input type="checkbox" name="nonmeats_list[]" value="Mushrooms">Mushrooms<br>
	  <input type="checkbox" name="nonmeats_list[]" value="<strike>Pineapple</strike>"><strike>Pineapple</strike><br>
	  <input type="checkbox" name="nonmeats_list[]" value="Cheddar Cheese">Cheddar Cheese<br><br>

	  <input type="submit" name="submit" value="Submit">  
		</form>
		<br>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			echo "<h2>Your Order:</h2>";
			echo "<b>Pizza Size: </b>" . $pizzaSize;
			echo "<br>";
			echo "<b>Cheese: </b>" . $cheese;
			echo "<br>";
			echo "<b>Sauce: </b>" . $sauce;
			echo "<br>";
			echo "<b>Meats: </b>" . $meats;
			echo "<br>";
			echo "<b>Non Meats: </b>" . $nonMeats;
			echo "<br>";
			echo "<br>";
		}
		?>
</body>
</html>
<!DOCTYPE HTML>  
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../_css/MainStyle_Flat.css">
		<style>
		.error {color: #FF0000;}
		</style>
		<title>Stanley's Pizzas</title>
	</head>

	<body>  
		<?php include '../_pages/NavBar.php';?>
		<?php
// define variables and set to empty values
$nameErr = $addressErr = $zipcodeErr = $cityErr = $stateErr = "";
$name = $address = $zipcode = $city = $state = "";
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
	$isValid = false;
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
	  $isValid = false;
    }
  }
  
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
	$isValid = false;
  } else {
    $address = test_input($_POST["address"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/\d+ [0-9a-zA-Z ]+/',$address)) {
      $addressErr = "Must be a valid address"; 
	  $isValid = false;
    }
  }
    
  if (empty($_POST["zipcode"])) {
    $zipcodeErr = "Zipcode is required";
	$isValid = false;
  } else {
    $zipcode = test_input($_POST["zipcode"]);
    // check if name only contains letters and whitespace
    if (!preg_match("#[0-9]{5}#",$zipcode)) {
      $zipcodeErr = "Enter a valid zipcode"; 
	  $isValid = false;
    }
  }

  if (empty($_POST["city"])) {
    $cityErr = "City is required";
	$isValid = false;
  } else {
    $city = test_input($_POST["city"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
      $cityErr = "Only letters and white space allowed"; 
	  $isValid = false;
    }
  }

  if (empty($_POST["state"])) {
    $stateErr = "State is required";
	$isValid = false;
  } else {
    $state = test_input($_POST["state"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^(?:A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[AT]|W[AIVY])*$/',$state)) {
      $stateErr = "Enter a valid state in ALL CAPS"; 
	  $isValid = false;
    }
  }

  if($isValid == true)
  {
	header('Location: ../_pages/OrderReview.php');
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Delivery Address</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Address: <input type="text" name="address" value="<?php echo $address;?>">
  <span class="error">* <?php echo $addressErr;?></span>
  <br><br>
  Zipcode: <input type="text" name="zipcode" value="<?php echo $zipcode;?>">
  <span class="error">* <?php echo $zipcodeErr;?></span>
  <br><br>
  City: <input type="text" name="city" value="<?php echo $city;?>">
  <span class="error">* <?php echo $cityErr;?></span>
  <br><br>
  State: <input type="text" name="state" value="<?php echo $state;?>">
  <span class="error">* <?php echo $stateErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>
	</body>

	<footer>
		<?php include '../_pages/Footer.php';?>
	</footer>
</html>
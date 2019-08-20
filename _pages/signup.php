<?php
	session_start();
?>

<!DOCTYPE HTML>  
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../_css/MainStyle.css">
		<link rel="stylesheet" type="text/css" href="../_css/LoginStyle.css">
		<title>Stanley's Pizzas</title>
	</head>

	<body>  
		<?php include '../_pages/NavBar.php';?>

		<main>
		<?php
			if(isset($_GET['error'])) {
				if($_GET['error'] == "emptyfields"){
					echo '<p>Fill in all fields!</p>';
				}
				else if ($_GET['error'] == "invaliduidmail"){
					echo '<p>Invalid username and e-mail!</p>';
				}
				else if ($_GET['error'] == "invaliduid"){
					echo '<p>Invalid username!</p>';
				}
				else if ($_GET['error'] == "invalidmail"){
					echo '<p>Invalid e-mail!</p>';
				}
				else if ($_GET['error'] == "passwordcheck"){
					echo '<p>IYour passwords do not match!</p>';
				}
				else if ($_GET['error'] == "usertaken"){
					echo '<p>Username is already taken!</p>';
				}
			}
			else if (isset($_GET['signup'])) {
				echo '<p>Signup Successful!</p>';
			}
		?>
			<form action="../includes/signup.inc.php" method=post>
				<h2 class="CenterText">Sign Up</h2>
				<input type="text" name ="uid" placeholder="Username">
				<input type="text" name ="mail" placeholder="Email">
				<input type="password" name ="pwd" placeholder="Password">
				<input type="password" name ="pwd-repeat" placeholder="Confirm Password">
				<br>
				<button type="submit" name="signup-submit">Sign Up</button>
			</form>
		</main>







		<br><br><br><br><br><br>
	</body>

	<footer>
		<?php include '../_pages/Footer.php';?>
	</footer>
</html>
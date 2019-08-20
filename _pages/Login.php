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
				if(isset($_SESSION['userId']))
				{
					echo '<p>You are logged in!</p>';
					echo'<form action="../includes/logout.inc.php" method = "post">
						<button type ="submit" name="logout-submit">Logout</button>
						</form>';
				}
				else {
					echo '<form action="authenticate.php" method="post">
							<h2 class="CenterText">Log In</h2>
							<input type="text" name="username" placeholder="Username" id="username" required>
							 <input type="password" name="password" placeholder="Password" id="password" required><br>
							<button type ="submit" value="Login">Log In</button><br>
							<button type="submit" formaction="signup.php">Sign Up</button>
							</form>';
				}
			?>


			</form>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			

		</main>






	</body>

	<footer>
		<?php include '../_pages/Footer.php';?>
	</footer>
</html>
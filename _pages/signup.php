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
			<form action="register.php" method="post" autocomplete="off">
				<h2 class="CenterText">Sign Up</h2>
					<input type="text" name="username" placeholder="Username" id="username" required/>
					<input type="password" name="password" placeholder="Password" id="password" required/>
					<input type="email" name="email" placeholder="Email" id="email" required/><br>
					<input type="submit" value="Register" />
			</form>
		</main>







		<br><br><br><br><br><br>
	</body>

	<footer>
		<?php include '../_pages/Footer.php';?>
	</footer>
</html>
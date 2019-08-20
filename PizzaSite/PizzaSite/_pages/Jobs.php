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
		<div class="myContainer">
			<?php include '../_pages/NavBar.php';?>

			<div class="FillerContent">

			<form action="" method="post">
				<h2 class="CenterText">Join Our Team</h2>
				<input type="text" name = "mail" placeholder="Email"><br>
				<textarea name="comment" rows="7" cols="28" placeholder="Resume"></textarea><br>
				<button type="submit" formaction="">Submit</button>
			</form>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>

			<footer>
				<?php include '../_pages/Footer.php';?>
			</footer>
		</div>
	</body>
	

</html>
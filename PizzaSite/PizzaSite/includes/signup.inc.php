<?php

if(isset($_POST['signup-submit'])){

	require 'dbh.inc.php';

	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat))
	{
		header("Location: ../_pages/signup.php?error=emptyfields&uid=". $username. "&mail=" .$email);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) { 
		header("Location: ../_pages/signup.php?error=invalidmailuid");
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
		header("Location: ../_pages/signup.php?error=invalidmail&uid=". $username);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { 
		header("Location: ../_pages/signup.php?error=invaliduid&mail=". $email);
		exit();
	}
	else if($password !== $passwordRepeat)
	{
		header("Location: ../_pages/signup.php?error=passwordcheck&uid=". $username. "&mail=" .$email);
		exit();
	}
	else {
	
		$sql = "SELECT userName FROM users WHERE userName=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../_pages/signup.php?error=sqlerror1");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s" , $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0)
			{
				header("Location: ../_pages/signup.php?error=usertaken&mail=".$email);
				exit();
			}

			else {
				$sql = "INSERT INTO users (userName, emailUsers, pwdUsers) VALUES (?, ?, ?) ";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)){
					header("Location: ../_pages/signup.php?error=sqlerror2");
					exit();
				}
				else {
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "sss" , $username, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);

					header("Location: ../_pages/Dashboard.php?signup=success");
					exit();
				}
			}
		}


	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);



}
else {
	header("Location: ../signup.php");
}
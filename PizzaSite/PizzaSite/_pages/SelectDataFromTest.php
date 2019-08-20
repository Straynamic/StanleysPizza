<?php include_once '../_pages/TestDatabase.php';?>

<?php
	$sql = "SELECT * FROM users;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
			
	if($resultCheck > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo $row['user_uid'] . "<br>";
		}
	}

?>
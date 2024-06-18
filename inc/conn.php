<?php 
	$conn = mysqli_connect("localhost","root","","db_ecomerce");

	if (mysqli_connect_errno()) {
		echo "Can't connect to the Database of " . mysqli_connect_errno();
	}
?>
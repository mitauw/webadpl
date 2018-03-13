<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


// include database connection file
		include_once("config.php");
		
// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,message) VALUES('$name','$email','$message')");
		
		header("Location:home.html");
?>
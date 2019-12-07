<?php
	include "db_connect.php";

	$firstname = $_POST ["fname"]; //value from php
	$lastname = $_POST ["lname"];
	$phone = $_POST ["phone"];
	$username = $_POST["uname"];
	$password = $_POST["pass"];
	$gender = $_POST["gender"];
	$email = $_POST["email"];

	$sql = "INSERT INTO user (fName , lName , phone , username , password, gender, email) VALUES ('$firstname', '$lastname', '$phone', '$username', '$password' ,'$gender','$email')"; //value from database
	
	$sendsql = mysqli_query($connect , $sql);

	if ($sendsql){
		header ("location: login.php ");

	}

?>
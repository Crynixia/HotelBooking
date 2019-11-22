<?php
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "hotel";

	//create connection with mysql
	$connect = mysqli_connect($hostname , $username, $password, $dbname) OR DIE ("Connection Failed")
?>
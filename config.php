<?php
	error_reporting(0); //it will not show error.
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "pizza";
	$connection = mysqli_connect($host,$username,$password,$database);
	session_start();
	date_default_timezone_set("Asia/Kolkata");
?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "root123";
	$database="pratham";
	$conn = mysqli_connect($servername, $username, $password,$database);
	$db = mysqli_select_db($conn,'pratham');


?>
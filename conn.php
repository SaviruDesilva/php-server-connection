<?php

$servername ="localhost";
$username="myuser";
$password="mypassword";

//create connection


$conn=mysqli_connect($servername,$username,$password);

//check connection


if(!$conn){

	die("connection failed".mysqli_connect_error());


}

	echo "connected successfully";



?>

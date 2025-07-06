<?php

include("conn.php");

$result=mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS jobseekers" );

if(!$result){

	die("invalied query".mysqli_error());


}

else

{

	echo"database created";


}

mysqli_close($conn);

?>

<?php

include("conn.php");

mysqli_select_db($conn,"seekers");

//create tables

$sql1="CREATE TABLE personal_info(id int AUTO_INCREMENT PRIMARY KEY,title varchar(10),name varchar(100),gender varchar(10),dateofbirth date)";


$result1=mysqli_query($conn,$sql1);


if(!$result1){

	die("invalid query".mysqli_error());

}


else{


	echo"table created successfully";


}

mysqli_close($conn);


?>

<?php

include("conn.php");

mysqli_select_db($conn,"seekers");

$sql="INSERT INTO personal_info(title,name,gender,dateofbirth)values('ms','K.Sedara','F','1980-11-02'),('prof','A.Perera','F','1982-04-12')";

$result=mysqli_query($conn,$sql);

if(!$result){

	die("invalid query".mysqli_error());

}

else{
	echo"data inserted";

}

mysqli_close($conn);

?>

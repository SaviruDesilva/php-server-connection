<?php
include("conn.php");

mysqli_select_db($conn,"seekers");

$sql="SELECT * FROM personal_info";
$result=mysqli_query($conn,$sql);

if(!$result){

	die("invalid".mysqli_error());
	
}

else
{
	echo"
		<table>
		
			<tr>		
				<th>title</th>
				<th>name</th>
				<th>gender</th>
				<th>dateofbirth</th>
	
			</tr>";
	
						while($row=mysqli_fetch_array($result)){
		
						echo"<tr>";
						echo"<td>".$row['title']."</td>";
						echo"<td>".$row['name']."</td>";
						echo"<td>".$row['gender']."</td>";
						echo"<td>".$row['dateofbirth']."</td>";
						
						
						echo"</tr>";
		}
	
						echo"</table>";

}

mysqli_close($conn);





?>

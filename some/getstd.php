<?php
	$host="localhost";
	$user="sohrab";
	$pass="244739";
	$db="studentpresent";
	$conn= mysqli_connect($host,$user,$pass,$db);
	$query="SELECT Name,Roll FROM studentname;";
	$result=mysqli_query($conn,$query);
	$response=array();
	while($row=mysqli_fetch_array($result))
	{
		array_push($response,array('Name'=>$row[0],'Roll'=>$row[1]));
	}
	mysqli_close($conn);
	echo json_encode(array('server_response2'=>$response));
?>
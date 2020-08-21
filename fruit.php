<?php
	$host="localhost";
	$user="sohrab";
	$pass="244739";
	$db="fruitdb";

	$conn= mysqli_connect($host,$user,$pass,$db);
	$query="SELECT * FROM fruits;";
	$result=mysqli_query($conn,$query);
	$response=array();
	while($row=mysqli_fetch_array($result))
	{
		
		array_push($response,array('name'=>$row[0],'calories'=>$row[1],'fat'=>$row[2]));
	}
	
	mysqli_close($conn);
	
	echo json_encode(array('server_respone'=>$response));
	
	
?>
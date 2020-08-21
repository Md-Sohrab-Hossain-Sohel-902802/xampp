<?php

$HOST_NAME="localhost";
$HOST_USER="root";
$HOST_PASS="";
$HOST_DBNAME="e_commerce";
$conn=mysqli_connect($HOST_NAME,$HOST_USER,$HOST_PASS, $HOST_DBNAME);
			$query="SELECT * FROM userdata where email='doyal@gmail.com';";
$result=mysqli_query($conn,$query);
	$response=array();
	while($row=mysqli_fetch_array($result))
	{
		
		array_push($response,array('id'=>$row[0],'name'=>$row[1],'email'=>$row[2],'password'=>$row[3],'district'=>$row[4],'division'=>$row[5]));
	}
	
	mysqli_close($conn);
	
	echo json_encode(array('Data'=>$response));
	
	
?>
<?php
$HOST_NAME="localhost";
$HOST_USER="root";
$HOST_PASS="";
$HOST_DBNAME="project";
$conn=mysqli_connect($HOST_NAME,$HOST_USER,$HOST_PASS, $HOST_DBNAME);
	$query="SELECT * FROM uservalue;";
	$result=mysqli_query($conn,$query);
	$response=array();
	while($row=mysqli_fetch_array($result))
	{
		
		array_push($response,array('Name'=>$row[1],'Mobile'=>$row[2],'Gender'=>$row[3],'District'=>$row[4]));
	}
	
	mysqli_close($conn);
	
	echo json_encode(array('Data'=>$response));
	
	
?>
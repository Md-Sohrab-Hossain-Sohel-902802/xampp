<?php
$HOST_NAME="localhost";
$HOST_USER="root";
$HOST_PASS="";
$HOST_DBNAME="project";
$conn=mysqli_connect($HOST_NAME,$HOST_USER,$HOST_PASS, $HOST_DBNAME);
$Insert_name=$_POST['name'];	
$Insert_mobile=$_POST['mobile'];	
$Insert_Gender=$_POST['gender'];
$Insert_District=$_POST['district'];
$sql="INSERT INTO uservalue(Name,Mobile,Gender,District) VALUES ('$Insert_name','$Insert_mobile','$Insert_Gender','$Insert_District')";
$run=mysqli_query($conn,$sql);
if($run=true){
	echo "Data Inserted Successfully";
}
else{
	echo "Data Insert Failed";
}
mysqli_close($conn);
?>
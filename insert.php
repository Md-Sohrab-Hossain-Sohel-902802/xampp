<?php
$HOST_NAME="localhost";
$HOST_USER="root";
$HOST_PASS="";
$HOST_DBNAME="volley";
$conn=mysqli_connect($HOST_NAME,$HOST_USER,$HOST_PASS, $HOST_DBNAME);
$Insert_name=$_POST['name'];	
$Insert_email=$_POST['email'];	
$sql="INSERT INTO volley_table(Name, Email) VALUES ('$Insert_name','$Insert_email')";
$run=mysqli_query($conn,$sql);
if($run=true){
	echo "Data Inserted Successfully";
}
else{
	echo "Data Insert Failed";
}
mysqli_close($conn);
?>
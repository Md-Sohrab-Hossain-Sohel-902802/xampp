<?php
$HOST_NAME="localhost";
$HOST_USER="root";
$HOST_PASS="";
$HOST_DBNAME="studentpresent";
$conn=mysqli_connect($HOST_NAME,$HOST_USER,$HOST_PASS,$HOST_DBNAME);
$Insert_name=$_POST['classname'];
$sql="INSERT INTO classname(name) VALUES ('$Insert_name');";
$run=mysqli_query($conn,$sql);
if($run=true){
	echo "Data Inserted Successfully";
}
else{
	echo "Data Inserted Failed";
}
mysqli_close($conn);


?>
<?php
$HOST_NAME="localhost";
$HOST_USER="root";
$HOST_PASS="";
$HOST_DBNAME="volley";
$conn=mysqli_connect($HOST_NAME,$HOST_USER,$HOST_PASS,$HOST_DBNAME);
$Insert_name=$_POST['name'];
$Insert_email=$_POST['email'];
$Insert_password=$_POST['password'];
$Insert_mobile=$_POST['mobile'];
$sql="INSERT INTO student(Name,Email,Passwordd,Mobile)
VALUES(
	'$Insert_name','$Insert_email','$Insert_password','$Insert_mobile'
)";
$run=mysqli_query($conn,$sql);
if($run=true){
	echo "Data Inserted Successfully";
}
else{
	echo "Data Inserted Failed";
}
mysqli_close($conn);


?>
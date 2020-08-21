<?php
$HOST_NAME="localhost";
$HOST_USER="root";
$HOST_PASS="";
$HOST_DBNAME="usrdetails";
$conn=mysqli_connect($HOST_NAME,$HOST_USER,$HOST_PASS,$HOST_DBNAME);
$Insert_firstname=$_POST['firstname'];
$Insert_lastname=$_POST['lastname'];
$Insert_mobilenumber=$_POST['mobilenumber'];
$Insert_gender=$_POST['gender'];
$Insert_semester=$_POST['semester'];
$Insert_department=$_POST['department'];
$Insert_group=$_POST['group'];
$Insert_shift=$_POST['shift'];
$sql="INSERT INTO studentaccount(Firstname,Lastname,Mobilenumber,Gender,Semester, Department,Groupp, Shift) VALUES ('$Insert_firstname','$Insert_lastname','$Insert_mobilenumber','$Insert_gender','$Insert_semester','$Insert_department','$Insert_group','$Insert_shift');";
$run=mysqli_query($conn,$sql);
if($run=true){
	echo "Data Inserted Successfully";
}
else{
	echo "Data Inserted Failed";
}
mysqli_close($conn);


?>
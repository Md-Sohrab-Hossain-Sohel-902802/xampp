<?php
$HOST_NAME="localhost";
$HOST_USER="root";
$HOST_PASS="";
$HOST_DBNAME="studentpresent";
$conn=mysqli_connect($HOST_NAME,$HOST_USER,$HOST_PASS,$HOST_DBNAME);
$Insert_roll=$_POST['studentroll'];
$Insert_classname=$_POST['classname2'];
$Insert_studentname=$_POST['studentname'];
$Insert_groupp=$_POST['studentgroup'];
$Insert_shift=$_POST['studentshift'];
$sql="INSERT INTO studentname(Roll, ClassName, Name, Groupp, Shift) VALUES ('$Insert_roll','$Insert_classname','$Insert_studentname','$Insert_groupp','$Insert_shift');";
$run=mysqli_query($conn,$sql);
if($run=true){
	echo "Data Inserted Successfully";
}
else{
	echo "Data Inserted Failed";
}
mysqli_close($conn);


?>
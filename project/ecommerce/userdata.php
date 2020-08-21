<?php


$HOST_NAME="localhost";
$HOST_USER="root";
$HOST_PASS="";
$HOST_DBNAME="e_commerce";
$conn=mysqli_connect($HOST_NAME,$HOST_USER,$HOST_PASS, $HOST_DBNAME);

$work=$_POST["work"];
if($work=="registeruser"){
				$name=$_POST["name"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			$district=$_POST["district"];
			$division=$_POST["division"];
			$count=0;

				$query="SELECT * FROM userdata;";
				$result=mysqli_query($conn,$query);
				$response=array();
				while($row=mysqli_fetch_array($result))
				{
					if($email==$row[2]){
						$count=$count+1;
					}
					
				}
				
				
				if($count>0){
					echo "The Email is allready taken";
				}else{
					$sql="INSERT INTO userdata(name,email,password,distric,division) VALUES ('$name','$email','$password','$district','$division')";
			$run=mysqli_query($conn,$sql);
			if($run=true){
				echo "Data Inserted Successfully";
			}
			else{
				echo "Data Insert Failed";
			}
				}


			mysqli_close($conn);

}
else if($work=="loginuser"){
			$email=$_POST["email"];
			$password=$_POST["password"];
			$count=0;

				$query="SELECT * FROM userdata;";
				$result=mysqli_query($conn,$query);
				$response=array();
				while($row=mysqli_fetch_array($result))
				{
					if($email==$row[2] && $password==$row[3]){
						$count=$count+1;
					}
					
				}
				
				
				if($count>0){
					echo "Login Success";
				}
				else{
					echo "Username And Password not matched";
				}
			
			
			
			
			
}else if($work=="userid"){
	
	$email=$_POST["email"];
	$password=$_POST["password"];

			$query="SELECT * FROM userdata;";
				$result=mysqli_query($conn,$query);
				$response=array();
				while($row=mysqli_fetch_array($result))
				{
					if($email==$row[2] &&  $password==$row[3]){
						$value=$row[0];
					}
					
				}
	echo $value;
	
}


?>
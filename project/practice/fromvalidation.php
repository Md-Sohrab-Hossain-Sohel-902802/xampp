<!DOCTYPE HTML>
<?php 
	$errorname=$errmail=$errweb=$errcomment=$errgender="";

?>


<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		.maincontent{
			width:600px;
			margin:0 auto;
			background:#015206;
			padding:50px;
		}
		.header,.fotter{
			height:40px;
			background:#000;
			color:#fff;
			font-size:25px;
			font-family:arial;
			text-align:center;
		}
		.body{
			background:#fff;
			padding:25px;
			font-size:25px;
			text-color:#000;
			font-weight:bold;
		}
	</style>
</head>
<body>
	<div class="maincontent">
		<div class="header">
		Md Sohrab Hossian Sohel
		</div>
		<div class="body">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		<table>
		
		<p style="color:red;">* Required Filed</p>
		
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" />*<?php  echo $errorname ?></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="email"/>*<?php  echo $errorname ?></td>
			</tr>
			<tr>
				<td>Website:</td>
				<td><input type="text" name="website"/>*<?php  echo $errorname ?></td>
			</tr>
			<tr>
				<td>Comment:</td>
				<td><textarea name="comment" id="" cols="30" rows="10"></textarea>*<?php  echo $errorname ?></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					*<?php  echo $errorname ?>
					<input type="radio" name="gender" value="female"/>Female
					<input type="radio" name="gender" value="male"/>Male
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit"/>
				</td>
			</tr>
		</table>
		</form>
			
			<?php
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty ($_POST["name"])){
					$errorname="Name Is Required";
					
				}
					else{
						$name=validate($_POST["name"]);
						$email=validate($_POST["email"]);
					$website=validate($_POST["website"]);
					$comment=validate($_POST["comment"]);
					$gender=validate($_POST["gender"]);}
			
			
				
				
					echo "Name: $name <br />";
					echo "Email: $email <br />";
					echo "Website: $website <br />";
					echo "Comment: $comment <br />";
					echo "Gender: $gender <br />";
				}
				
				
				function validate($data){
						$data=trim($data);
						$data=stripcslashes($data);
						$data=htmlspecialchars($data);
						return $data;
					}
			
				
			?>
		
		</div>
		<div class="fotter">
		Exit: From A
		</div>

	</div>
	</body>
</html>
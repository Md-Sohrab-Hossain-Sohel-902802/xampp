<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		.maincontent{
			height:500px;
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
			height:380px;
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
		
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			Username: <input type="text"  name="username"/>
			<input type="submit" value="Submit"/>
			
			<?php
				if($_SERVER["REQUEST_METHOD"]=="POST"){
					$name=$_POST['username'];//here we can use $_REQUEST
					if(empty($name)){
						echo "</br><span style='color: red;'>Username field must not be Empty </spam>";
					}
					else{
						echo "</br><span style='color: green;'>You Have Submitted: " .$name."</spam>";
					}
				}
			?>
	</form>
		
		</div>
		<div class="fotter">
		Exit: From A
		</div>

	</div>
	</body>
</html>
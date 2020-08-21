<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="post">

 User Name : <input type="text" name="username"><br>
 <input type="submit" value="submit"/><br>






</form>





<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){


                $username=$_REQUEST['username'];
                if(empty($username)){
                    echo "Write Something then hit submit";
                }else{
                    echo $username; 
                }
               


        }


?>




</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="welcome.php" method="POST">

    <input type="text" name="fname">
    <br>
    <input type="text" name="lname">
    <br>
    <input type="email" name="email">
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Register">



  </form>

  <?php

  $error = $_REQUEST["pwd_error"];

  if(empty($error)){
    
  }else{
    echo $error;
  }





?>







</body>

</html>
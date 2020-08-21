<?php



header('content_type: application/json');



$request=$_SERVER['REQUEST_METHOD'];


switch($request){
case 'GET': {

    getMethod();
    
break;
}
case 'PUT': {
   $data = json_decode(file_get_contents('php://input'), true);

   putMethod($data);
   
    
break;
}
case 'POST': {
    $data=json_decode(file_get_contents('php://input'),true);
     postMethod($data);
    
break;
}
case 'DELETE': {
            $data = json_decode(file_get_contents('php://input'), true);
            deleteMethod($data);
       
break;
}default:{
    echo "Cant found";
}



}




function getMethod(){
    include "connect.php";
    $sql="SELECT * FROM sohrab";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $rows=array();
        while($r=mysqli_fetch_assoc($result)){
            $rows['results'] [] =$r;                  
        }

        echo json_encode($rows);



    }else{
        echo "No Data Found";
    }
}

function postMethod($data){
    include "connect.php";
    $name=$data["name"];
    $email=$data["email"];
    $id=$data["id"];
    $roll=$data["roll"];


    $sql="INSERT INTO sohrab(id,name,roll,email) VALUES('$id','$name','$roll','$email')";
    
    if(mysqli_query($con,$sql)){
        echo '{"results": "data inserted"}';
    }
else{
        echo '{"results": "data not inserteddd "}';
     
}





}




function putMethod($data)
{
    include "connect.php";
    $name = $data["name"];
    $email = $data["email"];
    $id = $data["id"];
    $roll = $data["roll"];


    $sql = "UPDATE sohrab SET name='$name' ,email='$email' ,roll='$roll'  WHERE id='$id'";

    if (mysqli_query($con, $sql)) {
        echo '{"results": "Update Successfulley"}';
    } else {
        echo '{"results": "Update Not Successfull"}';
    }
}
function deleteMethod($data)
{
    include "connect.php";
      $id = $data["id"];


    $sql = "DELETE FROM sohrab WHERE id='$id'";

    if (mysqli_query($con, $sql)) {
        echo '{"results": "Delete Successfulley"}';
    } else {
        echo '{"results": "Delete Not Successfull"}';
    }
}






?>
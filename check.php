<?php

include('functions.php'); //function.php file has all function in project
include('config.php'); //config.php has connection to DataBase
$link = connectToDB();
$user= $_POST['user'];
$pass= $_POST['pass'];

$getdata = mysqli_query($link, "select * from users where name =\"$user\" and password=\"$pass\" ");
$getbypass = mysqli_query($link, "select * from users where password=\"$pass\" ");
$getbyname = mysqli_query($link, "select * from users where name=\"$user\"");

$row1 = mysqli_fetch_assoc($getbypass);
$row2 = mysqli_fetch_assoc($getbyname);
$row3 = mysqli_fetch_assoc($getdata);
if($row3){
     echo json_encode("true");
}else{
    if(!$row1 && !$row2){
       echo json_encode('user name and pass is not valid'); 
    }elseif (!$row1) {
       echo json_encode('pass is not valid'); 
    }else {
        echo json_encode('name is not valid'); 
    }
    
}
    

?>

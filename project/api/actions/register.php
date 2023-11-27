<?php

if(!isset($_POST['username']) OR !isset($_POST['password']) OR !isset($_POST['fullname']) OR !isset($_POST['email']))
{
    require_once("actions/missingrequired.php");
    exit();

}

$username=$_POST['username'];
$password=md5($_POST['password']);
$fullname=$_POST['fullname'];
$email=$_POST['email'];

$query_check="select username from users where 
`username`='$username'";

$result_check=$db->conn->query($query_check);

if($result_check->num_rows==1){
    // Login was success
     $response=array(
        "message"=>"username is already exists","username"=>$username
     );
     $status="failure";

}else{



$query= "INSERT INTO `users` ( `username`, `fullname`, `email`, `password`, `status`) VALUES ( '$username', '$fullname', '$email', '$password', '1')";

try{
$result=$db->conn->query($query);
}catch(Exception $e){
    require_once("actions/servererror.php");
    exit();
}

if($result AND $db->conn->affected_rows==1){
    // Registraion was success
     $response=array(
        "message"=>"success","username"=>$username
     );
     $status="success";

}else{
    // Login was not successful or duplicate users are in the system.
    // 0: No user found
    // 1> : Duplicate users.
    
    $response=array(
        "message"=>"There was some error. Please try again."
     );
     $status="failure";

}
}
make_response($response,$status);
exit(); 
?>
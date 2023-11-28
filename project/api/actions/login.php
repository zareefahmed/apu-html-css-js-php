<?php

if(!isset($_POST['username']) OR !isset($_POST['password']))
{
    require_once("actions/missingrequired.php");
    exit();

}

$username=$_POST['username'];
$password=md5($_POST['password']);
$query="select username from users where 
`username`='$username' and `password`='$password' and `status`=1";

$result=$db->conn->query($query);

if($result->num_rows==1){
    // Login was success
    $status="success";

    $secureinfo=array(
        "username"=>$username
    );
    $toSecureInfo=serialize($secureinfo);
    $toSecureInfoEncypted=encryptStringWithSalt($toSecureInfo,MY_SALT);

   // var_dump($secureinfo);
   // var_dump($toSecureInfo);

    /// serialization  PHP objects to string

    $response=array(
        "message"=>"success","secureinfo"=>$toSecureInfoEncypted
     );

}else{
    // Login was not successful or duplicate users are in the system.
    // 0: No user found
    // 1> : Duplicate users.
    $status="failure";
    $response=array(
        "message"=>"Either username or password is wrong."
     );
}

make_response($response,$status);
exit(); 
?>
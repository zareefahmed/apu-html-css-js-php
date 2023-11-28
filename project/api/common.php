<?php 

function make_response($data,$status="failure")
{
 
    $defultvalues=array(
        "version"=>"1.0",
        "status"=>$status
    );
    if(defined("ACTION"))
    {
        $defultvalues["action"]=ACTION;
    }
   



    $result= array_merge($defultvalues,$data);
    print json_encode($result);

}




function encryptStringWithSalt($string, $salt) {
    $key = hash('sha256', SECRET_KEY . $salt);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);
  
    return openssl_encrypt($string, ENCRYPTION_METHOD, $key, 0, $iv);
  }
  
  
  function decryptStringWithSalt($encryptedString, $salt) {
    $key = hash('sha256', SECRET_KEY . $salt);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);
  
    return openssl_decrypt($encryptedString, ENCRYPTION_METHOD, $key, 0, $iv);
  }
  
  


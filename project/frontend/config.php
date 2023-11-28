<?php
session_start();
define("DEFAULT_TITLE","CarRental.com");
define('ENCRYPTION_METHOD', 'AES-256-CBC');
define('SECRET_KEY', '2b7e151628aed2a6abf7158809cf4f3c762e7160df1d233780d7f3b76e3f0e4e'); // Replace with your secret key
define('SECRET_IV', '6bc1bee22e409f96e93d7e117393172a'); // Replace with your secret IV
define("MY_SALT","AnythingSecout");

require_once("classes/class.page.php");



function is_userloggedIn(){

  if(isset($_SESSION['username']) AND strlen($_SESSION['username'])>1)
  {
    return true;
}else
{
  return false;
}
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

?>
<?php
header("Access-Control-Allow-Origin:*");

define("ENV","dev");

if(ENV=="dev"){
    error_reporting(E_ALL);
    ini_set("display_errors","on");
    define("SHOW_DB_ERROR",true);
    define("DB_HOST", "localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_NAME","carrental");
    define("MY_SALT","AnythingSecout");
    define('ENCRYPTION_METHOD', 'AES-256-CBC');
define('SECRET_KEY', '2b7e151628aed2a6abf7158809cf4f3c762e7160df1d233780d7f3b76e3f0e4e'); // Replace with your secret key
define('SECRET_IV', '6bc1bee22e409f96e93d7e117393172a'); // Replace with your secret IV


}



if(ENV=="prod"){
    error_reporting(0);
    ini_set("display_errors","off");
    define("SHOW_DB_ERROR",false);
    define("DB_HOST", "localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_NAME","carrental");
    define("MY_SALT","AnythingSecout");
    define('ENCRYPTION_METHOD', 'AES-256-CBC');
define('SECRET_KEY', '2b7e151628aed2a6abf7158809cf4f3c762e7160df1d233780d7f3b76e3f0e4e'); // Replace with your secret key
define('SECRET_IV', '6bc1bee22e409f96e93d7e117393172a'); // Replace with your secret IV


}
require_once("classes/class.DBconnection.php");

$db= new DBconnection();


require_once("common.php");



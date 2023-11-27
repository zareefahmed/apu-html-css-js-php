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

}



if(ENV=="prod"){
    error_reporting(0);
    ini_set("display_errors","off");
    define("SHOW_DB_ERROR",false);
    define("DB_HOST", "localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_NAME","carrental");

}
require_once("classes/class.DBconnection.php");

$db= new DBconnection();


require_once("common.php");



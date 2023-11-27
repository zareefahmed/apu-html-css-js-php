<?php 
class DBconnection{
    public $conn=false;

    function __construct(){
        $this->getConnection();
    }

    function getConnection(){
        // Create connection

try{  
          $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
}catch(Exception $e){
    if(SHOW_DB_ERROR){
       print $e;
    }
    require_once("actions/servererror.php");
    exit();
}
    }
}
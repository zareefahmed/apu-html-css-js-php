<?php
require_once("config.php");
///$rawdata = file_get_contents("php://input");
//var_dump($rawdata);
//$rawdata=(array)json_decode($rawdata);
//var_dump($rawdata);
//$_POST=$rawdata;
//$_POST['action']="";
//var_dump($_POST);
//var_dump($_GET);

if(count($_POST)==0 AND !isset($_GET['action']))
{
    // Give no data to process.
    require_once("actions/notallowed.php");
    exit();
}

if(!isset($_POST['action']) )
{
    // If action is not present
    if(!isset($_GET['action']) ){
        
    require_once("actions/missingaction.php");
    exit();
    }else
    {
        $action=$_GET['action'];

    }
    
}else{
    $action=$_POST['action'];

}



define("ACTION",$action);

if(file_exists("actions/$action.php"))
{
    require_once("actions/$action.php");
    exit();
}else{

    require_once("actions/invalidaction.php");
    exit();
}





// action must be required. If we do not have any action value present in the request, then give error.


//$dummy=array("dummy_user"=>"Dummy User");

//$result=array("status"=>"success","data"=>$dummy);
//$data=$_GET;
//$data=$_POST;

//$result=array("status"=>"success","data"=>$data);

?>
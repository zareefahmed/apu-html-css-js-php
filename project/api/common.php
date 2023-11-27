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


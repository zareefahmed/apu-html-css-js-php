<?php 

function make_response($data,$status="failure")
{
    $defultvalues=array(
        "version"=>"1.0",
        "action"=>ACTION,
        "status"=>$status
    );

    $result= array_merge($defultvalues,$data);
    print json_encode($result);

}


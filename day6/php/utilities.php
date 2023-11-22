<?php 

function d($value,$type=false){
    
    print "<pre>";
    if($type==false){
        
        print_r($value);
    
    }else
    {
        var_dump($value);
    }
    print "</pre>";
    }
    


?>
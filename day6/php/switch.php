<?php 
require_once("utilities.php");

$day = "Friday";

/*
if($day=="Monday")
{
    echo "Start of the work week.";   
}elseif($day=="Tuesday")
{
    echo "It's Tuesday!";

}elseif($day=="Wednesday")
{
    echo "Midweek.";  
}else{
    echo "It's another day.";
}
*/




switch ($day) {
    case "Monday":
        echo "Start of the work week.";
        break;
    case "Tuesday":
        echo "It's Tuesday!";
        break;
    case "Wednesday":
        echo "Midweek.";
        break;
    default:
        echo "It's another day.";
}



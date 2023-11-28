<?php
require_once("config.php");
$page=new Page();

$page->setTitle("Privacy : CarRental.com");
ob_start();
?>
<h1> My Bookings
</h1>
<?php

$result=file_get_contents("http://api.carrental.com?action=bookings&username=".$_SESSION['username']);

$result_obj=json_decode($result);
//var_dump($result_obj->results);
print "<table border='1'>";
$TableHeader=false;
$RowHeader=(array)$result_obj->results[0];
//var_dump($RowHeader);
print "<tr>";
    
foreach($RowHeader as $col=>$colvalue)
{

    print "<td>$col</td>";
}

print "</tr>";

foreach((array)$result_obj->results as $value)
{
    print "<tr>";
    
foreach($value as $col=>$colvalue)
{

    print "<td>$colvalue</td>";
}


    //print_r($value);
    
    print "</tr>";
}

print "</table>";


?>
<?php 
$PageContent=ob_get_clean();
$page->setPageContent($PageContent);
$page->makePage();
?>
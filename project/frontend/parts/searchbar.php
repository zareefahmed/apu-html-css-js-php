Search : <input type="text" style="display:inline">
<?php 
$result=file_get_contents("http://api.carrental.com?action=carcat");

$result_obj=json_decode($result);
//var_dump($result_obj->results);
Print "Category :";
print "<select>";
foreach($result_obj->results as $value)
{
   // var_dump($value->category);
    // : $value <br>";
    print "<option>{$value->category}</option>";
}

print "</select>";
?>

<br><br><br><br><br>
Search : <input type="text" id="searchtext" style="display:inline">
<?php 
$result=file_get_contents("http://api.carrental.com?action=carcat");

$result_obj=json_decode($result);
//var_dump($result_obj->results);
Print "Category :";
print "<select id='searchcat'>";
foreach($result_obj->results as $value)
{
   // var_dump($value->category);
    // : $value <br>";
    print "<option value='{$value->category}'>{$value->category}</option>";
}

print "</select>";
?>
<button id="searchbutton" onclick="searchCars()"> Search </button>

<br><br><br><br><br>
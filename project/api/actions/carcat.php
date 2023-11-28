<?php
$data=array();

$query="select DISTINCT category from cars where status=1";

$result=$db->conn->query($query);

while($row=$result->fetch_assoc()){
    $data[]=$row;
}

make_response(array("results"=>$data),"success");




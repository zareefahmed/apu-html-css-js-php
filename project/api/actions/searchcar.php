<?php 
$q=isset($_POST['q'])?$_POST['q']:'';
$cat=isset($_POST['cat'])?$_POST['cat']:'sedan';
$data=array();

$query="select * from cars where 
`category`='$cat' AND (`title` like '%$q%' OR `details` like '%$q%') AND status=1";

$result=$db->conn->query($query);

while($row=$result->fetch_assoc()){
    $data[]=$row;
}

make_response(array("results"=>$data),"success");




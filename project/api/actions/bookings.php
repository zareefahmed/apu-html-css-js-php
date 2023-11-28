<?php 

if(!isset($_GET['username']))
{
    require_once("actions/missingrequired.php");
    exit();
}

$username=$_GET['username'];
$data=array();

$query="select id,carid,bookingdate,enddate,startdate,rate,comments from bookings where `username`='$username'";

$result=$db->conn->query($query);

while($row=$result->fetch_assoc()){
    $data[]=$row;
}

make_response(array("results"=>$data),"success");




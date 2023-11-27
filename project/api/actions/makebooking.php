<?php 
//TODO: Implement a check that only valid users should be able to make booking.



if(!isset($_POST['username']) OR !isset($_POST['carid']) OR !isset($_POST['bookingdate'])  OR  !isset($_POST['startdate'])  OR  !isset($_POST['enddate'])  OR  !isset($_POST['rate']))
{
    require_once("actions/missingrequired.php");
    exit();


}

$username=$_POST['username'];
$carid=$_POST['carid'];
$bookingdate=$_POST['bookingdate'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$rate=$_POST['rate'];
$comments=isset($_POST['comments'])?$_POST['comments']:"";



//  '2023-11-27 07:52:45.000000',
    
$query="INSERT INTO `bookings` (
    `username`, 
    `carid`, 
    `bookingdate`, 
    `startdate`, 
    `enddate`, 
    `rate`, 
    `comments`, 
    `status`) 
    VALUES (
        '$username', 
    '$carid', 
    '$bookingdate', 
    '$startdate', 
    '$enddate', 
    '$rate', 
    '$comments',
    '1')";

//print $query;

try{
    $result=$db->conn->query($query);
    //var_dump($db->conn);
    $bookingid=$db->conn->insert_id;
    }catch(Exception $e){
  //      print $e;
        require_once("actions/servererror.php");
        exit();
    }
    
    if($result AND $db->conn->affected_rows==1){
        // Registraion was success
         $response=array(
            "message"=>"success","bookingid"=>$bookingid
         );
         $status="success";
    
    }else{
        
        $response=array(
            "message"=>"There was some error. Please try again."
         );
         $status="failure";
    
    }
    
    make_response($response,$status);
    exit(); 
    



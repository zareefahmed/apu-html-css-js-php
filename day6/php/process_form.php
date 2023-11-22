<?php 

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_POST);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //var_dump($_GET);
}

if(isset($_GET['username'])){
    $username=$_GET['username'];    
}else{
    $username="Guest"; 
}

$username=isset($_GET['username'])?$_GET['username']:"Guest";

print "Hello $username";



/// Use it only if you know what are you doing.
//var_dump($_REQUEST);

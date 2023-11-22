<?php
require_once("utilities.php");
require_once("utilities.php");
require_once("utilities.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


d($conn);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>
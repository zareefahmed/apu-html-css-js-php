<?php 
require_once("config.php");
$_COOKIE=array();
session_destroy();
header("location:index.php");
?>

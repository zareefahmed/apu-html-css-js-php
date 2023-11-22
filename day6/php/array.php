<?php 
// Array > Indexed Array, index start from Zero.
$fruits=array();
$fruits[]="Apple";
$fruits[]="Banana";
$fruits[]="orange";
$fruits[]="durian";
$fruits[]="guava";
$fruits[]="pear";

$fruits=array(
    "Apple",
    "guava",
    "Banana",
    "orange",
    "durian",
    "guava",
    "pear"
);

print $fruits[2]; // Output >> orange >> banana


/// Associative Array in PHP

$newFruits=array(
"first"=>"Apple", 
"fifth"=>"Durian", 
"sixth"=>"Pear", 
"second"=>"Banana", 
"third"=>"Guava", 
"fourth"=>"Orange", 
);

$newFruits=array(
    1=>"Apple", 
    4=>"Banana", 
    5=>"Guava", 
    2=>"Durian", 
    3=>"Pear", 
    6=>"Orange", 
    );


print $newFruits["fifth"]; // Output >>> Durian

/// Multi-Dimentional Arrays

$MyFavThings=array(

    "fruits"=>array(
        "first"=>"Apple", 
        "fifth"=>"Durian", 
        "sixth"=>"Pear", 
        "second"=>"Banana", 
        "third"=>"Guava", 
        "fourth"=>"Orange", 
    ),
    "books"=>array(
        "PHP Programming",
        "Introduction to Databases",
        "AWS Architect",
        "Working with Google Cloud"

    )

);








?>
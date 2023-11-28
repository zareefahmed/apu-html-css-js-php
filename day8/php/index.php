<?php 
$email = "exampleZZ@email.mobile";
if (preg_match("/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $email)) {
    echo "Valid email address.";
} else {
    echo "Invalid email address.";


    $phone = "123-456-7890";
if (preg_match("/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/", $phone)) {
    echo "Valid phone number.";
} else {
    echo "Invalid phone number.";
}

}
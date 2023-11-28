<?php 

define('ENCRYPTION_METHOD', 'AES-256-CBC');
// $secretKey = bin2hex(openssl_random_pseudo_bytes(32));

// 32 Secret Key: 2b7e151628aed2a6abf7158809cf4f3c762e7160df1d233780d7f3b76e3f0e4e
// 16 Secret IV: 6bc1bee22e409f96e93d7e117393172a

define('SECRET_KEY', '2b7e151628aed2a6abf7158809cf4f3c762e7160df1d233780d7f3b76e3f0e4e'); // Replace with your secret key
define('SECRET_IV', '6bc1bee22e409f96e93d7e117393172a'); // Replace with your secret IV


$string="MyPassword";
$salt="SoMEthingSecret";

//print crypt($string, $salt);

print "<br><br><br><br>";
//print md5($string);

// Encrypt the string
$encryptedString = encryptStringWithSalt($string, $salt);
echo "Encrypted: " . $encryptedString . "\n";
$salt="SoMEthingSecret";
// Decrypt the string
$decryptedString = decryptStringWithSalt($encryptedString, $salt);
echo "Decrypted: " . $decryptedString . "\n";



function encryptStringWithSalt($string, $salt) {
    $key = hash('sha256', SECRET_KEY . $salt);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);

    return openssl_encrypt($string, ENCRYPTION_METHOD, $key, 0, $iv);
}


function decryptStringWithSalt($encryptedString, $salt) {
    $key = hash('sha256', SECRET_KEY . $salt);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);

    return openssl_decrypt($encryptedString, ENCRYPTION_METHOD, $key, 0, $iv);
}




?>
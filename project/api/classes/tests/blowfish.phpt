--TEST--
Test Crypt_Blowfish in ECB mode
--FILE--
<?php
if (!function_exists('hex2bin')) {
    function hex2bin($data) {
        $len = strlen($data);
        return pack('H' . $len, $data);
    }
}

print "key              plain            expected crypt   actual crypt     actual decrypt   encrypt decrypt\n";

$vectors = file(dirname(__FILE__) . '/vectors.txt');

require_once 'Crypt/Blowfish.php';
$b =& Crypt_Blowfish::factory('ecb', null, null, CRYPT_BLOWFISH_PHP);
if (PEAR::isError($b)) {
    echo 'Error: ' . $b->getMessage() . "\n";

} else {
    foreach($vectors as $data) {
        $data = trim($data);
        if ($data) {
            list($key, $plain, $crypt) = split('[[:space:]]+', $data);
            printf('%s %s ',
                $key,
                $plain
            );
            $key = hex2bin(trim($key));
            $plain = hex2bin(($plain));
            $crypt = strtolower(trim($crypt));
            $result = $b->setKey($key);
            if (PEAR::isError($result)) {
                echo 'Error with key: ' . $result->getMessage() . "\n";
                continue;
            }

            $guess = $b->encrypt($plain);
            if (PEAR::isError($guess)) {
                echo 'Error while encrypting: ' . $guess->getMessage() . "\n";
                continue;
            }
            $guess = strtolower(bin2hex($guess));

            // Reset the key (mostly for mcrypt compatibility)
            $result = $b->setKey($key);
            if (PEAR::isError($result)) {
                echo 'Error with key: ' . $result->getMessage() . "\n";
                continue;
            }

            $reverse = $b->decrypt(hex2bin($crypt));
            if (PEAR::isError($guess)) {
                echo 'Error while decrypting: ' . $guess->getMessage() . "\n";
                continue;
            }

            printf("%s %s %s %-7s %s\n",
                $crypt,
                $guess,
                strtolower(bin2hex($reverse)),
                (($crypt == $guess)   ? 'OK' : 'BAD'),
                (($plain == $reverse) ? 'OK' : 'BAD')
            );
        }
    }
}

?>
--EXPECT--
key              plain            expected crypt   actual crypt     actual decrypt   encrypt decrypt
0000000000000000 0000000000000000 4ef997456198dd78 4ef997456198dd78 0000000000000000 OK      OK
FFFFFFFFFFFFFFFF FFFFFFFFFFFFFFFF 51866fd5b85ecb8a 51866fd5b85ecb8a ffffffffffffffff OK      OK
3000000000000000 1000000000000001 7d856f9a613063f2 7d856f9a613063f2 1000000000000001 OK      OK
1111111111111111 1111111111111111 2466dd878b963c9d 2466dd878b963c9d 1111111111111111 OK      OK
0123456789ABCDEF 1111111111111111 61f9c3802281b096 61f9c3802281b096 1111111111111111 OK      OK
1111111111111111 0123456789ABCDEF 7d0cc630afda1ec7 7d0cc630afda1ec7 0123456789abcdef OK      OK
FEDCBA9876543210 0123456789ABCDEF 0aceab0fc6a0a28d 0aceab0fc6a0a28d 0123456789abcdef OK      OK
7CA110454A1A6E57 01A1D6D039776742 59c68245eb05282b 59c68245eb05282b 01a1d6d039776742 OK      OK
0131D9619DC1376E 5CD54CA83DEF57DA b1b8cc0b250f09a0 b1b8cc0b250f09a0 5cd54ca83def57da OK      OK
07A1133E4A0B2686 0248D43806F67172 1730e5778bea1da4 1730e5778bea1da4 0248d43806f67172 OK      OK
3849674C2602319E 51454B582DDF440A a25e7856cf2651eb a25e7856cf2651eb 51454b582ddf440a OK      OK
04B915BA43FEB5B6 42FD443059577FA2 353882b109ce8f1a 353882b109ce8f1a 42fd443059577fa2 OK      OK
0113B970FD34F2CE 059B5E0851CF143A 48f4d0884c379918 48f4d0884c379918 059b5e0851cf143a OK      OK
0170F175468FB5E6 0756D8E0774761D2 432193b78951fc98 432193b78951fc98 0756d8e0774761d2 OK      OK
43297FAD38E373FE 762514B829BF486A 13f04154d69d1ae5 13f04154d69d1ae5 762514b829bf486a OK      OK
07A7137045DA2A16 3BDD119049372802 2eedda93ffd39c79 2eedda93ffd39c79 3bdd119049372802 OK      OK
04689104C2FD3B2F 26955F6835AF609A d887e0393c2da6e3 d887e0393c2da6e3 26955f6835af609a OK      OK
37D06BB516CB7546 164D5E404F275232 5f99d04f5b163969 5f99d04f5b163969 164d5e404f275232 OK      OK
1F08260D1AC2465E 6B056E18759F5CCA 4a057a3b24d3977b 4a057a3b24d3977b 6b056e18759f5cca OK      OK
584023641ABA6176 004BD6EF09176062 452031c1e4fada8e 452031c1e4fada8e 004bd6ef09176062 OK      OK
025816164629B007 480D39006EE762F2 7555ae39f59b87bd 7555ae39f59b87bd 480d39006ee762f2 OK      OK
49793EBC79B3258F 437540C8698F3CFA 53c55f9cb49fc019 53c55f9cb49fc019 437540c8698f3cfa OK      OK
4FB05E1515AB73A7 072D43A077075292 7a8e7bfa937e89a3 7a8e7bfa937e89a3 072d43a077075292 OK      OK
49E95D6D4CA229BF 02FE55778117F12A cf9c5d7a4986adb5 cf9c5d7a4986adb5 02fe55778117f12a OK      OK
018310DC409B26D6 1D9D5C5018F728C2 d1abb290658bc778 d1abb290658bc778 1d9d5c5018f728c2 OK      OK
1C587F1C13924FEF 305532286D6F295A 55cb3774d13ef201 55cb3774d13ef201 305532286d6f295a OK      OK
0101010101010101 0123456789ABCDEF fa34ec4847b268b2 fa34ec4847b268b2 0123456789abcdef OK      OK
1F1F1F1F0E0E0E0E 0123456789ABCDEF a790795108ea3cae a790795108ea3cae 0123456789abcdef OK      OK
E0FEE0FEF1FEF1FE 0123456789ABCDEF c39e072d9fac631d c39e072d9fac631d 0123456789abcdef OK      OK
0000000000000000 FFFFFFFFFFFFFFFF 014933e0cdaff6e4 014933e0cdaff6e4 ffffffffffffffff OK      OK
FFFFFFFFFFFFFFFF 0000000000000000 f21e9a77b71c49bc f21e9a77b71c49bc 0000000000000000 OK      OK
0123456789ABCDEF 0000000000000000 245946885754369a 245946885754369a 0000000000000000 OK      OK
FEDCBA9876543210 FFFFFFFFFFFFFFFF 6b5c5a9c5d9e0a5a 6b5c5a9c5d9e0a5a ffffffffffffffff OK      OK
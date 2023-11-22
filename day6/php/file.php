<?php
require_once("utilities.php");
print file_get_contents("sample.txt");

$Content=" This is another sample content";

$result=file_put_contents("sample.txt",$Content,FILE_APPEND);
d($result);

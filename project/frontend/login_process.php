<?php
require_once("config.php");
$page=new Page();

$page->setTitle("Privacy : CarRental.com");
ob_start();
?>
<?php
if(isset($_COOKIE['secureinfo']))
{

    $secureinfoEncrypted=$_COOKIE['secureinfo'];
    $secureinfoSerialized=decryptStringWithSalt($secureinfoEncrypted,MY_SALT);
$secureinfo=unserialize($secureinfoSerialized);

if(is_array($secureinfo))
{
    $_SESSION['username']=$secureinfo['username'];
    header("location:dashboard.php");
}

    //var_dump($secureinfo);
    //var_dump($_COOKIE);
    
}
?>
<?php 
$PageContent=ob_get_clean();
$page->setPageContent($PageContent);
$page->makePage();
?>
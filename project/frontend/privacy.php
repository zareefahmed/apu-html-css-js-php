<?php
require_once("config.php");
$page=new Page();
$page->isSecurePage=false;

$page->setTitle("Privacy : CarRental.com");
ob_start();
?>
<h1> Privacy Page
</h1>


<?php 
$PageContent=ob_get_clean();
$page->setPageContent($PageContent);
$page->makePage();
?>
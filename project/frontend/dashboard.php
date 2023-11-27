<?php
require_once("config.php");
$page=new Page();

$page->setTitle("Privacy : CarRental.com");
ob_start();
?>
<h1> Dashboard Page
</h1>

<?php 
$PageContent=ob_get_clean();
$page->setPageContent($PageContent);
$page->makePage();
?>
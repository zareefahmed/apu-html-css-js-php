<?php
require_once("config.php");
$page=new Page();
$page->setTitle("My Home page for CarRental.com");
ob_start();
?>

<h2>Welcome to My Website</h2>
<p>This is the main content of the website. You can add articles, images, videos, etc. here.</p>

<div id="content">

</div>
<script>
$.ajax({
url: "http://api.mysite.com",
type: "GET",
dataType: "text",
success: function(response) {
$('#content').text(response);
}
});

</script>

<?php 
$PageContent=ob_get_clean();
$page->setPageContent($PageContent);
$page->makePage();
?>
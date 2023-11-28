<?php
require_once("config.php");
$page=new Page();

$page->setTitle("Book : CarRental.com");
ob_start();
?>
<h1> Book the Car
</h1>
<?php
if(isset($_GET['carid'])){
$carid=$_GET['carid'];
?>


Calendar Field : For Start Date, For End Date and Comments section 
Form should not create or call makebooking if all the above information is not provided.
<h2>Car Details</h2>
<textarea> Please write your specific instructions here</textarea>
<button onclick='makeBooking()'>Confirm </button>
<?php 
}else{
    print "Car ID was not provided.";
}

?>
<script>
    function makeBooking(){
    var form = new FormData();
form.append("action", "makebooking");
form.append("carid", "1");
form.append("username", "zareef");
form.append("startdate", "2023-11-27 07:52:45.000000");
form.append("enddate", "2023-11-28 07:52:45.000000");
form.append("bookingdate", "2023-11-27 07:52:45.000000");
form.append("rate", "2");

var settings = {
  "url": "http://api.carrental.com",
  "method": "POST",
  "timeout": 0,
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
    }

    </script>
<?php 
$PageContent=ob_get_clean();
$page->setPageContent($PageContent);
$page->makePage();
?>
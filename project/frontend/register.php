<?php
require_once("config.php");
$page=new Page();
$page->isSecurePage=false;

$page->setTitle("Register : CarRental.com");
ob_start();
?>
<h1> Book the Car
</h1>
<div id="bookingform">
<?php
if(isset($_GET['carid'])){
$carid=$_GET['carid'];
?>


Calendar Field : For Start Date, For End Date and Comments section 
Form should not create or call makebooking if all the above information is not provided.
<h2>Car Details</h2>
Start Date : <input type="date" id="startdate">
End Date : <input type="date" id="enddate">
<!--
Let's use hidden fields, in production, you can use processing via PHP on server end.
-->
<input type="hidden" id="username" value='<?php print $_SESSION['username']; ?>'>
<input type="hidden" id="carid" value='<?php print $_GET['carid']; ?>'>
<input type="hidden" id="rate" value='<?php print $_GET['rate']; ?>'>


<textarea id="comments"> Please write your specific instructions here</textarea>
<br>
<button onclick='makeBooking()'>Confirm </button>
<?php 
}else{
    print "Car ID was not provided.";
}

?>
</div>
<script>
    function makeBooking(){
carid=document.getElementById("carid").value;
username=document.getElementById("username").value;
startdate=document.getElementById("startdate").value;
enddate=document.getElementById("enddate").value;
comments=document.getElementById("comments").value;
currentdate= new Date();
bookingdate=currentdate.toLocaleString();

console.log(bookingdate);



    var form = new FormData();
form.append("action", "makebooking");
form.append("carid", carid);
form.append("username", username);
//form.append("startdate", "2023-11-27 07:52:45.000000");
form.append("startdate", startdate);

form.append("enddate", enddate);
form.append("bookingdate",bookingdate);
form.append("comments", comments);

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
//console.log(form);
$.ajax(settings).done(function (response) {
    response_obj=JSON.parse(response);
    if(response_obj.status=="success")
    {
        bookingId=response_obj.bookingid;
        $("#bookingform").html("");
        $("#bookingform").html("<h2> Your booking was confirmed. You booking ID is : " + bookingId + "</h2>");

        console.log("Booking was a success");
    }
  console.log(response_obj);
});
    }

    </script>
<?php 
$PageContent=ob_get_clean();
$page->setPageContent($PageContent);
$page->makePage();
?>
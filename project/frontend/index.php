<?php
require_once("config.php");
$page=new Page();
$page->isSecurePage=false;
$page->setTitle("My Home page for CarRental.com");

ob_start();
?>

<h2>Welcome to My Website</h2>
<p>This is the main content of the website. You can add articles, images, videos, etc. here.</p>
<?php 
include("parts/searchbar.php");
?>
<div id="content">

<div id="listing"></div>
</div>
<script>

function searchCars(){
    var searchtext=document.getElementById('searchtext').value;
    var searchcat=document.getElementById('searchcat').value;
    //console.log("Search Cat :" +searchcat);

$.ajax({
url: "http://api.carrental.com",
type: "POST",
data:{action:"searchcar",q:searchtext,cat:searchcat}})
.done(
function(response) {
    response_obj=JSON.parse(response);
    if(response_obj.status=="failure")
    {
        $('#errors').text(response_obj.message);

    }

    if(response_obj.status=="success")
    {
    
      //  console.log(response_obj.results);
        $('#listing').html("");

        response_obj.results.forEach(car => {
                //    console.log(car);
                    const carRow = `
                        <div class="row">
                            <div class="cell">${car.id}</div>
                            <div class="cell">${car.title}</div>
                            <div class="cell">${car.details}</div>
                            <div class="cell"><a href='book.php?carid=${car.id}&rate=${car.rate}'>Book It Now</a></div>
                            
                        </div>
                    `;
                    $('#listing').append(carRow);
                });
            
        

    }



});
}

//searchCars();
</script>

<?php 
$PageContent=ob_get_clean();
$page->setPageContent($PageContent);
$page->makePage();
?>
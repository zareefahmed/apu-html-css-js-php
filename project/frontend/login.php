<?php
require_once("config.php");
$page=new Page();
$page->isSecurePage=false;
$page->setTitle("Login : CarRental.com");
ob_start();
// First type of pages: For anyone, be it guest or logged in users
// Second type of pages: For only logged in users
// Third type of pages: should only be available for guests.
// Login and register are third type of pages.
if(is_userloggedIn())
{
    header("location:dashboard.php");
}
?>
<h1> Login</h1>

    UserName <input type="text" id="username" name="username">
    Password <input type="password" id="password" name="password">
    <button onclick="checkLogin()"> Login</button>
<div id="errors"></div>
    <script>
        function checkLogin(){

username=document.getElementById("username").value;
password=document.getElementById("password").value;
//console.log(username);
//console.log(password);

$.ajax({
url: "http://api.carrental.com",
type: "POST",
data:{action:"login" ,username: username, password: password }})
.done(
function(response) {
    response_obj=JSON.parse(response);
    if(response_obj.status=="failure")
    {
        $('#errors').text(response_obj.message);

    }

    if(response_obj.status=="success")
    {
//        document.cookie
secureinfo=response_obj.secureinfo;
console.log(secureinfo);
// !!!!!! NEVER NEVER NEVER EVER use this method for security in production. This is only for demonstration purpose of using cookies.

        document.cookie = "secureinfo="+secureinfo;

        window.location="login_process.php";


        //$('#errors').text(response_obj.message);

    }



});
}
</script>

<div id="result"></div>

<?php 
$PageContent=ob_get_clean();
$page->setPageContent($PageContent);
$page->makePage();
?>
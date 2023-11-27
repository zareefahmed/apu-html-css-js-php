<?php
require_once("config.php");
$page=new Page();
$page->setTitle("Login : CarRental.com");
ob_start();
?>
<h1> Login</h1>

    UserName <input type="text" id="username" name="username">
    Password <input type="password" id="password" name="password">
    <button onclick="checkLogin()"> Login</button>

    <script>
        function checkLogin(){

username=document.getElementById("username").value;
password=document.getElementById("password").value;
console.log(username);
console.log(password);

$.ajax({
url: "http://api.carrental.com",
type: "POST",
data:{ username: username, password: password }})
.done(
function(response) {
$('#result').text(response);
});
}
</script>

<div id="result"></div>

<?php 
$PageContent=ob_get_clean();
$page->setPageContent($PageContent);
$page->makePage();
?>
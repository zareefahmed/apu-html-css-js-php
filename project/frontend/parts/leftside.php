<h2>Sidebar</h2>
            <ul>
                <li><a href="/">Home</a></li>

                <?php 
if(is_userloggedIn()){
    ?>
               <li><a href="/dashboard.php">My Bookings</a></li>
               <li><a href="/logout.php">Logout</a></li>


<?php
}else {

?>
                
                <li><a href="/login.php">Login</a></li>
                <li><a href="/register.php">Register</a></li>
 
<?php 
}
                ?>
            </ul>
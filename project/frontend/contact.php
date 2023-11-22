<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental : Contact Page</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body> 

<div class="container">
    <header>
    <?php 
 include("header.php");        
        ?>
    </header>

    <main>
        <aside class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </aside>

        <section class="content">
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

        </section>
    </main>

    <footer>
        <p>&copy; 2023 Car Rental Website</p>
        <span><a href="privacy.php"> Privacy</a> | <a href="contact.php"> Contact</a> | </span>
    </footer>
</div>

</body>
</html>
A simple example of a top menu bar that converts into a burger bar when the device width is low:

### HTML:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Menu Bar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-list">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <script src="script.js"></script>
</body>
</html>
```

### CSS (`styles.css`):

```css
body {
    font-family: Arial, sans-serif;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 10px 20px;
}

.nav-list {
    list-style-type: none;
    padding: 0;
    display: flex;
}

.nav-list li {
    margin: 0 15px;
}

.nav-list li a {
    text-decoration: none;
    color: white;
    transition: 0.3s;
}

.nav-list li a:hover {
    color: #ddd;
}

.menu-toggle {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.bar {
    background-color: white;
    height: 3px;
    width: 25px;
    margin: 3px;
    border-radius: 2px;
}

@media screen and (max-width: 768px) {
    .nav-list {
        display: none;
        width: 100%;
        text-align: center;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #333;
        flex-direction: column;
    }

    .nav-list.active {
        display: flex;
    }

    .nav-list li {
        margin: 10px 0;
    }

    .menu-toggle {
        display: flex;
    }
}
```

### JavaScript (`script.js`):

```javascript
const mobileMenuButton = document.getElementById("mobile-menu");
const navList = document.querySelector(".nav-list");

mobileMenuButton.addEventListener("click", function() {
    navList.classList.toggle("active");
});
```

In this example:

- The top menu bar is displayed as a horizontal list of links on wider screens.
- When the screen width is 768 pixels or narrower, the menu bar is hidden, and a burger icon (three horizontal bars) is displayed.
- Clicking the burger icon toggles the visibility of the menu bar, which is displayed as a vertical list of links on smaller screens.

This setup provides a responsive navigation experience suitable for both desktop and mobile devices.
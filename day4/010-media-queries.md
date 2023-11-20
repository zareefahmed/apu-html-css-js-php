A simple example of an HTML page setup with media queries targeting two different media types: desktop screens and mobile screens.

### HTML:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Query Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to My Website</h1>
        <p>This is a simple example to demonstrate media queries.</p>
    </div>
</body>
</html>
```

### CSS (`styles.css`):

```css
/* Base styles (applied by default) */
.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    text-align: center;
}

h1 {
    color: #333;
}

p {
    color: #666;
}

/* Media query for desktop screens */
@media screen and (min-width: 768px) {
    .container {
        background-color: #e0e0e0;
    }

    h1 {
        color: #111;
    }

    p {
        color: #444;
    }
}

/* Media query for mobile screens */
@media screen and (max-width: 767px) {
    .container {
        background-color: #d0d0d0;
    }

    h1 {
        color: #555;
    }

    p {
        color: #888;
    }
}
```

In this example:

- The base styles are applied by default to all screen sizes.
- The first media query targets desktop screens with a minimum width of 768 pixels. When the viewport is 768 pixels or wider, the styles inside this media query will be applied.
- The second media query targets mobile screens with a maximum width of 767 pixels. When the viewport is 767 pixels or narrower, the styles inside this media query will be applied.

This setup ensures that the page will have a different appearance on desktop and mobile screens, demonstrating the power and flexibility of media queries in responsive web design.
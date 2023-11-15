Let's create a simple animation where a circle moves from the left to the right side of a container when hovered over.
 
### HTML:
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="animation-container">
        <div class="circle"></div>
    </div>
</body>
</html>
```

### CSS (`styles.css`):
```css
.animation-container {
    width: 300px;
    height: 100px;
    border: 2px solid black;
    position: relative;
    overflow: hidden; /* To ensure the circle doesn't overflow the container */
}

.circle {
    width: 50px;
    height: 50px;
    background-color: blue;
    border-radius: 50%;  /* This makes the div a circle shape */
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%); /* This centers the circle vertically */

    /* Animation properties */
    transition: all 2s; /* Specifies the animation duration and property to animate */
}

.animation-container:hover .circle {
    left: calc(100% - 50px); /* On hover, move the circle to the right end of the container */
}
```

### Explanation:
1. We have a container, `.animation-container`, and within it, a circle div, `.circle`.
2. By default, the circle is on the left side of the container (`left: 0;`).
3. The `transition` property on `.circle` tells the browser to animate any changing properties over 2 seconds.
4. When you hover over the `.animation-container`, the CSS rule `.animation-container:hover .circle` is activated, which moves the circle to the right side of the container.
5. Thanks to the `transition` property, the movement of the circle is smoothly animated over 2 seconds.

You can place the above HTML and CSS in respective files, and when you open the HTML file in a browser and hover over the container, you should see the circle smoothly move from the left to the right.

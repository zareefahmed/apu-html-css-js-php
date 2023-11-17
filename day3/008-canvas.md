The HTML5 `<canvas>` element is used to draw graphics on a web page via scripting (usually JavaScript). Here's an example of how to use the `<canvas>` element to draw a simple animated circle:

### Step 1: HTML Structure

First, you'll need to add the `<canvas>` element to your HTML:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canvas Example</title>
</head>
<body>
    <canvas id="myCanvas" width="500" height="500"></canvas>
    <script src="script.js"></script>
</body>
</html>
```

### Step 2: JavaScript

Next, create a file named `script.js` and add the following JavaScript code:

```javascript
const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');

let x = canvas.width / 2;
let y = canvas.height - 30;
let dx = 2;
let dy = -2;
const ballRadius = 10;

function drawBall() {
    ctx.beginPath();
    ctx.arc(x, y, ballRadius, 0, Math.PI * 2);
    ctx.fillStyle = "#0095DD";
    ctx.fill();
    ctx.closePath();
}

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawBall();

    if (x + dx > canvas.width - ballRadius || x + dx < ballRadius) {
        dx = -dx;
    }
    if (y + dy > canvas.height - ballRadius || y + dy < ballRadius) {
        dy = -dy;
    }

    x += dx;
    y += dy;

    requestAnimationFrame(draw);
}

draw();
```

In this example:

- We first get a reference to the canvas element and its 2D drawing context.
- We define the position `(x, y)` of the circle and its movement direction `(dx, dy)`.
- The `drawBall` function is responsible for drawing a circle at the current `(x, y)` position.
- The `draw` function clears the canvas, draws the ball, updates the position, and checks for collisions with the canvas boundaries to reverse the direction.
- We use `requestAnimationFrame` to create a smooth animation.

When you open the HTML file in a browser, you'll see a blue circle bouncing around inside the canvas. This is a basic example, but the `<canvas>` element is capable of much more complex graphics and animations.
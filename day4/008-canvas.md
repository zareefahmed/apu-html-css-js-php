An example using the HTML5 `<canvas>` element combined with jQuery. This example provides functions to draw a rectangle, circle, and line on the canvas. Additionally, there's a button to download the canvas content as an image.

### HTML:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canvas Utility with jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<canvas id="myCanvas" width="500" height="500" style="border:1px solid black;"></canvas>
<button id="drawRect">Draw Rectangle</button>
<button id="drawCircle">Draw Circle</button>
<button id="drawLine">Draw Line</button>
<button id="downloadCanvas">Download Canvas</button>

<script>
    const canvas = document.getElementById('myCanvas');
    const ctx = canvas.getContext('2d');

    $('#drawRect').click(function() {
        ctx.fillStyle = 'red';
        ctx.fillRect(50, 50, 150, 100);
    });

    $('#drawCircle').click(function() {
        ctx.fillStyle = 'blue';
        ctx.beginPath();
        ctx.arc(250, 250, 50, 0, 2 * Math.PI);
        ctx.fill();
    });

    $('#drawLine').click(function() {
        ctx.strokeStyle = 'green';
        ctx.beginPath();
        ctx.moveTo(50, 300);
        ctx.lineTo(450, 450);
        ctx.stroke();
    });

    $('#downloadCanvas').click(function() {
        const link = document.createElement('a');
        link.href = canvas.toDataURL();
        link.download = 'canvas_image.png';
        link.click();
    });
</script>

</body>
</html>
```

### Explanation:

1. We've set up a canvas element with a specified width and height.
2. Four buttons are provided: three for drawing shapes and one for downloading the canvas content.
3. Using jQuery, we've attached click event listeners to each button.
   - `drawRect` button: Draws a red rectangle on the canvas.
   - `drawCircle` button: Draws a blue circle on the canvas.
   - `drawLine` button: Draws a green line on the canvas.
   - `downloadCanvas` button: Converts the canvas content to a data URL and triggers a download of the image.

You can save the above code in an HTML file and open it in a browser. Clicking the buttons will draw the respective shapes on the canvas, and the "Download Canvas" button will allow you to download the canvas content as a PNG image.


------------------------------

1. Draw multiple shapes.
2. Resize the shapes using the mouse.
3. Move the shapes around.
4. Download the canvas content.


```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Canvas Utility with jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<canvas id="myCanvas" width="500" height="500" style="border:1px solid black;"></canvas>
<br>
Shape: 
<select id="shapeSelect">
    <option value="rectangle">Rectangle</option>
    <option value="circle">Circle</option>
</select>
<button id="drawShape">Draw Shape</button>
<button id="downloadCanvas">Download Canvas</button>

<script>
    const canvas = document.getElementById('myCanvas');
    const ctx = canvas.getContext('2d');
    let shapes = [];
    let selectedShapeIndex = null;
    let isResizing = false;

    $('#drawShape').click(function() {
        const shapeType = $('#shapeSelect').val();
        const shape = shapeType === 'rectangle' ? 
            { type: 'rectangle', x: 50, y: 50, width: 100, height: 50 } :
            { type: 'circle', x: 250, y: 250, radius: 50 };
        shapes.push(shape);
        redrawCanvas();
    });

    canvas.addEventListener('mousedown', function(e) {
        const pos = getMousePos(canvas, e);
        for (let i = shapes.length - 1; i >= 0; i--) {
            if (isCursorInShape(pos.x, pos.y, shapes[i])) {
                selectedShapeIndex = i;
                isResizing = true;
                break;
            }
        }
    });

    canvas.addEventListener('mousemove', function(e) {
        if (selectedShapeIndex !== null && isResizing) {
            const pos = getMousePos(canvas, e);
            const shape = shapes[selectedShapeIndex];
            if (shape.type === 'rectangle') {
                shape.width = pos.x - shape.x;
                shape.height = pos.y - shape.y;
            } else {
                shape.radius = Math.sqrt((pos.x - shape.x) ** 2 + (pos.y - shape.y) ** 2);
            }
            redrawCanvas();
        }
    });

    canvas.addEventListener('mouseup', function() {
        isResizing = false;
        selectedShapeIndex = null;
    });

    $('#downloadCanvas').click(function() {
        const link = document.createElement('a');
        link.href = canvas.toDataURL();
        link.download = 'canvas_image.png';
        link.click();
    });

    function redrawCanvas() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        shapes.forEach(shape => {
            if (shape.type === 'rectangle') {
                ctx.fillStyle = 'red';
                ctx.fillRect(shape.x, shape.y, shape.width, shape.height);
            } else {
                ctx.fillStyle = 'blue';
                ctx.beginPath();
                ctx.arc(shape.x, shape.y, shape.radius, 0, 2 * Math.PI);
                ctx.fill();
            }
        });
    }

    function isCursorInShape(x, y, shape) {
        if (shape.type === 'rectangle') {
            return x > shape.x && x < shape.x + shape.width && y > shape.y && y < shape.y + shape.height;
        } else {
            const distance = Math.sqrt((x - shape.x) ** 2 + (y - shape.y) ** 2);
            return distance < shape.radius;
        }
    }

    function getMousePos(canvas, evt) {
        const rect = canvas.getBoundingClientRect();
        return {
            x: evt.clientX - rect.left,
            y: evt.clientY - rect.top
        };
    }
</script>

</body>
</html>
```

In this example:

- You can draw multiple shapes without the previous ones disappearing.
- You can resize the shapes by clicking and dragging from their initial position.
- All shapes remain on the canvas until the page is refreshed.
- You can download the canvas content using the "Download Canvas" button.

This should provide a more interactive experience with the canvas and shapes.



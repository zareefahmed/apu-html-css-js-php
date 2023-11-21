
## Example 1

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformations Demo</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            width: 100px;
            height: 100px;
            background-color: #3498db;
            transition: transform 0.5s;
        }

        .box:hover {
            transform: rotate(45deg) scale(1.5) translateX(50px);
        }

        .circle {
            width: 100px;
            height: 100px;
            background-color: #e74c3c;
            border-radius: 50%;
            transition: transform 0.5s;
        }

        .circle:hover {
            transform: rotate(180deg) scale(0.5) translateY(-50px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box"></div>
        <div class="circle"></div>
    </div>

   
</body>
</html>
```

In this example:

- There are two shapes: a box and a circle.
- When you hover over the box, it rotates 45 degrees, scales up by 1.5 times, and moves to the right by 50 pixels.
- When you hover over the circle, it rotates 180 degrees, scales down by half, and moves up by 50 pixels.


--------------

## Example 2

Let's add some interactivity using JavaScript.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformations Demo with JavaScript</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            width: 100px;
            height: 100px;
            background-color: #3498db;
            transition: transform 0.5s;
        }

        .box:hover {
            transform: rotate(45deg) scale(1.5) translateX(50px);
        }

        .circle {
            width: 100px;
            height: 100px;
            background-color: #e74c3c;
            border-radius: 50%;
            transition: transform 0.5s, border-radius 0.5s;
        }

        .circle:hover {
            transform: rotate(180deg) scale(0.5) translateY(-50px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box" id="box"></div>
        <div class="circle" id="circle"></div>
    </div>

    <script>
        const box = document.getElementById('box');
        const circle = document.getElementById('circle');

        box.addEventListener('click', function() {
            const randomColor = '#' + Math.floor(Math.random()*16777215).toString(16);
            box.style.backgroundColor = randomColor;
        });

        circle.addEventListener('click', function() {
            if (circle.style.borderRadius === '50%') {
                circle.style.borderRadius = '0%';
            } else {
                circle.style.borderRadius = '50%';
            }
        });
    </script>
</body>
</html>
```

In this enhanced version:

- When you click on the box, its color changes to a random color.
- When you click on the circle, it toggles between being a circle and a square.

This demonstrates how you can combine CSS transformations with JavaScript interactivity to create dynamic effects on a web page.


-----

## Another Example


```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation Examples</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="box rotate">Rotate</div>
    <div class="box slide">Slide</div>
    <div class="box pulse">Pulse</div>
    <div class="box color-change">Color Change</div>
</body>
</html>
```

### CSS (styles.css):

```css
body {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    gap: 20px;
}

.box {
    width: 150px;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid black;
}

@keyframes rotateAnimation {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

@keyframes slideAnimation {
    0% { transform: translateY(0); }
    50% { transform: translateY(30px); }
    100% { transform: translateY(0); }
}

@keyframes pulseAnimation {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

@keyframes colorChangeAnimation {
    0% { background-color: red; }
    50% { background-color: green; }
    100% { background-color: blue; }
}

.rotate {
    animation: rotateAnimation 5s infinite;
}

.slide {
    animation: slideAnimation 2s infinite;
}

.pulse {
    animation: pulseAnimation 1s infinite;
}

.color-change {
    animation: colorChangeAnimation 4s infinite;
}
```

### Explanation:

1. **Rotate**: This `div` will rotate 360 degrees continuously.
2. **Slide**: This `div` will slide up and down.
3. **Pulse**: This `div` will scale up and down, creating a pulsing effect.
4. **Color Change**: This `div` will change its background color between red, green, and blue.

When you combine the provided HTML and CSS, you'll have a full page with four animated `div` elements, each showcasing a different animation. You can further customize or add more animations as needed!

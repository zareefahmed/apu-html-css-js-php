## Example 1 

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Transitions Demo</title>
    <style>
        /* Basic button styling */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            transition: all 0.3s; /* Default transition */
        }

        /* Hover effects */
        .btn:hover {
            transform: scale(1.1); /* Slightly enlarge the button */
        }

        /* Fade effect */
        .btn-fade:hover {
            opacity: 0.7;
        }

        /* Rotate effect */
        .btn-rotate:hover {
            transform: rotate(15deg);
        }

        /* Skew effect */
        .btn-skew:hover {
            transform: skewX(10deg);
        }

        /* Translate effect */
        .btn-translate:hover {
            transform: translateX(10px);
        }

        /* Color change effect */
        .btn-color:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>CSS Transitions Demo</h2>

    <button class="btn btn-fade">Fade Effect</button>
    <button class="btn btn-rotate">Rotate Effect</button>
    <button class="btn btn-skew">Skew Effect</button>
    <button class="btn btn-translate">Translate Effect</button>
    <button class="btn btn-color">Color Change Effect</button>

</body>
</html>
```

---------------

## Example 2 

A sample HTML and CSS code for a page with images that demonstrate some popular CSS transitions:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Transitions with Images Demo</title>
    <style>
        /* Basic image styling */
        .img-container {
            display: inline-block;
            margin: 10px;
            overflow: hidden;
            border-radius: 10px;
            transition: all 0.3s; /* Default transition */
        }

        .img-container img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        /* Hover effects */
        .img-fade:hover img {
            opacity: 0.7;
        }

        .img-scale:hover img {
            transform: scale(1.1);
        }

        .img-rotate:hover img {
            transform: rotate(15deg);
        }

        .img-translate:hover img {
            transform: translateX(20px);
        }

    </style>
</head>
<body>
    <h2>CSS Transitions with Images Demo</h2>

    <div class="img-container img-fade">
        <img src="https://images.unsplash.com/photo-1600716051809-e997e11a5d52?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NDgzMDl8MHwxfHNlYXJjaHwxfHxzYW1wbGUlMjBpbWFnZXxlbnwwfHx8fDE2OTc3MzM5NzB8MA&ixlib=rb-4.0.3&q=80&w=400" alt="sliced lemon">
    </div>

    <div class="img-container img-scale">
        <img src="https://images.unsplash.com/photo-1642480532034-362360552ccb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NDgzMDl8MHwxfHNlYXJjaHwyfHxzYW1wbGUlMjBpbWFnZXxlbnwwfHx8fDE2OTc3MzM5NzB8MA&ixlib=rb-4.0.3&q=80&w=400" alt="pantone book">
    </div>

    <div class="img-container img-rotate">
        <img src="https://images.unsplash.com/photo-1579165466741-7f35e4755660?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NDgzMDl8MHwxfHNlYXJjaHwzfHxzYW1wbGUlMjBpbWFnZXxlbnwwfHx8fDE2OTc3MzM5NzB8MA&ixlib=rb-4.0.3&q=80&w=400" alt="clear glass bottle">
    </div>

    <div class="img-container img-translate">
        <img src="https://images.unsplash.com/photo-1582719201952-ea63ac1671dc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NDgzMDl8MHwxfHNlYXJjaHw0fHxzYW1wbGUlMjBpbWFnZXxlbnwwfHx8fDE2OTc3MzM5NzB8MA&ixlib=rb-4.0.3&q=80&w=400" alt="man in white dress shirt">
    </div>

</body>
</html>
```

-------------

## Example 3


A sample HTML and CSS code for a page with different menu styles that demonstrate some popular CSS transitions:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Transitions with Menus Demo</title>
    <style>
        /* Basic menu styling */
        ul.menu {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
            width: 200px;
        }

        ul.menu li {
            margin: 10px 0;
            transition: all 0.3s; /* Default transition */
        }

        ul.menu a {
            text-decoration: none;
            color: #007BFF;
            padding: 10px 15px;
            display: block;
            border-radius: 5px;
        }

        /* Hover effects */

        /* Background fade effect */
        .menu-bg-fade:hover a {
            background-color: #e6f0ff;
        }

        /* Text color change effect */
        .menu-text-color:hover a {
            color: #0056b3;
        }

        /* Border slide-in effect */
        .menu-border-slide a {
            border-bottom: 3px solid transparent;
        }

        .menu-border-slide:hover a {
            border-bottom: 3px solid #007BFF;
        }

        /* Text slide effect */
        .menu-text-slide a {
            position: relative;
            padding-left: 30px;
        }

        .menu-text-slide a::before {
            content: '→';
            position: absolute;
            left: 10px;
            transition: all 0.3s;
        }

        .menu-text-slide:hover a::before {
            left: 0;
        }

    </style>
</head>
<body>
    <h2>CSS Transitions with Menus Demo</h2>

    <h3>Background Fade Effect</h3>
    <ul class="menu menu-bg-fade">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <h3>Text Color Change Effect</h3>
    <ul class="menu menu-text-color">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <h3>Border Slide-in Effect</h3>
    <ul class="menu menu-border-slide">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <h3>Text Slide Effect</h3>
    <ul class="menu menu-text-slide">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

</body>
</html>
```


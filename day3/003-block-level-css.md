Block-level elements in HTML are elements that typically start on a new line and stretch the full width of their parent container. Examples of block-level elements include `<div>`, `<p>`, `<h1>` through `<h6>`, `<ul>`, `<ol>`, and `<li>`, among others.

When styling block elements with CSS, there are several properties that are commonly used:

1. **Width and Height**: 
   - `width`: Specifies the width of the element.
   - `height`: Specifies the height of the element.
   ```css
   div {
       width: 300px;
       height: 200px;
   }
   ```

2. **Margin and Padding**: 
   - `margin`: Specifies the space outside the element.
   - `padding`: Specifies the space inside the element, between the content and the border.
   ```css
   p {
       margin: 20px;
       padding: 15px;
   }
   ```

3. **Border**: 
   - `border`: Defines the border around the element. It can be further broken down into `border-width`, `border-color`, and `border-style`.
   ```css
   div {
       border: 2px solid black;
   }
   ```

4. **Background**: 
   - `background-color`: Sets the background color of the element.
   - `background-image`: Sets a background image for the element.
   - `background-repeat`: Determines if/how the background image will repeat.
   - `background-position`: Positions the background image.
   ```css
   div {
       background-color: #f5f5f5;
       background-image: url('path-to-image.jpg');
       background-repeat: no-repeat;
       background-position: center center;
   }
   ```

5. **Display**: 
   - `display`: Determines how the element should be displayed. Common values include `block`, `inline`, `inline-block`, `flex`, `grid`, and `none`.
   ```css
   div {
       display: inline-block;
   }
   ```

6. **Overflow**: 
   - `overflow`: Specifies what should happen if the content overflows the element's box. Common values are `visible`, `hidden`, `scroll`, and `auto`.
   ```css
   div {
       overflow: auto;
   }
   ```

7. **Position**: 
   - `position`: Determines the type of positioning method used for an element. Common values are `static`, `relative`, `absolute`, `fixed`, and `sticky`.
   - `top`, `right`, `bottom`, `left`: Determine the position of the element when it's not `static`.
   ```css
   div {
       position: absolute;
       top: 50px;
       left: 100px;
   }
   ```

8. **Box Model**: 
   - `box-sizing`: Defines how the total width and height of an element are calculated. Values are `content-box` (default) and `border-box`.
   ```css
   div {
       box-sizing: border-box;
   }
   ```

9. **Text Alignment and Decoration**:
   - `text-align`: Aligns the text within the block element. Common values are `left`, `right`, `center`, and `justify`.
   - `text-decoration`: Sets the text formatting. Common values are `none`, `underline`, `overline`, and `line-through`.
   ```css
   p {
       text-align: center;
       text-decoration: underline;
   }
   ```

10. **Float and Clear**:
   - `float`: Specifies how an element should float. Common values are `left`, `right`, and `none`.
   - `clear`: Specifies which sides of an element other floating elements are not allowed to float. Common values are `none`, `left`, `right`, `both`.
   ```css
   div {
       float: left;
   }
   p {
       clear: both;
   }
   ```

----------

## Example 


```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Tester</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #sampleBox {
            width: 200px;
            height: 200px;
            border: 2px solid black;
            margin: 20px;
            padding: 10px;
            background-color: lightgray;
        }
    </style>
</head>
<body>

<div id="sampleBox">
    This is a sample box. Click the buttons below to apply CSS properties.
</div>

<button onclick="changeBackground()">Change Background</button>
<button onclick="toggleBorder()">Toggle Border</button>
<button onclick="increasePadding()">Increase Padding</button>
<button onclick="changeTextAlign()">Change Text Alignment</button>

<script>
    function changeBackground() {
        $("#sampleBox").css("background-color", "lightblue");
    }

    function toggleBorder() {
        let currentBorder = $("#sampleBox").css("border");
        if (currentBorder === "2px solid rgb(0, 0, 0)") {
            $("#sampleBox").css("border", "none");
        } else {
            $("#sampleBox").css("border", "2px solid black");
        }
    }

    function increasePadding() {
        let currentPadding = parseInt($("#sampleBox").css("padding"));
        $("#sampleBox").css("padding", (currentPadding + 10) + "px");
    }

    function changeTextAlign() {
        let currentAlign = $("#sampleBox").css("text-align");
        if (currentAlign === "left") {
            $("#sampleBox").css("text-align", "center");
        } else {
            $("#sampleBox").css("text-align", "left");
        }
    }
</script>

</body>
</html>
```

In this example:

- We have a `sampleBox` div that you can style.
- Four buttons allow you to:
  1. Change the background color of the box.
  2. Toggle the border of the box on and off.
  3. Increase the padding of the box.
  4. Change the text alignment inside the box.

You can expand upon this example by adding more buttons and functions to test other CSS properties as needed.


----------

## Example CSS Float


```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Float Tester</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #sampleBox {
            width: 200px;
            height: 200px;
            border: 2px solid black;
            margin: 20px;
            padding: 10px;
            background-color: lightgray;
        }

        .floatBox {
            width: 100px;
            height: 100px;
            border: 1px solid red;
            margin: 10px;
            background-color: pink;
        }
    </style>
</head>
<body>

<div id="sampleBox">
    This is a sample box. Click the buttons below to apply CSS properties.
</div>

<div class="floatBox">Float Box 1</div>
<div class="floatBox">Float Box 2</div>

<button onclick="floatLeft()">Float Left</button>
<button onclick="floatRight()">Float Right</button>
<button onclick="clearFloat()">Clear Float</button>
<button onclick="resetFloat()">Reset Float</button>

<script>
    function floatLeft() {
        $(".floatBox").css("float", "left");
    }

    function floatRight() {
        $(".floatBox").css("float", "right");
    }

    function clearFloat() {
        $("#sampleBox").css("clear", "both");
    }

    function resetFloat() {
        $(".floatBox").css("float", "none");
        $("#sampleBox").css("clear", "none");
    }
</script>

</body>
</html>
```

In this enhanced example:

- Two `floatBox` divs have been added. These boxes will be used to demonstrate the `float` property.
- Four buttons have been added to:
  1. Float the boxes to the left.
  2. Float the boxes to the right.
  3. Clear the float on the `sampleBox`, which will move it below any floated elements.
  4. Reset the float on all boxes to their original state.

You can click the buttons to see how the `float` property affects the positioning of the boxes in relation to each other and the `sampleBox`.

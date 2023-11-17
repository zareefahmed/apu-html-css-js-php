Text styling is a significant aspect of CSS3. Here are some major text styles you can apply:

1. **Font Family**: Specifies the typeface.
2. **Font Size**: Sets the size of the text.
3. **Font Weight**: Determines the thickness of the characters.
4. **Font Style**: Typically used to set italic text.
5. **Text Transform**: Controls the capitalization of text.
6. **Text Decoration**: Used mainly for underlining text.
7. **Text Shadow**: Adds shadow to the text.
8. **Line Height**: Controls the space between lines of text.
9. **Letter Spacing**: Adjusts the space between characters.
10. **Word Spacing**: Adjusts the space between words.
11. **Text Align**: Aligns the text within its container.
12. **Color**: Sets the color of the text.

Here's an example with different functions to apply these styles, and buttons to trigger them:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Styling with CSS3</title>
    <style>
        #text {
            font-family: Arial, sans-serif;
            font-size: 20px;
        }
    </style>
</head>
<body>

<p id="text">This is a sample text.</p>

<button onclick="changeFont()">Change Font</button>
<button onclick="makeBold()">Make Bold</button>
<button onclick="makeItalic()">Make Italic</button>
<button onclick="underlineText()">Underline</button>
<button onclick="addShadow()">Add Shadow</button>

<script>
    function changeFont() {
        document.getElementById('text').style.fontFamily = 'Georgia, serif';
    }

    function makeBold() {
        document.getElementById('text').style.fontWeight = 'bold';
    }

    function makeItalic() {
        document.getElementById('text').style.fontStyle = 'italic';
    }

    function underlineText() {
        document.getElementById('text').style.textDecoration = 'underline';
    }

    function addShadow() {
        document.getElementById('text').style.textShadow = '2px 2px 5px gray';
    }
</script>

</body>
</html>
```

------------

## Example with Jquery

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Styling with CSS3 and jQuery</title>
    <style>
        #text {
            font-family: Arial, sans-serif;
            font-size: 20px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<p id="text">This is a sample text.</p>

<button id="changeFont">Change Font</button>
<button id="makeBold">Make Bold</button>
<button id="makeItalic">Make Italic</button>
<button id="underlineText">Underline</button>
<button id="addShadow">Add Shadow</button>

<script>
    $(document).ready(function() {
        $("#changeFont").click(function() {
            $("#text").css("font-family", "Georgia, serif");
        });

        $("#makeBold").click(function() {
            $("#text").css("font-weight", "bold");
        });

        $("#makeItalic").click(function() {
            $("#text").css("font-style", "italic");
        });

        $("#underlineText").click(function() {
            $("#text").css("text-decoration", "underline");
        });

        $("#addShadow").click(function() {
            $("#text").css("text-shadow", "2px 2px 5px gray");
        });
    });
</script>

</body>
</html>

```



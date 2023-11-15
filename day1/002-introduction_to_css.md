### Introduction to CSS

CSS stands for **Cascading Style Sheets**. It's a stylesheet language used for describing the look and formatting of a document written in HTML or XML. CSS describes how elements should be rendered on screen, on paper, in speech, or on other media. CSS is one of the core languages of the Web and is standardized by the W3C.

#### Benefits of CSS:
1. **Separation of Content from Presentation**: You can separate the content of your website (HTML or XML) from its style (CSS).
2. **Reuse**: Once you define a style, you can use it for any number of elements on a page or across multiple pages.
3. **Consistency**: By defining styles in one place, you ensure consistent styling across your website.
4. **Flexibility**: With CSS, you can define multiple styles for the same HTML elements and choose which one to use based on device type, screen size, or other conditions.

### Basic Syntax:

A CSS rule has two main parts: a **selector** and a **declaration block**.

```css
selector {
    property: value;
    /* ... other property-value pairs ... */
}
```

- **Selector**: Indicates which HTML elements the styles should be applied to.
- **Declaration Block**: Contains one or more declarations (property-value pairs) wrapped in curly braces `{ }`. 
- **Property**: The style property you want to set (e.g., `color`, `font-size`).
- **Value**: The value for the property you want to set.

### Example:

Suppose you have the following HTML:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to CSS</title>
    <style>
        /* CSS goes here */
        p {
            color: red;
            font-size: 20px;
        }

        .highlight {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <p>This is a red paragraph.</p>
    <p class="highlight">This paragraph has a yellow background.</p>
</body>
</html>
```

In this example:

- The `p` selector targets all `<p>` elements, making their text color red and font size 20 pixels.
- The `.highlight` selector targets all elements with the class "highlight" and gives them a yellow background.

-------------

## CSS Selectors



### 1. **Tag Selector**:
Targets all elements of a specified type.

**HTML**:
```html
<h1>Welcome to My Website</h1>
<p>This is a sample paragraph.</p>
```

**CSS**:
```css
h1 {
    font-family: Arial, sans-serif;
    color: navy;
}

p {
    font-size: 16px;
    line-height: 1.5;
}
```

### 2. **Class Selector**:
Targets all elements with a specified class attribute. Prefixed with a dot (`.`).

**HTML**:
```html
<p class="important-text">This is important.</p>
<p>This is normal text.</p>
```

**CSS**:
```css
.important-text {
    font-weight: bold;
    color: red;
}
```

### 3. **ID Selector**:
Targets a specific element with a specified `id` attribute. Prefixed with a hash (`#`). Remember, IDs should be unique within a page.

**HTML**:
```html
<p id="special-note">Note: This is a special note.</p>
```

**CSS**:
```css
#special-note {
    border: 1px solid black;
    padding: 10px;
    background-color: #f9f9f9;
}
```

### 4. **Attribute Selector**:
Targets elements based on their attributes and values.

**HTML**:
```html
<input type="text" placeholder="Username">
<input type="password">
```

**CSS**:
```css
input[type="text"] {
    border: 2px solid blue;
}

input[type="password"] {
    border: 2px solid red;
}
```

### 5. **Grouping Selectors**:
Apply the same styles to multiple selectors.

**HTML**:
```html
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
```

**CSS**:
```css
h1, h2, h3 {
    font-family: "Times New Roman", Times, serif;
}
```

### 6. **Pseudo-class Selector**:
Targets elements based on their state or position.

**HTML**:
```html
<a href="#">Hover over me!</a>
```

**CSS**:
```css
a:hover {
    text-decoration: underline;
    color: green;
}
```

### 7. **Child and Descendant Selectors**:

**HTML**:
```html
<ul>
    <li>Item 1</li>
    <li>Item 2
        <ul>
            <li>Sub-item 1</li>
            <li>Sub-item 2</li>
        </ul>
    </li>
</ul>
```

**CSS**:
```css
/* Direct child selector: Targets only the direct children of the element */
ul > li {
    font-weight: bold;
}

/* Descendant selector: Targets all descendant elements of the specified element */
ul li {
    list-style-type: square;
}
```

## Pseudo-Elements in CSS

Pseudo-elements are used in CSS to style specific parts of an element, rather than the element as a whole. They are prefixed with two colons (`::`). 

Here are some of the most commonly used pseudo-elements:

### 1. `::before` and `::after`

These pseudo-elements can inject content before or after the content of an element. They are often used for decorative purposes.

**HTML**:
```html
<div class="box"></div>
```

**CSS**:
```css
.box {
    position: relative;
    width: 100px;
    height: 100px;
    background-color: lightblue;
}

.box::before {
    content: "Before";
    position: absolute;
    top: -20px;
    left: 0;
    background-color: lightcoral;
}

.box::after {
    content: "After";
    position: absolute;
    bottom: -20px;
    right: 0;
    background-color: lightgreen;
}
```

### 2. `::first-line`

This pseudo-element targets the first line of a block-level element. The exact definition of "first line" can vary based on factors like container width, font size, and line height.

**HTML**:
```html
<p class="intro">This is a longer paragraph to demonstrate the first-line pseudo-element. Resize your browser window to see how the first line adjusts.</p>
```

**CSS**:
```css
.intro::first-line {
    font-weight: bold;
    color: blue;
}
```

### 3. `::first-letter`

Targets the first letter of a block-level element.

**HTML**:
```html
<p class="highlight-letter">Once upon a time in a faraway land...</p>
```

**CSS**:
```css
.highlight-letter::first-letter {
    font-size: 2em;
    font-weight: bold;
    color: red;
}
```

### 4. `::selection`

This pseudo-element targets the portion of an element that's been selected by the user.

**CSS**:
```css
::selection {
    background-color: lightblue;
    color: black;
}
```

Now, when a user selects text on the web page, it will be highlighted with a light blue background and black text.

### 5. `::placeholder`

Targets the placeholder text in input and textarea elements.

**HTML**:
```html
<input type="text" placeholder="Enter your name">
```

**CSS**:
```css
::placeholder {
    color: gray;
    font-style: italic;
}
```

Pseudo-elements can be combined with other selectors to achieve more specific styling. It's important to note that not all properties work with every pseudo-element, and browser compatibility should be considered when using them.



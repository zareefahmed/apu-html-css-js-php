### History of CSS

CSS, which stands for Cascading Style Sheets, was first proposed by Håkon Wium Lie in 1994. The first official specification was published by the World Wide Web Consortium (W3C) in 1996. CSS1 was the first version, and it allowed web developers to separate the presentation of a webpage from its content.

CSS2 followed in 1998, introducing a plethora of new features, including absolute, relative, and fixed positioning of elements and the concept of z-index. However, as the web evolved, so did the need for more advanced styling capabilities.

Enter CSS3. Unlike its predecessors, CSS3 was divided into separate modules, each focusing on a specific aspect of styling. This modular approach allowed for faster development and adoption of new features.

### Main Features of CSS3

1. **Selectors**: CSS3 introduced a range of new selectors, making it easier to target specific elements. Examples include:
   - `:nth-child()`
   - `:nth-last-child()`
   - `:first-of-type`
   - `:last-of-type`
   - `:not()`

2. **Box Model**: The `box-sizing` property was introduced, allowing developers to include padding and border in an element's total width and height.

3. **Text Effects and Typography**:
   - `text-shadow`: Adds shadow to text.
   - `word-wrap`: Breaks long words to prevent overflow.
   - Web Fonts: Using `@font-face`, custom fonts can be loaded on web pages.

4. **Multi-column Layout**: CSS3 introduced properties like `column-count`, `column-gap`, and `column-rule` to create multi-column layouts.

5. **Backgrounds and Borders**:
   - Multiple Backgrounds: Apply multiple backgrounds to elements.
   - `border-radius`: Round the corners of elements.
   - `box-shadow`: Add shadow effects around an element's frame.
   - `border-image`: Use an image as a border.

6. **2D/3D Transformations**:
   - 2D Transforms: Properties like `rotate`, `scale`, `translate`, and `skew`.
   - 3D Transforms: Properties like `rotate3d`, `scale3d`, `translate3d`, and `perspective`.

7. **Transitions and Animations**:
   - Transitions: Smoothly change from one style to another.
   - Animations: Set up keyframes for complex animations.

8. **Flexbox**: A layout model that allows items in a container to be dynamically arranged based on certain parameters, regardless of their original size.

9. **Grid Layout**: Another layout model that allows for the creation of complex layouts with rows and columns.

10. **Media Queries**: Part of the responsive design approach, media queries allow styles to be applied based on the device's characteristics, such as its width, height, or orientation.

11. **Colors**: CSS3 introduced RGBA, HSLA, and gradient color values.

12. **Filters**: Apply graphical effects like blur or brightness to an element.

---------

## More details on CSS3 selectors


1. **Universal Selector (`*`)**:
   - Targets all elements on the page.
   ```css
   * {
       margin: 0;
       padding: 0;
   }
   ```

2. **Attribute Selectors**:
   - `[attribute]`: Selects elements with the specified attribute.
   - `[attribute=value]`: Selects elements with the specified attribute and value.
   - `[attribute^=value]`: Selects elements whose attribute value begins with the specified value.
   - `[attribute$=value]`: Selects elements whose attribute value ends with the specified value.
   - `[attribute*=value]`: Selects elements whose attribute value contains the specified value.
   ```css
   input[type="text"] {
       border: 1px solid gray;
   }
   ```

3. **Child and Descendant Selectors**:
   - `parent > child`: Selects all direct children of the parent.
   - `ancestor descendant`: Selects all descendants of the ancestor.
   ```css
   ul > li {
       list-style-type: square;
   }
   ```

4. **Pseudo-classes**:
   - `:hover`: Targets an element when it's being hovered over.
   - `:active`: Targets an element during the activation of the element.
   - `:focus`: Targets an element when it receives focus.
   - `:nth-child(n)`: Targets the nth child element.
   - `:nth-last-child(n)`: Targets the nth child element, counting from the last.
   - `:first-child`: Targets the first child element.
   - `:last-child`: Targets the last child element.
   - `:not(selector)`: Targets every element that is not the specified element.
   ```css
   a:hover {
       text-decoration: underline;
   }
   ```

5. **Pseudo-elements**:
   - `::before`: Inserts content before the content of the selected element.
   - `::after`: Inserts content after the content of the selected element.
   ```css
   p::before {
       content: "Note: ";
       font-weight: bold;
   }
   ```

6. **Grouping**:
   - Allows you to group multiple selectors to apply the same styles.
   ```css
   h1, h2, h3 {
       font-family: Arial, sans-serif;
   }
   ```

7. **Combinators**:
   - `A + B`: Selects element B if it's immediately preceded by element A.
   - `A ~ B`: Selects element B if it's preceded by element A.
   ```css
   p + ul {
       margin-top: 20px;
   }
   ```

8. **Structural Pseudo-classes**:
   - `:root`: Targets the highest-level parent element. In HTML, this is the `<html>` element.
   - `:empty`: Targets elements that have no children.
   - `:target`: Targets the current active #fragment of the document.
   ```css
   :root {
       --main-color: #ff4500;
   }
   ```

9. **Form Pseudo-classes**:
   - `:enabled` and `:disabled`: Target input elements that are enabled or disabled.
   - `:checked`: Targets checked elements like radio buttons or checkboxes.
   - `:valid` and `:invalid`: Target input elements based on their validation status.
   ```css
   input:disabled {
       background-color: #eee;
   }
   ```

10. **Negation Pseudo-class**:
   - `:not()`: Excludes a specific selector.
   ```css
   p:not(.special) {
       color: gray;
   }
   ```

These are just some of the many selectors introduced in CSS3. They provide a powerful toolkit for developers to target and style elements with precision, making it easier to create complex layouts and designs.



----------

## Some Examples

1. **Selectors**:
   - `:nth-child()`: Selects elements based on their position in a parent.
     ```css
     p:nth-child(2) {
       color: red;
     }
     ```
     This will color the second `<p>` element inside its parent red.

   - `:first-of-type`: Selects the first element of its type within its parent.
     ```css
     p:first-of-type {
       font-weight: bold;
     }
     ```

2. **Box Model**:
   - `box-sizing`: 
     ```css
     div {
       box-sizing: border-box;
       width: 300px;
       padding: 10px;
       border: 5px solid black;
     }
     ```
     The total width remains 300px, including padding and border.

3. **Text Effects and Typography**:
   - `text-shadow`:
     ```css
     h1 {
       text-shadow: 2px 2px 5px gray;
     }
     ```

   - `@font-face`:
     ```css
     @font-face {
       font-family: "MyCustomFont";
       src: url("path-to-font.woff");
     }
     ```

4. **Multi-column Layout**:
   ```css
   .multi-column {
     column-count: 3;
     column-gap: 20px;
     column-rule: 2px solid black;
   }
   ```

5. **Backgrounds and Borders**:
   - Multiple Backgrounds:
     ```css
     div {
       background-image: url('image1.jpg'), url('image2.png');
     }
     ```

   - `border-radius`:
     ```css
     .rounded {
       border-radius: 10px;
     }
     ```

6. **2D/3D Transformations**:
   - 2D Transforms:
     ```css
     .rotate {
       transform: rotate(45deg);
     }
     ```

   - 3D Transforms:
     ```css
     .rotate3d {
       transform: rotate3d(1, 1, 1, 45deg);
     }
     ```

7. **Transitions and Animations**:
   - Transitions:
     ```css
     .box:hover {
       background-color: red;
       transition: background-color 2s;
     }
     ```

   - Animations:
     ```css
     @keyframes slide {
       from {
         transform: translateX(0);
       }
       to {
         transform: translateX(100px);
       }
     }

     .box {
       animation: slide 2s infinite;
     }
     ```

8. **Flexbox**:
   ```css
   .flex-container {
     display: flex;
     justify-content: space-between;
   }
   ```

9. **Grid Layout**:
   ```css
   .grid-container {
     display: grid;
     grid-template-columns: 1fr 2fr;
   }
   ```

10. **Media Queries**:
   ```css
   @media (max-width: 600px) {
     body {
       background-color: lightblue;
     }
   }
   ```

11. **Colors**:
   - RGBA:
     ```css
     div {
       background-color: rgba(255, 0, 0, 0.3);  /* Red with 30% opacity */
     }
     ```

   - Gradient:
     ```css
     div {
       background-image: linear-gradient(red, yellow);
     }
     ```

12. **Filters**:
   ```css
   .blur {
     filter: blur(5px);
   }
   ```

These are basic examples to give you an idea of how each feature works. Each feature has a depth of its own, and there are many more properties and values associated with each. 



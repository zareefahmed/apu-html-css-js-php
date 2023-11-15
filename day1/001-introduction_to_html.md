### History of HTML
HTML stands for **Hypertext Markup Language**, and it is the standard language used to create and design websites. Here is a brief history of HTML:

1. **Late 1980s to Early 1990s: The Beginnings**
    - British physicist **Tim Berners-Lee**, working at CERN (The European Organization for Nuclear Research), introduced the idea of a "World Wide Web" as a way to share information among researchers across the globe.
    - In 1990, he proposed a system using hypertext, which would allow users to navigate between documents using clickable links.
    - The first HTML was born as part of this proposal, alongside the first web browser and the HTTP protocol.

2. **HTML 2.0 (1995)**
    - The first official specification for HTML was released in 1995 as RFC 1866. This version consolidated the various tags and attributes that had been introduced by different browser manufacturers.
    - It included basic elements like headers, paragraphs, lists, and links.

3. **HTML 3.2 (1997)**
    - This version added support for scripting languages like JavaScript, tables for layout (which became highly popular, albeit misused for design purposes), and more formatting options.

4. **HTML 4.0 (1997) & HTML 4.01 (1999)**
    - Introduced features to improve document structure (like the separation of content and presentation), including the introduction of stylesheets (CSS) and improved form elements.
    - Introduced the `<!DOCTYPE>` declaration to specify the version of HTML.
    - HTML 4.01 was a revision of 4.0 with some bug fixes and minor updates.

5. **XHTML 1.0 (2000)**
    - This is not exactly HTML but an XML-based version of it, known as Extensible Hypertext Markup Language. It demanded a stricter syntax and was more rigid in terms of coding practices.
    - Despite its strictness, it was widely adopted and encouraged better web coding habits.

6. **HTML5 (2014)**
    - Development began in 2004 by the Web Hypertext Application Technology Working Group (WHATWG). The World Wide Web Consortium (W3C) and WHATWG cooperated on its development.
    - HTML5 was a major upgrade, emphasizing native support for multimedia (via `<video>` and `<audio>` tags), canvas drawing, semantics (with tags like `<header>`, `<footer>`, `<article>`, and `<section>`), and more.
    - It also aimed to make the web more interoperable and reduce the need for third-party plugins like Flash.

7. **Current Status**
    - HTML5 is now the standard and is widely adopted across the web. While the WHATWG sees HTML as a living standard, evolving continuously, the W3C still maintains milestone snapshots.

Throughout its history, HTML has been influenced by the browser wars, where different browser manufacturers would introduce proprietary tags or interpret specifications differently. As the web matured, there has been a push for standardization to ensure a consistent user experience across different devices and browsers.

-----------------

### HTML Basics

HTML is made up of elements that are enclosed in angle brackets. Elements can have attributes that provide additional information about the element. Here's a basic HTML template:

```html
<!DOCTYPE html>
<html>
    <head>
    <title>My First Web Page</title>
</head>
    <body>
    <h1>Welcome to My Web Page</h1>
    <p>This is a paragraph of text.</p>
</body>
</html>
```

Let's break down this example:

- `<!DOCTYPE html>`: This declaration specifies the document type and version of HTML being used (HTML5 in this case).
- `<html>`: The `<html>` element is the root element that wraps all content on the page.
- `<head>`: The `<head>` element contains meta-information about the document, such as the page title.
- `<title>`: The `<title>` element sets the title of the web page (displayed in the browser's title bar or tab).
- `<body>`: The `<body>` element contains the visible content of the web page.
- `<h1>` and `<p>`: These are examples of heading and paragraph elements, respectively.

### HTML Elements

Here are some common HTML elements:

1. **Headings**: Use `<h1>` through `<h6>` for headings. `<h1>` is the highest level, and `<h6>` is the lowest.

   ```html
   <h1>Main Heading</h1>
   <h2>Subheading</h2>
   ```

2. **Paragraphs**: Use `<p>` for paragraphs of text.

   ```html
   <p>This is a paragraph of text.</p>
   ```

3. **Links**: Create hyperlinks using the `<a>` element. The `href` attribute specifies the URL.

   ```html
   <a href="https://www.example.com">Visit Example.com</a>
   ```

4. **Lists**: Create ordered (`<ol>`) or unordered (`<ul>`) lists with list items (`<li>`).

   ```html
   <ul>
       <li>Item 1</li>
       <li>Item 2</li>
   </ul>
   ```

5. **Images**: Display images using the `<img>` element. The `src` attribute specifies the image source.

   ```html
   <img src="image.jpg" alt="A beautiful image">
   ```

### HTML Attributes

Attributes provide additional information about HTML elements. Here are a few common attributes:

- `class` and `id`: Used to apply CSS styles or JavaScript functionality.
- `src`: Specifies the source URL for elements like images and iframes.
- `alt`: Provides alternative text for images (for accessibility).
- `href`: Specifies the URL for links.
- `style`: Allows inline CSS styling.

### HTML Forms

HTML also allows you to create interactive forms for user input. Here's a simple form example:

```html
<form action="/submit" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <input type="submit" value="Submit">
</form>
```

In this form:

- `<form>` defines the form element.
- `<label>` provides labels for form fields.
- `<input>` elements are used for text input, email input, and the submit button.
- The `required` attribute makes fields mandatory.

### HTML Comments

You can add comments to your HTML code using `<!--` and `-->`:

```html
<!-- This is a comment -->
```

Comments are not visible on the web page but are helpful for documenting your code.

### HTML Validation

It's essential to write well-formed HTML. You can validate your HTML using online tools like the W3C Markup Validation Service (https://validator.w3.org/) to ensure it follows the HTML standards.
------------------
## Most Used HTML Tags



**1. `<html>`**
   - Defines the root element of an HTML document.
   ```html
   <!DOCTYPE html>
   <html>
   ...
   </html>
   ```

**2. `<head>`**
   - Contains metadata about the HTML document.
   ```html
   <head>
       <title>Page Title</title>
       <meta charset="UTF-8">
   </head>
   ```

**3. `<title>`**
   - Sets the title of the HTML document displayed in the browser's title bar or tab.
   ```html
   <title>My Web Page</title>
   ```

**4. `<meta>`**
   - Provides metadata about the document.
   ```html
   <meta name="description" content="This is a description of the web page.">
   ```

**5. `<link>`**
   - Links external resources, like stylesheets.
   ```html
   <link rel="stylesheet" href="styles.css">
   ```

**6. `<style>`**
   - Embeds CSS styles within the HTML document.
   ```html
   <style>
       body {
           background-color: #f0f0f0;
       }
   </style>
   ```

**7. `<script>`**
   - Embeds JavaScript code or links to external scripts.
   ```html
   <script>
       function greet() {
           alert("Hello, World!");
       }
   </script>
   ```

**8. `<body>`**
   - Contains the visible content of the web page.
   ```html
   <body>
       <h1>Hello, World!</h1>
       <p>This is a paragraph.</p>
   </body>
   ```

**9. `<h1>` to `<h6>`**
   - Defines headings of different levels.
   ```html
   <h1>Main Heading</h1>
   <h2>Subheading</h2>
   ```

**10. `<p>`**
    - Defines a paragraph of text.
```html
    <p>This is a paragraph of text.</p>
```

**11. `<a>`**
    - Creates hyperlinks.
```html
    <a href="https://www.example.com">Visit Example.com</a>
```

**12. `<img>`**
    - Embeds images.
```html
    <img src="image.jpg" alt="A beautiful image">
```

**13. `<ul>`**
    - Creates an unordered list.
```html
    <ul>
        <li>Item 1</li>
        <li>Item 2</li>
    </ul>
```

**14. `<ol>`**
    - Creates an ordered list.
```html
    <ol>
        <li>First item</li>
        <li>Second item</li>
    </ol>
```

**15. `<li>`**
    - Defines a list item in `<ul>` or `<ol>`.
```html
    <ul>
        <li>Item 1</li>
        <li>Item 2</li>
    </ul>
```

**16. `<table>`**
    - Creates a table.
```html
    <table>
        <tr>
            <td>Row 1, Cell 1</td>
            <td>Row 1, Cell 2</td>
        </tr>
        <tr>
            <td>Row 2, Cell 1</td>
            <td>Row 2, Cell 2</td>
        </tr>
    </table>
```

**17. `<tr>`**
    - Defines a table row.
```html
    <tr>
        <td>Row 1, Cell 1</td>
        <td>Row 1, Cell 2</td>
    </tr>
```

**18. `<th>`**
    - Defines a table header cell.
```html
    <th>Header 1</th>
    <th>Header 2</th>
```

**19. `<td>`**
    - Defines a table data cell.
```html
    <td>Row 1, Cell 1</td>
    <td>Row 1, Cell 2</td>
```

**20. `<form>`**
    - Creates an HTML form for user input.
```html
    <form action="/submit" method="post">
        <!-- Form elements go here -->
    </form>
```

**21. `<input>`**
    - Defines an input field within a form.
```html
    <input type="text" name="username" id="username">
```

**22. `<label>`**
    - Provides a label for form elements.
```html
    <label for="username">Username:</label>
```

**23. `<textarea>`**
    - Creates a multiline text input area.
```html
    <textarea name="message" id="message" rows="4" cols="50"></textarea>
```

**24. `<button>`**
    - Creates a clickable button.
```html
    <button type="button">Click me</button>
```

**25. `<select>`**
    - Creates a dropdown list.
```html
    <select name="cars" id="cars">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
    </select>
```

**26. `<option>`**
    - Defines an option in a `<select>` element.
```html
    <option value="volvo">Volvo</option>
```

**27. `<div>`**
    - Defines a division or a section in a web page.
```html
    <div class="container">
        <!-- Content goes here -->
    </div>
```

**28. `<span>`**
    - Defines an inline section within text.
```html
    <p>This is <span style="color: red;">red</span> text.</p>
```

**29. `<br>`**
    - Inserts a line break within text.
```html
    <p>This is<br> a line break.</p>
```

**30. `<hr>`**
    - Inserts a horizontal line or thematic break.
```html
    <p>Some content above<hr>Some content below.</p>
```

**31. `<strong>`**
    - Indicates strong importance or emphasis.
```html
    <p><strong>This text is strong.</strong></p>
```

**32. `<em>`**
    - Indicates emphasized text.
```html
    <p><em>This text is emphasized.</em></p>
```

**33. `<mark>`**
    - Highlights text.
```html
    <p>Search for <mark>keywords</mark> on this page.</p>
```

**34. `<cite>`**
    - Represents the title

 of a work (e.g., a book or movie).
```html
    <p><cite>The Great Gatsby</cite> by F. Scott Fitzgerald</p>
```

**35. `<blockquote>`**
    - Defines a block of quoted text.
```html
    <blockquote>
        This is a blockquote.
    </blockquote>
```

**36. `<abbr>`**
    - Defines an abbreviation or acronym.
```html
    <p><abbr title="World Health Organization">WHO</abbr> is an international organization.</p>
```

**37. `<code>`**
    - Represents computer code.
```html
    <p>Use the <code>print()</code> function to display text.</p>
```

**38. `<pre>`**
    - Represents preformatted text (preserves whitespace).
```html
    <pre>
        This   is   preformatted
        text with      whitespace.
    </pre>
```

**39. `<iframe>`**
    - Embeds an inline frame for displaying external content.
```html
    <iframe src="https://www.youtube.com/embed/videoID"></iframe>
```

**40. `<audio>`**
    - Embeds audio content.
```html
    <audio controls>
        <source src="audio.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
```

**41. `<video>`**
    - Embeds video content.
```html
    <video controls width="320" height="240">
        <source src="video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
```

**42. `<canvas>`**
    - Provides a space for drawing graphics using JavaScript.
```html
    <canvas id="myCanvas" width="200" height="100"></canvas>
```

**43. `<svg>`**
    - Embeds scalable vector graphics.
```html
    <svg width="100" height="100">
        <circle cx="50" cy="50" r="40" stroke="black" stroke-width="2" fill="red" />
    </svg>
```

**44. `<figure>`**
    - Represents content that is referenced from the main content (e.g., images with captions).
```html
    <figure>
        <img src="image.jpg" alt="A beautiful image">
        <figcaption>Caption for the image.</figcaption>
    </figure>
```

**45. `<figcaption>`**
    - Provides a caption for a `<figure>` element.
```html
    <figure>
        <img src="image.jpg" alt="A beautiful image">
        <figcaption>Caption for the image.</figcaption>
    </figure>
```

**46. `<nav>`**
    - Defines a section containing navigation links.
```html
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
```

**47. `<header>`**
    - Represents a container for introductory content or a set of navigation links.
```html
    <header>
        <h1>Website Header</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <!-- Navigation links -->
            </ul>
        </nav>
    </header>
```

**48. `<footer>`**
    - Defines a footer for a section or the whole document.
```html
    <footer>
        &copy; 2023 My Website
    </footer>
```

**49. `<aside>`**
    - Represents content that is tangentially related to the content around it.
```html
    <article>
        <p>Article content goes here.</p>
        <aside>
            <p>Related links or information.</p>
        </aside>
    </article>
```

**50. `<main>`**
    - Defines the main content of a document.
```html
    <main>
        <h1>Main Content</h1>
        <p>This is the main content of the page.</p>
    </main>
```

**51. `<section>`**
    - Represents a thematic grouping of content.
```html
    <section>
        <h2>Section Heading</h2>
        <p>Section content goes here.</p>
    </section>
```

**52. `<article>`**
    - Represents a self-contained composition.
```html
    <article>
        <h2>Article Title</h2>
        <p>Article content goes here.</p>
    </article>
```

**53. `<time>`**
    - Represents a specific period in time.
```html
    <p>My birthday is on <time datetime="2023-10-15">October 15th</time>.</p>
```

**54. `<meter>`**
    - Represents a scalar measurement within a known range.
```html
    <p>Progress: <meter value="75" min="0" max="100">75%</meter></p>
```

**55. `<progress>`**
    - Represents the progress of a task.
```html
    <p>Downloading... <progress value="50" max="100">50%</progress></p>
```

**56. `<details>`**
    - Creates a disclosure widget that can be toggled to show/hide content.
```html
    <details>
        <summary>Click to reveal more</summary>
        <p>Hidden content goes here.</p>
    </details>
```

**57. `<summary>`**
    - Provides a summary or caption for a `<details>` element.
```html
    <details>
        <summary>Click to reveal more</summary>
        <p>Hidden content goes here.</p>
    </details>
```

**58. `<datalist>`**
    - Specifies a list of pre-defined options for an `<input>` element.
```html
    <input list="colors">
    <datalist id="colors">
        <option value="Red">
        <option value="Green">
        <option value="Blue">
    </datalist>
```

**59. `<optgroup>`**
    - Groups related `<option>` elements in a `<select>` element.
```html
    <select>
        <optgroup label="Fruits">
            <option>Apple</option>
            <option>Orange</option>
        </optgroup>
        <optgroup label="Vegetables">
            <option>Carrot</option>
            <option>Broccoli</option>
        </optgroup>
    </select>
```

**60. `<button>`**
    - Creates a clickable button.
```html
    <button type="button">Click me</button>
```

**61. `<label>`**
    - Provides a label for form elements.
```html
    <label for="username">Username:</label>


```

**62. `<fieldset>`**
    - Groups related form elements together.
```html
    <fieldset>
        <legend>Personal Information</legend>
        <!-- Form elements go here -->
    </fieldset>
```

**63. `<legend>`**
    - Provides a caption for a `<fieldset>` element.
```html
    <fieldset>
        <legend>Personal Information</legend>
        <!-- Form elements go here -->
    </fieldset>
```

**64. `<input type="text">**
    - Creates a single-line text input field.
```html
    <input type="text" name="username" id="username">
```

**65. `<input type="password">**
    - Creates a password input field (text is masked).
```html
    <input type="password" name="password" id="password">
```

**66. `<input type="email">**
    - Creates an email input field with email validation.
```html
    <input type="email" name="email" id="email">
```

**67. `<input type="checkbox">**
    - Creates a checkbox input.
```html
    <input type="checkbox" name="subscribe" id="subscribe" value="yes">
```

**68. `<input type="radio">**
    - Creates a radio button input.
```html
    <input type="radio" name="gender" id="male" value="male">
    <input type="radio" name="gender" id="female" value="female">
```

**69. `<input type="submit">**
    - Creates a submit button to submit a form.
```html
    <input type="submit" value="Submit">
```

**70. `<input type="reset">**
    - Creates a reset button to clear form data.
```html
    <input type="reset" value="Clear">
```

**71. `<input type="file">**
    - Creates a file input for uploading files.
```html
    <input type="file" name="fileUpload" id="fileUpload">
```

**72. `<input type="number">**
    - Creates a numeric input field.
```html
    <input type="number" name="quantity" id="quantity" min="1" max="10">
```

**73. `<input type="date">**
    - Creates a date input field.
```html
    <input type="date" name="birthdate" id="birthdate">
```

**74. `<input type="time">**
    - Creates a time input field.
```html
    <input type="time" name="appointmentTime" id="appointmentTime">
```

**75. `<input type="color">**
    - Creates a color picker input field.
```html
    <input type="color" name="colorChoice" id="colorChoice">
```

**76. `<input type="range">**
    - Creates a range input slider.
```html
    <input type="range" name="volume" id="volume" min="0" max="100">
```

**77. `<input type="hidden">**
    - Creates a hidden input field (not displayed to the user).
```html
    <input type="hidden" name="csrfToken" value="abc123">
```

**78. `<input type="search">**
    - Creates a search input field.
```html
    <input type="search" name="searchQuery" id="searchQuery">
```

**79. `<input type="url">**
    - Creates a URL input field with URL validation.
```html
    <input type="url" name="website" id="website">
```

**80. `<input type="tel">**
    - Creates a telephone number input field.
```html
    <input type="tel" name="phoneNumber" id="phoneNumber">
```

**81. `<input type="datetime-local">**
    - Creates a date and time input field.
```html
    <input type="datetime-local" name="eventDateTime" id="eventDateTime">
```

**82. `<input type="week">**
    - Creates a week input field.
```html
    <input type="week" name="weekNumber" id="weekNumber">
```

**83. `<input type="month">**
    - Creates a month input field.
```html
    <input type="month" name="eventMonth" id="eventMonth">
```

**84. `<input type="button">**
    - Creates a generic button (no form submission).
```html
    <input type="button" value="Click me">
```

**85. `<input type="image">**
    - Creates an image button for form submission.
```html
    <input type="image" src="submit.png" alt="Submit">
```

**86. `<input type="week">**
    - Creates a week input field.
```html
    <input type="week" name="weekNumber" id="weekNumber">
```

**87. `<input type="month">**
    - Creates a month input field.
```html
    <input type="month" name="eventMonth" id="eventMonth">
```

**88. `<input type="button">**
    - Creates a generic button (no form submission).
```html
    <input type="button" value="Click me">
```

**89. `<input type="image">**
    - Creates an image button for form submission.
```html
    <input type="image" src="submit.png" alt="Submit">
```

**90. `<input type="datetime-local">**
    - Creates a date and time input field.
```html
    <input type="datetime-local" name="eventDateTime" id="eventDateTime">
```

**91. `<input type="week">**
    - Creates a week input field.
```html
    <input type="week" name="weekNumber" id="weekNumber">
```

**92. `<input type="month">**
    - Creates a month input field.
```html
    <input type="month" name="eventMonth" id="eventMonth">
```

**93. `<input type="button">**
    - Creates a generic button (no form submission).
```html
    <input type="button" value="Click me">
```

**94. `<input type="image">**
    - Creates an image button for form submission.
```html
    <input type="image" src="submit.png" alt="Submit">
```

**95. `<input type="week">**
    - Creates a week input field.
```html
    <input type="week" name="weekNumber" id="weekNumber">
```

**96. `<input type="month">**
    - Creates a month input field.
```html
    <input type="month" name="eventMonth" id="eventMonth">
```

**97. `<textarea>`**
   

 - Creates a multiline text input area.
```html
    <textarea name="message" id="message" rows="4" cols="50"></textarea>
```

**98. `<select>`**
    - Creates a dropdown list.
```html
    <select name="cars" id="cars">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
    </select>
```

**99. `<option>`**
    - Defines an option in a `<select>` element.
```html
    <option value="volvo">Volvo</option>
```

**100. `<optgroup>`**
    - Groups related `<option>` elements in a `<select>` element.
```html
    <select>
        <optgroup label="Fruits">
            <option>Apple</option>
            <option>Orange</option>
        </optgroup>
        <optgroup label="Vegetables">
            <option>Carrot</option>
            <option>Broccoli</option>
        </optgroup>
    </select>
```

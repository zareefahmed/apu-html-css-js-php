A basic example of a web page with a header, footer, and a sidebar using HTML and CSS.

### HTML:
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Layout</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body> 

<div class="container">
    <header>
        <h1>My Sample Website</h1>
    </header>

    <main>
        <aside class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </aside>

        <section class="content">
            <h2>Welcome to My Website</h2>
            <p>This is the main content of the website. You can add articles, images, videos, etc. here.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 My Sample Website</p>
    </footer>
</div>

</body>
</html>
```

### CSS (`styles.css`):
```css
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.container {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

header {
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 1rem 0;
}

main {
    display: flex;
    flex: 1;
}

.sidebar {
    flex: 1;
    background-color: #f4f4f4;
    padding: 1rem;
}

.sidebar h2 {
    text-align: center;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
    margin-top: 0;
}

.sidebar ul {
    list-style-type: none;
    padding-left: 0;
}

.sidebar ul li {
    margin: 8px 0;
}

.sidebar ul li a {
    color: #333;
    text-decoration: none;
    display: block;
    padding: 8px;
    background-color: #ddd;
    border-radius: 4px;
}

.sidebar ul li a:hover {
    background-color: #bbb;
}

.content {
    flex: 3;
    padding: 1rem;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1rem 0;
}
```


## Explaination 

Let's break down the sample web page layout into smaller pieces, step by step.

### **HTML Explanation**:

#### 1. **Doctype and Meta Tags**:
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    ...
</head>
```
- `<!DOCTYPE html>` tells the browser to use the latest version of HTML.
- `<html lang="en">` sets the language of the content to English.
- The `meta` tags inside the `<head>`:
  - `charset` specifies the character encoding.
  - `viewport` helps make your site responsive. It sets the width of the page to follow the screen-width of the device and sets the initial zoom level.

#### 2. **Header**:
```html
<header>
    <h1>My Sample Website</h1>
</header>
```
This creates a section at the top of your page for a site title or logo.

#### 3. **Main Content with Sidebar**:
```html
<main>
    <aside class="sidebar">...</aside>
    <section class="content">...</section>
</main>
```
- `<main>` contains the primary content of your document.
- `<aside>` is used for content that's related but tangential—like a sidebar with links or ads.
- `<section>` can hold your primary page content.

#### 4. **Footer**:
```html
<footer>
    <p>&copy; 2023 My Sample Website</p>
</footer>
```
This is the section at the bottom, typically containing copyright info, links, or contact info.

---

### **CSS Explanation**:

#### 1. **Base Styles**:
```css
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
```
- We're removing the default `margin` and `padding` that browsers apply. This helps maintain consistency across browsers.
- Setting a default `font-family`.

#### 2. **Container**:
```css
.container {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
```
- `display: flex` turns on flexbox, a powerful layout tool.
- `flex-direction: column` makes the items (header, main, footer) stack vertically.
- `min-height: 100vh` ensures the container takes up at least the full height of the viewport (vh stands for viewport height).

#### 3. **Header and Footer Styles**:
```css
header { ... }
footer { ... }
```
These sections define background colors, text colors, and other styling for the header and footer.

#### 4. **Main Content with Sidebar**:
```css
main { ... }
.sidebar { ... }
.content { ... }
```
- Within `<main>`, we again use `display: flex` but leave out `flex-direction` because we want a default row direction.
- `.sidebar` and `.content` have `flex` values that determine their relative widths. In our case, `.sidebar` takes up 1 part, and `.content` takes up 3 parts of the available width.

---

Imagine your webpage as a vertical stack of blocks. The **header** is the top block, the **footer** is the bottom block, and in the middle, side-by-side, you have the **sidebar** and **content**.

Flexbox allows you to create such layouts with minimal effort. By changing the flex values, you can easily adjust the sizes of these blocks without floating, positioning, or any complicated methods that were common before flexbox.

As you familiarize yourself with these concepts, experimenting with different properties and values will help solidify your understanding. Remember, building web layouts is a lot like building with blocks, and CSS gives you the tools to place and style those blocks!


HTML5, which was finalized and published in October 2014 by the World Wide Web Consortium (W3C), introduced a number of new elements and attributes that reflect the typical usage patterns on modern websites and web applications. These new features provided cleaner markup, better semantics, and allowed for the creation of more interactive and media-rich websites.

1. **`<article>`** - Represents a self-contained composition in a document, such as a blog post or a news story.
   ```html
   <article>
     <h2>Blog Title</h2>
     <p>Blog content...</p>
   </article>
   ```
 
2. **`<aside>`** - Represents a portion of a document whose content is only indirectly related to the main content.
   ```html
   <aside>
     <h3>Related Links</h3>
     <ul>
       <li><a href="#">Link 1</a></li>
       <li><a href="#">Link 2</a></li>
     </ul>
   </aside>
   ```

3. **`<details>` and `<summary>`** - Represents a disclosure widget from which the user can obtain additional information or controls.
   ```html
   <details>
     <summary>Click to see the details</summary>
     <p>Here are the details...</p>
   </details>
   ```

4. **`<figcaption>` and `<figure>`** - Represents any content that is referenced from the main content and that can be moved away from that content without affecting its flow.
   ```html
   <figure>
     <img src="image.jpg" alt="Sample Image">
     <figcaption>Caption for the image.</figcaption>
   </figure>
   ```

5. **`<footer>`** - Represents the footer of a section or page.
   ```html
   <footer>
     <p>&copy; 2023 My Company</p>
   </footer>
   ```

6. **`<header>`** - Represents a container for introductory content or a set of navigational links.
   ```html
   <header>
     <h1>Site Title</h1>
     <nav>
       <a href="#">Home</a> | <a href="#">About</a>
     </nav>
   </header>
   ```

7. **`<nav>`** - Represents a section of navigation links.
   ```html
   <nav>
     <ul>
       <li><a href="#">Home</a></li>
       <li><a href="#">About</a></li>
     </ul>
   </nav>
   ```

8. **`<section>`** - Represents a standalone section of content.
   ```html
   <section>
     <h2>Section Title</h2>
     <p>Content of the section...</p>
   </section>
   ```

9. **`<time>`** - Represents a specific period in time or a duration.
   ```html
   <time datetime="2023-10-16">October 16, 2023</time>
   ```

10. **`<audio>` and `<video>`** - Used to embed sound and video content.
   ```html
   <audio controls>
     <source src="audio.mp3" type="audio/mpeg">
   </audio>

   <video controls>
     <source src="video.mp4" type="video/mp4">
   </video>
   ```

11. **`<canvas>`** - Used to draw graphics on the fly via JavaScript.
   ```html
   <canvas id="myCanvas" width="200" height="100"></canvas>
   ```

12. **`<datalist>`** - Provides a list of predefined options for input controls.
   ```html
   <input list="browsers">
   <datalist id="browsers">
     <option value="Chrome">
     <option value="Firefox">
   </datalist>
   ```

13. **`<output>`** - Represents the result of a calculation.
   ```html
   <form oninput="result.value=parseInt(a.value)+parseInt(b.value)">
     <input type="range" id="a" value="50">
     + 
     <input type="number" id="b" value="25">
     = 
     <output name="result">75</output>
   </form>
   ```

14. **`<progress>`** - Represents the progress of a task.
   ```html
   <progress value="70" max="100"></progress>
   ```

15. **`<meter>`** - Represents a scalar measurement or a fractional value.
   ```html
   <meter value="2" min="0" max="10">2 out of 10</meter>
   ```

16. **`<mark>`** - Used to highlight parts of text.
   ```html
   <p>Do not forget to <mark>buy milk</mark> today.</p>
   ```

This is not an exhaustive list, but it provides an overview of many of the key elements introduced in HTML5.

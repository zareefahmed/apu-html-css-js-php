A simple image slider using HTML and CSS:

### HTML:
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="slider">
        <div class="slide current">
            <img src="sample1.jpg" alt="Sample Image 1">
        </div>
        <div class="slide">
            <img src="sample2.jpg" alt="Sample Image 2">
        </div>
        <div class="slide">
            <img src="sample3.jpg" alt="Sample Image 3">
        </div>
        <!-- Add more slides as needed -->
    </div>
    <div class="buttons">
        <button id="prev">Previous</button>
        <button id="next">Next</button>
    </div>
    <script src="script.js"></script>
</body>
</html>
```

### CSS (`styles.css`):
```css
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}

.slider {
    display: flex;
    width: 500px;
    overflow: hidden;
}

.slide {
    min-width: 100%;
    transition: all 0.5s;
    opacity: 0;
    position: absolute;
}

.slide.current {
    opacity: 1;
    position: relative;
}

.buttons {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

button {
    padding: 10px 20px;
    margin: 0 10px;
    cursor: pointer;
}
```

### JavaScript (`script.js`):
```javascript
const slides = document.querySelectorAll('.slide');
const nextBtn = document.getElementById('next');
const prevBtn = document.getElementById('prev');

let currentSlide = 0;

nextBtn.addEventListener('click', () => {
    slides[currentSlide].classList.remove('current');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add('current');
});

prevBtn.addEventListener('click', () => {
    slides[currentSlide].classList.remove('current');
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[currentSlide].classList.add('current');
});
```

For this code to work, you'll need to have three sample images named `sample1.jpg`, `sample2.jpg`, and `sample3.jpg` in the same directory as your HTML file. You can replace these with any images of your choice.

Would you like me to fetch some sample images for you?
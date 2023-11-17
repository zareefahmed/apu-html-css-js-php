Image manipulation using HTML5 and CSS3 can be achieved in various ways. Here's a simple example of how you can manipulate an image using CSS3 properties:

### 1. HTML Structure:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Manipulation with CSS3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="image-container">
        <img src="path_to_your_image.jpg" alt="Sample Image" class="manipulated-image">
    </div>
</body>
</html>
```

### 2. CSS Styles (styles.css):

```css
.image-container {
    width: 300px;
    height: 300px;
    overflow: hidden;
    position: relative;
    border: 5px solid #333;
}

.manipulated-image {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease, filter 0.3s ease;

    /* Grayscale Filter */
    filter: grayscale(50%);

    /* Rotate the image */
    transform: rotate(10deg);
}

.image-container:hover .manipulated-image {
    /* Remove Grayscale Filter on hover */
    filter: grayscale(0%);

    /* Scale and Rotate the image on hover */
    transform: scale(1.1) rotate(0deg);
}
```

In this example:

- The image is wrapped inside a container with a fixed width and height.
- The image is given a grayscale filter and a slight rotation using the `filter` and `transform` properties respectively.
- On hovering over the image container, the grayscale filter is removed, and the image is scaled up slightly and rotated back to its original position.

You can further manipulate the image using various other CSS3 properties like `blur`, `brightness`, `contrast`, `hue-rotate`, etc. under the `filter` property. Similarly, you can use other transform functions like `translate`, `skew`, etc. under the `transform` property.

Remember to replace `path_to_your_image.jpg` with the actual path to your image.


## Crop Image (Effect on screen, not actual crop)

You can "crop" an image using HTML5 and CSS3 by utilizing the `overflow` property in combination with a container element. This method doesn't actually crop the image file itself but visually hides parts of the image from view, giving the appearance of a cropped image.

Here's a step-by-step guide on how to achieve this:

### 1. HTML Structure:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Image with CSS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="crop-container">
        <img src="path_to_your_image.jpg" alt="Sample Image">
    </div>
</body>
</html>
```

### 2. CSS Styles (styles.css):

```css
.crop-container {
    width: 200px;  /* Desired width of the cropped area */
    height: 200px; /* Desired height of the cropped area */
    overflow: hidden; /* Hide the parts of the image outside the container */
    position: relative;
}

.crop-container img {
    /* Adjust these values to position the part of the image you want to show inside the container */
    position: absolute;
    top: -50px;  /* Move the image up by 50px to show a lower part */
    left: -50px; /* Move the image to the left by 50px to show a right part */
}
```

In this example:

- The image is wrapped inside a container with a fixed width and height, which will define the visible (or "cropped") area of the image.
- The `overflow: hidden;` property on the container ensures that any part of the image that extends beyond the boundaries of the container is hidden from view.
- The `position: absolute;` property on the image, combined with the `top` and `left` properties, allows you to adjust which part of the image is visible inside the container.

By adjusting the `top` and `left` values, you can control which portion of the image is visible, effectively "cropping" it to your desired area. Remember to replace `path_to_your_image.jpg` with the actual path to your image.

## Complete Example in one file


```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Image with CSS</title>
    <style>
        .crop-container {
            width: 200px;  /* Desired width of the cropped area */
            height: 200px; /* Desired height of the cropped area */
            overflow: hidden; /* Hide the parts of the image outside the container */
            position: relative;
        }

        .crop-container img {
            /* Adjust these values to position the part of the image you want to show inside the container */
            position: absolute;
            top: -50px;  /* Move the image up by 50px to show a lower part */
            left: -50px; /* Move the image to the left by 50px to show a right part */
        }
    </style>
</head>
<body>
    <div class="crop-container">
        <img src="path_to_your_image.jpg" alt="Sample Image">
    </div>
</body>
</html>
```

Replace `path_to_your_image.jpg` with the actual path to your image. This code will visually "crop" the image by showing only a specific portion of it within the `.crop-container` div. Adjust the `top` and `left` values as needed to control which part of the image is visible.


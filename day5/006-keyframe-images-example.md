### Example: Image Fade and Scale Animation

Let's create an animation where an image will fade in while scaling up from a smaller size:

1. **Define the Keyframes**:
   We'll define two keyframes: the start (0%) and the end (100%). At the start, the image will be semi-transparent (`opacity: 0.5`) and scaled down (`transform: scale(0.8)`). By the end, it will be fully opaque (`opacity: 1`) and at its original size (`transform: scale(1)`).

```css
@keyframes fadeInScaleUp {
  0% {
    opacity: 0.5;
    transform: scale(0.8);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
```

2. **Apply the Animation to the Image**:
   We'll target an image with the class `.animated-image` and apply our animation:

```css
.animated-image {
  /* Ensure the image doesn't just pop in before the animation starts */
  opacity: 0.5;
  transform: scale(0.8);

  /* Animation properties */
  animation-name: fadeInScaleUp;
  animation-duration: 2s;
  animation-timing-function: ease-out;
  animation-fill-mode: forwards;
}
```

3. **HTML**:
   Now, you just need to apply the `.animated-image` class to any image you want to animate:

```html
<img src="path-to-your-image.jpg" alt="Description" class="animated-image">
```

When this image is loaded on a webpage, it will play the `fadeInScaleUp` animation, causing it to fade in and scale up over 2 seconds. The `animation-fill-mode: forwards` ensures that, after the animation completes, the image remains at the final keyframe's styles (fully opaque and at its original size).

### Notes:

- You can apply any kind of keyframe animation to images, not just the fade and scale example provided.
- Ensure that animations enhance the user experience and don't distract or detract from the content.
- Always test animations across different browsers and devices to ensure consistent behavior.


---------
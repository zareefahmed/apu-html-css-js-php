CSS transitions allow you to change property values smoothly, over a given duration. They provide a way to control animation speed when changing CSS properties. Instead of having property changes take effect immediately, you can cause the changes in a property to take place over a period of time.

For example, if you change the color of an element from white to black, normally this change would be instantaneous. With CSS transitions enabled, the change can occur over a duration you specify, creating a smooth transition between the two colors.

Here's a basic overview of how CSS transitions work:

1. **Properties You Can Transition**: Not all CSS properties can be transitioned, but a good number of them can, including `width`, `height`, `margin`, `padding`, `opacity`, `color`, `background-color`, and many more.

2. **Specify the Duration**: The duration of the transition can be specified using the `transition-duration` property. The value can be in seconds (`s`) or milliseconds (`ms`).

3. **Timing Function**: The `transition-timing-function` property allows you to define the speed curve of the transition. Some common values include `linear`, `ease`, `ease-in`, `ease-out`, and `ease-in-out`.

4. **Delay**: If you want the transition to start after a certain period, you can use the `transition-delay` property.

5. **Shorthand**: The `transition` property is a shorthand property for all the individual transition-related properties. For example: `transition: width 2s ease-in-out;`.

Here's a simple example:

```css
/* Without transition */
.box {
  width: 100px;
  height: 100px;
  background-color: red;
}

/* With transition */
.box:hover {
  width: 200px;
  background-color: blue;
  transition: width 2s, background-color 2s;
}
```

In the above example, when you hover over the `.box` element, its width and background color will change over a period of 2 seconds.

**Benefits**:
- Enhances user experience by providing visual feedback.
- Can be used to draw attention to certain elements or changes on a page.
- Makes changes appear more natural and less abrupt.

**Limitations**:
- Overusing transitions can make a website feel slow or cumbersome.
- Not all CSS properties can be transitioned.
- Older browsers might not support CSS transitions, so it's always a good idea to test in multiple browsers.

---------------
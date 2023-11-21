Transformation in the context of HTML and CSS refers to the process of changing the appearance and position of an element. This can be done using the `transform` property in CSS. The `transform` property allows you to rotate, scale, move, or skew elements. Here are some examples of transformations:

1. **Translate (Move)**
   - Moves an element from its current position in the direction and distance specified.
   ```css
   .translate-example {
       transform: translate(50px, 100px);
   }
   ```

2. **Scale**
   - Resizes an element. The value greater than 1 enlarges the element, and a value less than 1 shrinks it.
   ```css
   .scale-example {
       transform: scale(1.5); /* Enlarges the element by 1.5 times */
   }
   ```

3. **Rotate**
   - Rotates an element around a given point, defined by the `transform-origin` property.
   ```css
   .rotate-example {
       transform: rotate(45deg); /* Rotates the element 45 degrees */
   }
   ```

4. **Skew**
   - Skews an element along the X and Y axis.
   ```css
   .skew-example {
       transform: skew(20deg, 10deg);
   }
   ```

5. **Matrix**
   - A combination of translate, scale, rotate, and skew transformations using a matrix notation.
   ```css
   .matrix-example {
       transform: matrix(1, 0.5, 0, 1, 0, 0);
   }
   ```

6. **3D Transformations**
   - With the advent of CSS3, we can also apply 3D transformations to elements.
     - **Rotate in 3D space**: `rotateX()`, `rotateY()`, and `rotateZ()`.
     - **3D Translation**: `translate3d()`, `translateZ()`.
     - **3D Scaling**: `scale3d()`, `scaleZ()`.

   ```css
   .rotate3d-example {
       transform: rotateX(45deg) rotateY(45deg);
   }
   ```

7. **Transform Origin**
   - The `transform-origin` property allows you to specify the pivot point for the transformations.
   ```css
   .transform-origin-example {
       transform: rotate(90deg);
       transform-origin: top left; /* The rotation will pivot around the top-left corner */
   }
   ```

8. **Multiple Transformations**
   - You can apply multiple transformations to an element by chaining them together.
   ```css
   .multiple-transforms {
       transform: translate(50px, 50px) rotate(45deg) scale(1.5);
   }
   ```

These transformations can be combined and used creatively to achieve various effects, animations, and interactions on web pages. Additionally, transitions and animations can be applied to these transformations to create smooth and dynamic visual effects.
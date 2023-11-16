HTML5 introduced several built-in attributes for form validation that can significantly reduce the amount of JavaScript needed for common validation tasks. Here's how you can perform the above validation using HTML5:

**1. Checking for Blank Fields:**
Use the `required` attribute.

```html
<input type="text" id="name" name="name" required>
```

**2. Checking Minimum or Maximum Length:**
Use the `minlength` and `maxlength` attributes for text inputs.

```html
<input type="password" id="password" name="password" minlength="6" maxlength="12" required>
```


Here's the complete form with HTML5 validation:

```html
<form id="myForm">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" minlength="6" maxlength="12" required><br><br>

    <label for="confirmPassword">Confirm Password:</label>
    <input type="password" id="confirmPassword" name="confirmPassword" pattern="" title="Passwords must match." required><br><br>

    <input type="submit" value="Submit">
</form>

<script>
document.getElementById('password').addEventListener('input', function() {
    document.getElementById('confirmPassword').pattern = this.value;
});
</script>
```

This reduces the need for custom validation, making the process more straightforward and easier to manage. However, it's important to remember that, like with JavaScript-only validation, relying solely on client-side validation isn't enough. Always ensure server-side validation is in place, as client-side methods can be bypassed by users.
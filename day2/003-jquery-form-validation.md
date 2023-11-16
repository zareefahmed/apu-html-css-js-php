jQuery simplifies a lot of the tasks involved in DOM manipulation and event handling, making the code a bit more concise.

1. First, ensure you have jQuery included in your project. You can add it using the following script tag in the `<head>` section of your HTML:

```html
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
```

2. Here's the HTML form, which remains the same:

```html
<form id="myForm">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>

    <label for="confirmPassword">Confirm Password:</label>
    <input type="password" id="confirmPassword" name="confirmPassword"><br><br>

    <input type="submit" value="Submit">
</form>
```

3. Now, let's rewrite the validation functions using jQuery:

```javascript
$(document).ready(function() {
    
    function isBlank($inputField) {
        return !$inputField.val() || $inputField.val().trim() === '';
    }

    function hasValidLength($inputField, minLength, maxLength) {
        var length = $inputField.val().length;
        return length >= minLength && length <= maxLength;
    }

    function passwordsMatch($passwordField, $confirmPasswordField) {
        return $passwordField.val() === $confirmPasswordField.val();
    }

    function validateForm() {
        var $nameField = $('#name');
        var $passwordField = $('#password');
        var $confirmPasswordField = $('#confirmPassword');
        
        if (isBlank($nameField)) {
            alert('Name cannot be blank.');
            return false;
        }
        
        if (!hasValidLength($passwordField, 6, 12)) {
            alert('Password must be between 6 and 12 characters.');
            return false;
        }

        if (!passwordsMatch($passwordField, $confirmPasswordField)) {
            alert('Passwords do not match.');
            return false;
        }

        // If all checks pass:
        return true;
    }

    // Attaching validation to form submission:
    $('#myForm').on('submit', function() {
        return validateForm();
    });
});
```

Using jQuery makes the code more streamlined, especially when selecting elements or attaching event listeners. The `$` prefix for variable names is a convention indicating that the variable contains a jQuery object.
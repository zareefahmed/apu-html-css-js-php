## PHP Functions

### What are PHP Functions?

In PHP, a function is a block of reusable code that performs a specific task. Functions are the building blocks of PHP applications, allowing developers to avoid repetitive code, organize their code more efficiently, and make it more readable.

### Purpose of PHP Functions

1. **Code Reusability**: Instead of writing the same code again and again, you can write a function once and call it wherever needed.
2. **Modularity**: Functions allow you to break down complex tasks into smaller, more manageable pieces.
3. **Maintainability**: If a change is required, you only need to update a function in one place rather than multiple places where the code might be repeated.
4. **Abstraction**: You can hide the complex implementation details and show only the essentials.

### Defining PHP Functions

A PHP function is defined using the `function` keyword, followed by a name for the function and a set of parentheses. The code to be executed by the function is placed within curly braces `{ }`.

**Syntax:**

```php
function functionName() {
    // Code to be executed
}
```

**Example:**

```php
function greet() {
    echo "Hello, World!";
}
```

### Using PHP Functions

Once a function is defined, it can be called (or invoked) by its name followed by parentheses.

**Example:**

```php
greet();  // Outputs: Hello, World!
```

Functions can also accept parameters and return values:

```php
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 3);  // $result will be 8
```

### PHP Inbuilt Functions

PHP comes with a rich library of built-in functions that perform a variety of tasks. Here are some notable ones:

1. **String Functions**:
   - `strlen($string)`: Returns the length of the string.
   - `str_replace($search, $replace, $string)`: Replaces some characters in a string.
   - `strtolower($string)`: Converts a string to lowercase.

2. **Array Functions**:
   - `count($array)`: Counts the number of elements in an array.
   - `array_merge($array1, $array2)`: Merges two or more arrays.
   - `in_array($value, $array)`: Checks if a value exists in an array.

3. **Math Functions**:
   - `rand()`: Generates a random number.
   - `max($value1, $value2)`: Returns the highest value.
   - `round($number)`: Rounds a number to the nearest integer.

4. **Date and Time Functions**:
   - `date($format)`: Formats a local date and time.
   - `time()`: Returns the current time as a Unix timestamp.
   - `strtotime($string)`: Parses a textual datetime into a Unix timestamp.

5. **Filesystem Functions**:
   - `fopen($filename, $mode)`: Opens a file.
   - `fwrite($file, $data)`: Writes to an open file.
   - `fclose($file)`: Closes an open file.

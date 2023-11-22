## PHP Basics Tutorial

### 1. Introduction to PHP

PHP (Hypertext Preprocessor) is a server-side scripting language designed for web development. It allows developers to create dynamic content that interacts with databases.

### 2. Setting Up PHP

Before you start with PHP, you need to have a web server (like Apache) and PHP installed. You can use software like XAMPP or WAMP for a combined Apache, MySQL, and PHP setup.

### 3. Your First PHP Script

Create a file named `index.php` and add the following code:

```php
<?php
echo "Hello, World!";
?>
```

When you access this file through a web server, it will display "Hello, World!".

### 4. PHP Syntax

- PHP scripts start with `<?php` and end with `?>`.
- PHP statements end with a semicolon (`;`).

### 5. Variables

Variables in PHP start with a `$` sign followed by the variable name.

```php
$name = "John";
$age = 25;
```

### 6. Data Types

PHP supports several data types:

- **Strings**: Sequences of characters, e.g., "Hello, World!"
- **Integers**: Whole numbers, e.g., 1, 100, -33
- **Floats**: Numbers with a decimal point, e.g., 3.14
- **Booleans**: True or false values
- **Arrays**: Holds multiple values
- **Objects**: Instances of classes

### 7. Conditional Statements

PHP supports `if`, `else`, and `elseif` statements.

```php
$age = 20;

if ($age < 18) {
    echo "You are too young.";
} elseif ($age > 30) {
    echo "You are mature.";
} else {
    echo "You are in your prime.";
}
```

### 8. Loops

PHP supports `for`, `while`, and `foreach` loops.

```php
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

$names = array("John", "Jane", "Doe");
foreach ($names as $name) {
    echo $name;
}
```

### 9. Functions

Functions are blocks of code that can be reused.

```php
function greet($name) {
    echo "Hello, " . $name;
}

greet("John");
```

### 10. Arrays

Arrays can hold multiple values.

```php
$colors = array("red", "green", "blue");
echo $colors[1]; // Outputs "green"
```

### 11. Forms and PHP

You can use PHP to process form data.

```php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "Hello, " . $name;
}
```

### 12. Connecting to Databases

PHP can connect to databases (like MySQL) to store and retrieve data.

```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
```

--------------------------


### 1. Including Files: `include` and `require`

In PHP, you can include the content of one file into another using `include` or `require`.

- **include**: Includes and evaluates a specified file. If the file is not found, it will throw a warning and continue executing the script.
- **require**: Similar to `include`, but if the file is not found, it will produce a fatal error and halt the script.

**Example**:

Suppose you have a file named `header.php`:

```php
// header.php
echo "This is the header.<br>";
```

You can include it in another file:

```php
// index.php
include 'header.php';
echo "This is the main content.";
```

### 2. File Operations

#### a. Reading from a File

You can use the `fopen()` function to open a file and the `fread()` function to read its content.

**Example**:

```php
$file = fopen("sample.txt", "r");
$content = fread($file, filesize("sample.txt"));
fclose($file);
echo $content;
```

#### b. Writing to a File

You can use the `fwrite()` function to write data to a file.

**Example**:

```php
$file = fopen("sample.txt", "w");
fwrite($file, "Hello, World!");
fclose($file);
```

### 3. Standard I/O: `STDIN`, `STDOUT`, `STDERR`

In PHP CLI (Command Line Interface), you have access to standard input (`STDIN`), standard output (`STDOUT`), and standard error (`STDERR`).

#### a. Reading from `STDIN`

You can read input from the user using `fgets(STDIN)`.

**Example**:

```php
echo "Enter your name: ";
$name = fgets(STDIN);
echo "Hello, " . $name;
```

When you run this script in the terminal, it will wait for you to input your name.

#### b. Writing to `STDOUT`

By default, any `echo` or `print` statement writes to `STDOUT`.

**Example**:

```php
echo "This is written to STDOUT.";
```

#### c. Writing to `STDERR`

You can write error messages to `STDERR` using `fwrite()`.

**Example**:

```php
fwrite(STDERR, "An error occurred.");
```

When you run this script in the terminal, the error message will be displayed, and since it's written to `STDERR`, you can redirect it separately from standard output.


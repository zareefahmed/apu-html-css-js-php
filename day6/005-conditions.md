


## Conditional Statements

### 1. `if` Statement

The `if` statement is used to execute a block of code if a specified condition is true.

**Example:**

```php
$age = 20;

if ($age >= 18) {
    echo "You are an adult.";
}
```

### 2. `if-else` Statement

The `if-else` statement is used to execute one block of code if the condition is true, and another block of code if the condition is false.

**Example:**

```php
$age = 15;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
```

### 3. `if-elseif-else` Statement

The `if-elseif-else` statement is used to specify multiple conditions to be checked in order.

**Example:**

```php
$score = 85;

if ($score >= 90) {
    echo "Grade A";
} elseif ($score >= 80) {
    echo "Grade B";
} else {
    echo "Grade C";
}
```

### 4. `switch` Statement

The `switch` statement is used to perform different actions based on different conditions. It's an alternative to multiple `if-elseif` statements.

**Example:**

```php
$day = "Tuesday";

switch ($day) {
    case "Monday":
        echo "Start of the work week.";
        break;
    case "Tuesday":
        echo "It's Tuesday!";
        break;
    case "Wednesday":
        echo "Midweek.";
        break;
    default:
        echo "It's another day.";
}
```

## Comparison Operators

Here's a table of comparison operators in PHP:

| Operator | Description                        | Example       | Result  |
|----------|------------------------------------|---------------|---------|
| `==`     | Equal to                           | `5 == "5"`    | `true`  |
| `===`    | Identical (equal and same type)    | `5 === "5"`   | `false` |
| `!=`     | Not equal to                       | `5 != 6`      | `true`  |
| `<>`     | Not equal to                       | `5 <> 6`      | `true`  |
| `!==`    | Not identical                       | `5 !== "5"`   | `true`  |
| `>`      | Greater than                        | `7 > 5`       | `true`  |
| `<`      | Less than                           | `5 < 7`       | `true`  |
| `>=`     | Greater than or equal to            | `7 >= 5`      | `true`  |
| `<=`     | Less than or equal to               | `5 <= 7`      | `true`  |

Remember, when using conditional statements and comparison operators, it's essential to understand the logic behind your conditions to ensure your code behaves as expected. Always test your conditions with various inputs to ensure they work correctly.


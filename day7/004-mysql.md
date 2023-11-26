
### 1. Setting up the Database

Before you can interact with the database using PHP, you need to have a MySQL database set up. For this tutorial, let's assume you have a database named `mydatabase`.

#### Create the `users` table:

Here's the SQL statement to create a `users` table:

```sql
CREATE TABLE users (
    userid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

You can run this SQL statement in your MySQL client to create the table.

### 2. Connecting to the Database using PHP

To connect to the database, you can use the `mysqli` extension in PHP:

```php
<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
```

Replace `your_username` and `your_password` with your MySQL credentials.

### 3. Inserting Data into the `users` table

Here's how you can insert data into the `users` table using PHP:

```php
<?php
// ... [Your database connection code here]

$username = "john_doe";
$password = password_hash("secure_password", PASSWORD_DEFAULT); // Always hash passwords!
$email = "john@example.com";
$first_name = "John";
$last_name = "Doe";

$sql = "INSERT INTO users (username, password, email, first_name, last_name) VALUES ('$username', '$password', '$email', '$first_name', '$last_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
```

**Note:** Always use prepared statements or a library like PDO to prevent SQL injection when working with user input.

### 4. Retrieving Data from the `users` table

To retrieve data from the `users` table:

```php
<?php
// ... [Your database connection code here]

$sql = "SELECT userid, username, email, first_name, last_name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["userid"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
```

This will display all the users in your `users` table.

Remember, this is a basic tutorial. In a real-world application, you'd want to implement more security measures, error handling, and possibly use a more advanced database interaction method like PDO or a framework's database abstraction layer.
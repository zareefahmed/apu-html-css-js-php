A basic example of a PHP REST API that responds to the kind of queries we discussed in our remote call sessions on HTML:

1. **File structure**:
```
/api/
    index.php
    .htaccess
```

2. **.htaccess** (to enable pretty URLs and redirect all requests to `index.php`):
```htaccess
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.+)$ index.php [L,QSA]
```

3. **index.php**:
```php
<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

$requestMethod = $_SERVER["REQUEST_METHOD"];
$uri = $_SERVER['REQUEST_URI'];
$paths = explode('/', $uri);
$endpoint = array_pop($paths);

switch ($endpoint) {
    case 'users':
        if ($requestMethod == 'GET') {
            echo getUsers();
        }
        break;
    
    case 'posts':
        if ($requestMethod == 'GET') {
            echo getPosts();
        } elseif ($requestMethod == 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            echo createPost($data);
        }
        break;
    
    default:
        if (is_numeric($endpoint) && $requestMethod == 'PUT') {
            $data = json_decode(file_get_contents('php://input'), true);
            echo updatePost($endpoint, $data);
        } elseif (is_numeric($endpoint) && $requestMethod == 'DELETE') {
            echo deletePost($endpoint);
        } else {
            echo json_encode(["message" => "Invalid endpoint or method"]);
        }
        break;
}

function getUsers() {
    $users = [
        ["id" => 1, "name" => "John Doe"],
        ["id" => 2, "name" => "Jane Smith"],
    ];
    return json_encode($users);
}

function getPosts() {
    $posts = [
        ["id" => 1, "title" => "Example Post 1", "body" => "This is the body of post 1", "userId" => 1],
        ["id" => 2, "title" => "Example Post 2", "body" => "This is the body of post 2", "userId" => 2],
    ];
    return json_encode($posts);
}

function createPost($data) {
    // Here, we just return the data as if we've stored it.
    // In a real-world scenario, you'd save this data to a database.
    return json_encode($data);
}

function updatePost($id, $data) {
    // Simulate updating a post by ID and return the updated data.
    // In real-world, you'd update this record in the database.
    $data['id'] = $id;
    return json_encode($data);
}

function deletePost($id) {
    // Simulate deleting a post by ID.
    // In a real-world scenario, you'd remove this record from the database.
    return json_encode(["message" => "Post with ID $id deleted"]);
}
```

This code provides a basic REST API in PHP, simulating CRUD operations for "users" and "posts". Note that it doesn't actually use a database but rather just returns hard-coded or received data for the sake of simplicity. If you wanted to use this in a real-world scenario, you'd integrate it with a database (like MySQL) to save, update, and retrieve the actual data.
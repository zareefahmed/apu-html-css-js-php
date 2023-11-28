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
    case 'cars':
            if ($requestMethod == 'GET') {
            echo getCarsCat();
            }
            break;

    case 'carscat':
                if ($requestMethod == 'GET') {
                echo getCarsCat();
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

function getBookings(){

}

function getCarsCat()
{
    $result=file_get_contents("http://api.carrental.com?action=carcat");

    $CarsCat=array();
$result_obj=json_decode($result);
foreach($result_obj->results as $value)
{
    $CarsCat[]=$value->category;
//$value->category
}
return json_encode($CarsCat);
}
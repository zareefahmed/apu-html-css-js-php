### JSONPlaceHolder

**JSONPlaceholder** is a free online REST API that you can use whenever you need some fake data for testing or prototyping. It's a simple service that allows developers to simulate requests to a real server.

Here's a brief introduction to the service:

- **Fake Online REST API**: It offers a set of resources, including posts, comments, users, todos, etc., that are standard in many applications. You can use HTTP verbs like GET, POST, PUT, DELETE on these resources to mimic real-world CRUD (Create, Read, Update, Delete) operations.

- **Usage**: The primary use case for JSONPlaceholder is during development and testing when you need to quickly prototype a feature or functionality but don't have a backend setup yet. Instead of building out a complete backend, you can use JSONPlaceholder to mock the data layer.

- **Data**: The data you get from JSONPlaceholder isn't persistent. That means if you make a POST request to add a new item, it will appear as though the item was added, but it won't actually be saved or available in subsequent GET requests.

- **Free & No Authentication**: JSONPlaceholder doesn't require API keys or authentication, making it easy to integrate into any project.

- **Rate Limiting**: While JSONPlaceholder is free, it's important to note that it comes with some rate limiting to ensure fair usage.

- **Origin**: JSONPlaceholder is developed by a developer named Typicode. In addition to JSONPlaceholder, Typicode has developed other useful tools and mock servers for developers.

To start using JSONPlaceholder, you just need to make requests to `https://jsonplaceholder.typicode.com/`, and you can find documentation on their official site to know the exact endpoints and how to structure your requests.

However, while it's great for initial testing and prototyping, it's not recommended to use such services in production environments or for critical use cases, as they are meant for temporary or educational purposes.




-------------

The `XMLHttpRequest` is a built-in web API that most browsers provide, allowing you to make HTTP and HTTPS requests to retrieve or send data. 

Here's a basic example using the JSONPlaceholder API, which is a free fake online REST API for testing and prototyping:

1. **GET Request** (Retrieve a list of users):

```javascript
var xhr = new XMLHttpRequest();

xhr.open('GET', 'https://jsonplaceholder.typicode.com/users', true);
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        var data = JSON.parse(xhr.responseText);
        console.log(data);
    }
};

xhr.send();
```

2. **POST Request** (Add a new post):

```javascript
var xhr = new XMLHttpRequest();
var data = {
    title: 'foo',
    body: 'bar',
    userId: 1
};

xhr.open('POST', 'https://jsonplaceholder.typicode.com/posts', true);
xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 201) { // 201 for created
        var response = JSON.parse(xhr.responseText);
        console.log(response);
    }
};

xhr.send(JSON.stringify(data));
```

3. **PUT Request** (Update an existing post):

```javascript
var xhr = new XMLHttpRequest();
var data = {
    id: 1,
    title: 'updated title',
    body: 'updated body',
    userId: 1
};

xhr.open('PUT', 'https://jsonplaceholder.typicode.com/posts/1', true);
xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        var response = JSON.parse(xhr.responseText);
        console.log(response);
    }
};

xhr.send(JSON.stringify(data));
```

4. **DELETE Request** (Remove a post):

```javascript
var xhr = new XMLHttpRequest();

xhr.open('DELETE', 'https://jsonplaceholder.typicode.com/posts/1', true);
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        console.log("Successfully deleted!");
    }
};

xhr.send();
```

Note: While `XMLHttpRequest` is widely used, it's now considered somewhat outdated. The Fetch API is the modern way to make web requests in JavaScript, and it provides a more flexible and powerful feature set, with a more modern promise-based approach. Consider looking into the Fetch API if you're starting a new project or refactoring existing code.

------

##Example


```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XMLHttpRequest Demo</title>
</head>
<body>

<button onclick="makeGETRequest()">GET Request</button>
<button onclick="makePOSTRequest()">POST Request</button>
<button onclick="makePUTRequest()">PUT Request</button>
<button onclick="makeDELETERequest()">DELETE Request</button>

<textarea id="response" rows="10" cols="50"></textarea>

<script>
    function makeGETRequest() {
        var xhr = new XMLHttpRequest();

        xhr.open('GET', 'https://jsonplaceholder.typicode.com/users', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.responseText);
                document.getElementById("response").value = JSON.stringify(data, null, 2);
            }
        };

        xhr.send();
    }

    function makePOSTRequest() {
        var xhr = new XMLHttpRequest();
        var data = {
            title: 'foo',
            body: 'bar',
            userId: 1
        };

        xhr.open('POST', 'https://jsonplaceholder.typicode.com/posts', true);
        xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 201) {
                var response = JSON.parse(xhr.responseText);
                document.getElementById("response").value = JSON.stringify(response, null, 2);
            }
        };

        xhr.send(JSON.stringify(data));
    }

    function makePUTRequest() {
        var xhr = new XMLHttpRequest();
        var data = {
            id: 1,
            title: 'updated title',
            body: 'updated body',
            userId: 1
        };

        xhr.open('PUT', 'https://jsonplaceholder.typicode.com/posts/1', true);
        xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var response = JSON.parse(xhr.responseText);
                document.getElementById("response").value = JSON.stringify(response, null, 2);
            }
        };

        xhr.send(JSON.stringify(data));
    }

    function makeDELETERequest() {
        var xhr = new XMLHttpRequest();

        xhr.open('DELETE', 'https://jsonplaceholder.typicode.com/posts/1', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("response").value = "Successfully deleted!";
            }
        };

        xhr.send();
    }
</script>

</body>
</html>
```

You can save this HTML content to a `.html` file, open it in your browser, and click on the buttons to see how the requests are made and the responses are displayed in the textarea.

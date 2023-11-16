### jQuery's AJAX methods:

1. **HTML Structure**:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery AJAX Demo</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<button onclick="makeGETRequest()">GET Request</button>
<button onclick="makePOSTRequest()">POST Request</button>
<button onclick="makePUTRequest()">PUT Request</button>
<button onclick="makeDELETERequest()">DELETE Request</button>

<textarea id="response" rows="10" cols="50"></textarea>

<script>
    function makeGETRequest() {
        $.ajax({
            url: 'https://jsonplaceholder.typicode.com/users',
            type: 'GET',
            success: function(data) {
                $('#response').val(JSON.stringify(data, null, 2));
            }
        });
    }

    function makePOSTRequest() {
        $.ajax({
            url: 'https://jsonplaceholder.typicode.com/posts',
            type: 'POST',
            contentType: 'application/json; charset=UTF-8',
            data: JSON.stringify({
                title: 'foo',
                body: 'bar',
                userId: 1
            }),
            success: function(response) {
                $('#response').val(JSON.stringify(response, null, 2));
            }
        });
    }

    function makePUTRequest() {
        $.ajax({
            url: 'https://jsonplaceholder.typicode.com/posts/1',
            type: 'PUT',
            contentType: 'application/json; charset=UTF-8',
            data: JSON.stringify({
                id: 1,
                title: 'updated title',
                body: 'updated body',
                userId: 1
            }),
            success: function(response) {
                $('#response').val(JSON.stringify(response, null, 2));
            }
        });
    }

    function makeDELETERequest() {
        $.ajax({
            url: 'https://jsonplaceholder.typicode.com/posts/1',
            type: 'DELETE',
            success: function() {
                $('#response').val("Successfully deleted!");
            }
        });
    }
</script>

</body>
</html>
```

The key differences here are:

- The usage of `$.ajax()` for making the requests.
- The `type` property determines the HTTP verb.
- jQuery abstracts away some of the lower-level details you see with raw `XMLHttpRequest`, so the code is generally shorter and easier to read.

Note: You must include the jQuery library (as I did in the `<head>` of the HTML) for this to work.
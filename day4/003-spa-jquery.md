## Jquery Version of Todo SPA

### HTML (index.html)

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List SPA with jQuery</title>
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
        }
        #todoList {
            list-style-type: none;
            padding: 0;
        }
        .todoItem {
            padding: 10px;
            border: 1px solid #ddd;
            margin-top: -1px;
        }
    </style>
</head>
<body>
    <h1>Todo List</h1>
    <input type="text" id="todoInput" placeholder="Enter a new todo...">
    <button id="addTodoBtn">Add</button>
    <ul id="todoList"></ul>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
```

### JavaScript (script.js)

```javascript
$(document).ready(function() {
    // Load todos from session storage on page load
    loadTodos();

    // Event listener for Add button
    $("#addTodoBtn").click(function() {
        addTodo();
    });

    // Event listener for Enter key in input field
    $("#todoInput").keyup(function(event) {
        if (event.key === "Enter") {
            addTodo();
        }
    });
});

function addTodo() {
    const todoText = $("#todoInput").val().trim();

    if (todoText) {
        const li = $("<li></li>").text(todoText).addClass("todoItem");
        $("#todoList").append(li);

        // Save todo to session storage
        saveTodo(todoText);

        // Clear input field
        $("#todoInput").val("");
    }
}

function saveTodo(todoText) {
    let todos = JSON.parse(sessionStorage.getItem("todos") || "[]");
    todos.push(todoText);
    sessionStorage.setItem("todos", JSON.stringify(todos));
}

function loadTodos() {
    const todos = JSON.parse(sessionStorage.getItem("todos") || "[]");
    todos.forEach(todo => {
        const li = $("<li></li>").text(todo).addClass("todoItem");
        $("#todoList").append(li);
    });
}
```

In this version, I've made the following changes:

1. Included the jQuery library in the HTML file using a CDN link.
2. Replaced vanilla JavaScript DOM manipulation and event handling with jQuery methods.

To use this SPA with jQuery, create two files: `index.html` and `script.js`. Copy the respective code into each file, and then open `index.html` in a web browser. Your todos will be saved in the session storage and will persist as long as the browser session is active. If you close the browser tab or window, the session storage will be cleared, and the todos will be lost. If you want to keep the todos even after closing the browser, you can replace `sessionStorage` with `localStorage` in the JavaScript code.


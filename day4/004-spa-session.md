A simple Single Page Application (SPA) for a Todo list using vanilla JavaScript and the browser's session storage:

### HTML (index.html)

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List SPA</title>
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
    <button onclick="addTodo()">Add</button>
    <ul id="todoList"></ul>

    <script src="script.js"></script>
</body>
</html>
```

### JavaScript (script.js)

```javascript
document.addEventListener("DOMContentLoaded", function() {
    // Load todos from session storage on page load
    loadTodos();

    // Event listener for Enter key in input field
    document.getElementById("todoInput").addEventListener("keyup", function(event) {
        if (event.key === "Enter") {
            addTodo();
        }
    });
});

function addTodo() {
    const input = document.getElementById("todoInput");
    const todoText = input.value.trim();

    if (todoText) {
        const todoList = document.getElementById("todoList");
        const li = document.createElement("li");
        li.textContent = todoText;
        li.className = "todoItem";
        todoList.appendChild(li);

        // Save todo to session storage
        saveTodo(todoText);

        // Clear input field
        input.value = "";
    }
}

function saveTodo(todoText) {
    let todos = JSON.parse(sessionStorage.getItem("todos") || "[]");
    todos.push(todoText);
    sessionStorage.setItem("todos", JSON.stringify(todos));
}

function loadTodos() {
    const todos = JSON.parse(sessionStorage.getItem("todos") || "[]");
    const todoList = document.getElementById("todoList");
    todos.forEach(todo => {
        const li = document.createElement("li");
        li.textContent = todo;
        li.className = "todoItem";
        todoList.appendChild(li);
    });
}
```

Here's a breakdown of how the SPA works:

1. The HTML provides a basic structure with an input field, a button, and an unordered list to display the todos.
2. The JavaScript listens for the DOM content to be loaded and then loads any todos from the session storage.
3. When the "Add" button is clicked or the Enter key is pressed in the input field, the `addTodo` function is called.
4. The `addTodo` function creates a new list item for the todo, appends it to the unordered list, and saves the todo to session storage.
5. The `saveTodo` function saves the todo to session storage.
6. The `loadTodos` function loads todos from session storage and displays them on the page.

To use this SPA, simply create two files: `index.html` and `script.js`. Copy the respective code into each file, and then open `index.html` in a web browser. Your todos will be saved in the session storage and will persist as long as the browser session is active. If you close the browser tab or window, the session storage will be cleared, and the todos will be lost. If you want to keep the todos even after closing the browser, you can replace `sessionStorage` with `localStorage` in the JavaScript code.
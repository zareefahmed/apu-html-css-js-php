$(document).ready(function() {
    // Load todos from session storage on page load
    loadTodos();
  //  storage="something";

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
    let todos = JSON.parse(storage.getItem("todos") || "[]");
    todos.push(todoText);
    storage.setItem("todos", JSON.stringify(todos));
}

function loadTodos() {
    const todos = JSON.parse(storage.getItem("todos") || "[]");
    todos.forEach(todo => {
        const li = $("<li></li>").text(todo).addClass("todoItem");
        $("#todoList").append(li);
    });
}
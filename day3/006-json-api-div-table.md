
## Example page for displaying users in a table 

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Users from JSONPlaceholder</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .user-table {
            display: flex;
            flex-direction: column;
            border: 1px solid #ccc;
            width: 400px;
        }
        .row {
            display: flex;
            border-bottom: 1px solid #ccc;
        }
        .cell {
            padding: 10px;
            flex: 1;
            word-break: break-all;
        }
        .header {
            background-color: #eee;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="user-table">
    <div class="row header">
        <div class="cell">ID</div>
        <div class="cell">Name</div>
        <div class="cell">Email</div>
    </div>
    <!-- Users will be appended here -->
</div>

<script>
    $(document).ready(function() {
        $.ajax({
            url: 'https://jsonplaceholder.typicode.com/users',
            type: 'GET',
            success: function(users) {
                users.forEach(user => {
                    const userRow = `
                        <div class="row">
                            <div class="cell">${user.id}</div>
                            <div class="cell">${user.name}</div>
                            <div class="cell">${user.email}</div>
                        </div>
                    `;
                    $('.user-table').append(userRow);
                });
            }
        });
    });
</script>

</body>
</html>
```

In this example:

- The AJAX request fetches users from the `JSONPlaceholder` API.
- Once the data is received, the script dynamically appends each user to the div-based table.
- Each user's ID, Name, and Email are displayed.

Opening this  file in a browser will fetch and display the user details in the div-based table format.
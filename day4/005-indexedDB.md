IndexedDB is a low-level API for storing structured data in the form of key-value pairs in a web browser. Unlike `localStorage`, which allows you to store simple key-value pairs, IndexedDB allows you to store more complex data types and provides a rich set of features for querying and manipulating that data. It's asynchronous and designed to work well with large amounts of data.

Here's a simple example using jQuery to demonstrate how to use IndexedDB:

### Step 1: Create the HTML Structure

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexedDB Test</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>IndexedDB Test with jQuery</h1>

    <div>
        <input type="text" id="itemName" placeholder="Enter item name">
        <button id="addItem">Add Item</button>
    </div>

    <ul id="itemList"></ul>

    <script src="app.js"></script>
</body>
</html>
```

### Step 2: Implement IndexedDB Logic with jQuery

Create an `app.js` file:

```javascript
let db;

// Open or create a new database
const request = indexedDB.open("itemsDB", 1);

request.onupgradeneeded = function(event) {
    db = event.target.result;
    if (!db.objectStoreNames.contains('items')) {
        db.createObjectStore('items', { autoIncrement: true });
    }
};

request.onsuccess = function(event) {
    db = event.target.result;
    displayItems();
};

request.onerror = function(event) {
    console.log("Error:", event.target.errorCode);
};

$("#addItem").click(function() {
    const itemName = $("#itemName").val();
    if (itemName) {
        const transaction = db.transaction(["items"], "readwrite");
        const store = transaction.objectStore("items");
        store.add({ name: itemName });

        transaction.oncomplete = function() {
            $("#itemName").val(''); // Clear the input
            displayItems();
        };
    }
});

function displayItems() {
    $("#itemList").empty(); // Clear the list

    const transaction = db.transaction(["items"], "readonly");
    const store = transaction.objectStore("items");
    const cursorRequest = store.openCursor();

    cursorRequest.onsuccess = function(event) {
        const cursor = event.target.result;
        if (cursor) {
            $("#itemList").append(`<li>${cursor.value.name}</li>`);
            cursor.continue();
        }
    };
}
```

### Step 3: Test in Chrome

1. Serve your website using a local server or a hosting platform.
2. Open the Chrome Developer Tools and navigate to the "Application" tab.
3. Under the "IndexedDB" section, you should see your database (`itemsDB`) and the object store (`items`).
4. Add some items using the input field and button in your HTML. You should see the items being added to the list and also appearing in the IndexedDB section of the Chrome Developer Tools.

### Notes:

- This is a basic example to get you started. In a real-world scenario, you'd likely want more features, better error handling, and a more sophisticated design.
- Always remember to handle errors and edge cases when working with IndexedDB.
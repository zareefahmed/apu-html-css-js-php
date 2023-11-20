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

## JavaScript WebSocket API:

The WebSocket API in JavaScript allows you to establish a WebSocket connection to a server. It's available in all modern browsers, including Chrome.

### Key Methods and Properties:

1. **Constructor**: `WebSocket(url[, protocols])`
   - `url`: The URL to which to connect.
   - `protocols` (optional): Either a single protocol string or an array of protocol strings.

2. **Methods**:
   - `send(data)`: Sends data through the WebSocket connection.
   - `close([code[, reason]])`: Closes the WebSocket connection.

3. **Event Handlers**:
   - `onopen`: Called when the connection is established.
   - `onmessage`: Called when data is received from the server.
   - `onclose`: Called when the connection is closed.
   - `onerror`: Called when an error occurs.

### Example:

For this example, we'll use the public WebSocket API provided by `websocket.org` for testing purposes.

1. **Open your Chrome browser and go to the Console tab in Developer Tools** (You can open Developer Tools by right-clicking on a webpage and selecting "Inspect" or by pressing `Ctrl+Shift+I` or `Cmd+Option+I` on Mac).

2. **Copy and paste the following code into the console**:

```javascript
// Create a new WebSocket connection
const socket = new WebSocket('wss://echo.websocket.org');

// Connection opened
socket.addEventListener('open', (event) => {
    console.log('WebSocket connection opened:', event);
    
    // Send a test message to the server
    socket.send('Hello, WebSocket!');
});

// Listen for messages from the server
socket.addEventListener('message', (event) => {
    console.log('Message from server:', event.data);
});

// Listen for the socket closing
socket.addEventListener('close', (event) => {
    console.log('WebSocket connection closed:', event);
});

// Handle any errors that occur
socket.addEventListener('error', (error) => {
    console.error('WebSocket Error:', error);
});

// You can close the connection after testing if you want
// socket.close();
```

3. **Run the code**: After pasting the code into the console, press `Enter`. You should see a message indicating that the WebSocket connection has been opened. Shortly after, you should see the message you sent ("Hello, WebSocket!") echoed back from the server, indicating it was received.

This example demonstrates the basics of setting up a WebSocket connection in JavaScript, sending a message to the server, and listening for messages from the server. The `wss://echo.websocket.org` endpoint simply echoes back any message it receives, which is why you see your message returned.

Remember, for a real-world application, you'd typically have a WebSocket server set up on your backend to handle more complex interactions and data exchanges.


----------------------


A simple HTML page with a button to test the WebSocket connection and a textarea to display the messages:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSocket Test</title>
</head>
<body>

<h2>WebSocket Test</h2>

<button id="testButton">Test WebSocket</button>
<br><br>
<textarea id="output" rows="10" cols="50" readonly></textarea>

<script>
    document.getElementById('testButton').addEventListener('click', function() {
        // Create a new WebSocket connection
        const socket = new WebSocket('wss://echo.websocket.org');
        // Can also try wss://demos.kaazing.com/echo
        

        // Append messages to the textarea
        function appendMessage(message) {
            const output = document.getElementById('output');
            output.value += message + '\n';
        }

        // Connection opened
        socket.addEventListener('open', (event) => {
            appendMessage('WebSocket connection opened.');
            
            // Send a test message to the server
            socket.send('Hello, WebSocket!');
        });

        // Listen for messages from the server
        socket.addEventListener('message', (event) => {
            appendMessage('Message from server: ' + event.data);
        });

        // Listen for the socket closing
        socket.addEventListener('close', (event) => {
            appendMessage('WebSocket connection closed.');
        });

        // Handle any errors that occur
        socket.addEventListener('error', (error) => {
            appendMessage('WebSocket Error: ' + error);
        });
    });
</script>

</body>
</html>
```

To test:

1. Copy the above code and save it to a file named `websocket_test.html`.
2. Open the file in your Chrome browser.
3. Click the "Test WebSocket" button. The connection status and the message from the server will be displayed in the textarea.


A simple example of an application that utilizes the HTML5 Geolocation API to get the user's current location and then displays it on a web page:

### HTML (index.html)

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location App</title>
</head>
<body>
    <h1>Your Location</h1>
    <button onclick="getLocation()">Get Location</button>
    <div id="location"></div>
    <script src="app.js"></script>
</body>
</html>
```

### JavaScript (app.js)

```javascript
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        document.getElementById("location").innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    const lat = position.coords.latitude;
    const lon = position.coords.longitude;
    document.getElementById("location").innerHTML = `Latitude: ${lat}<br>Longitude: ${lon}`;
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            document.getElementById("location").innerHTML = "User denied the request for Geolocation.";
            break;
        case error.POSITION_UNAVAILABLE:
            document.getElementById("location").innerHTML = "Location information is unavailable.";
            break;
        case error.TIMEOUT:
            document.getElementById("location").innerHTML = "The request to get user location timed out.";
            break;
        case error.UNKNOWN_ERROR:
            document.getElementById("location").innerHTML = "An unknown error occurred.";
            break;
    }
}
```

### Instructions:

1. Create two files: `index.html` and `app.js`.
2. Copy the respective code into these files.
3. Open the `index.html` file in a web browser.
4. Click the "Get Location" button. The browser will ask for permission to access your location.
5. If you allow it, your latitude and longitude will be displayed on the page. If you deny it or if there's an error, an appropriate message will be shown.

Note: For the Geolocation API to work, you might need to serve the files from a local server or host them on a secure (HTTPS) domain. Some browsers restrict the Geolocation API to secure contexts.
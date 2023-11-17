function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        document.getElementById("location").innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
 //   const lat = position.coords.latitude;
  //  const lon = position.coords.longitude;
  //   lat = position.coords.latitude;
   // lon = position.coords.longitude;

   const lat = parseInt(position.coords.latitude);
    const lon = parseInt(position.coords.longitude);
 
    //lat =parseInt(lat);
   // lon =parseInt(lon);

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
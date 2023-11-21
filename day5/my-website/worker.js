const CACHE_NAME = 'demo-cache-v1';
const urlsToCache = [
    '/',
    '/index.html',
    // Add other assets (like CSS, JS, images) here if needed
];


// Fetch event: serve assets from cache or fetch from network
self.addEventListener('fetch', function(event) {
    
    event.respondWith(
       caches.match(event.request)
        .then(function(response) {
         

            if (response) {
                

                return response; // Serve from cache
            }
            return fetch(event.request); // Fetch from network
        })
    );
});



///////////////////////////////////////////////////////////////

// Install event: cache assets
self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open(CACHE_NAME)
        .then(function(cache) {
            console.log('Opened cache');
            return cache.addAll(urlsToCache);
        })
    );
});



// Activate event: clean up old caches
self.addEventListener('activate', function(event) {
    const cacheWhitelist = [CACHE_NAME];
    event.waitUntil(
        caches.keys().then(function(cacheNames) {
            return Promise.all(
                cacheNames.map(function(cacheName) {
                    if (cacheWhitelist.indexOf(cacheName) === -1) {
                        return caches.delete(cacheName); // Delete old caches
                    }
                })
            );
        })
    );
});
// This is the "Offline page" service worker

// proper initialization
if ('function' === typeof importScripts) {
    // OneSignal ServiceWorker
    importScripts('https://cdn.onesignal.com/sdks/OneSignalSDKWorker.js');
    // sw helper workbox
    importScripts('https://storage.googleapis.com/workbox-cdn/releases/5.1.2/workbox-sw.js');


    self.addEventListener('install', function (event) {

        console.log('[Service Worker] Installing Service Worker.....', event);
    });

    // fetch required to make pwa standalone app
    self.addEventListener('fetch', (event) => {
        if (event.request.mode === 'navigate') {

            // event.respondWith((async () => {
            //         try {
            //             const preloadResp = await event.preloadResponse;
            //
            //             if (preloadResp) {
            //                 return preloadResp;
            //             }
            //
            //             const networkResp = await fetch(event.request);
            //             return networkResp;
            //         } catch (error) {
            //
            //             const cache = await caches.open(CACHE);
            //             const cachedResp = await cache.match(offlineFallbackPage);
            //             return cachedResp;
            //         }
            //     })()
            // );
        }
    });


}



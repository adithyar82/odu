//open up cache with given name and adds all static asset pages in to the cache
var cacheName="chkd-v1";
var staticAssets = [
    './',
    // './bootstrap.min.css',
    // './bootstrap.min.js',
    // './jquery.min.js',
    './index.html',
    './design/styleSheet.css',
    './index.js',
    './manifest.webmanifest',
    './images/App192.png',
    './images/App512.png',
    './images/App152.png',
    './images/Cover.png'
];

self.addEventListener('install', async e => {
    var cache = await caches.open(cacheName);
    //adds all states into the cache
    await cache.addAll(staticAssets);
    //skipwaiting () cause Service worker to move into the activate phase
    return self.skipWaiting();
});
self.addEventListener('activate', e =>{
    //claim() tells service worker to start servicing the running application immediately starts fetching the cache
    e.waitUntil(self.clients.claim());
});

self.addEventListener('fetch', async e => {
  const req = e.request;
  const url = new URL(req.url);

  if (url.origin === location.origin) {
    e.respondWith(cacheFirst(req));
  } else {
    e.respondWith(networkAndCache(req));
  }
});
async function cacheFirst(req) {
  const cache = await caches.open(cacheName);
  const cached = await cache.match(req);
  return cached || fetch(req);
}

async function networkAndCache(req) {
  const cache = await caches.open(cacheName);
  try {
    const fresh = await fetch(req);
    await cache.put(req, fresh.clone());
    return fresh;
  } catch (e) {
    const cached = await cache.match(req);
    return cached;
  }
}
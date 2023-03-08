const BASE = location.protocol + "//" + location.host;
const PREFIX = "portfolio";
const CACHED_FILES = [`${BASE}/assets/disconnected.png`];

function debug(status) {
  if (!status) {
    console.log = () => {};
  }
}(false);

self.addEventListener("install", (e) => {
  self.skipWaiting();
  e.waitUntil(
    (async () => {
      const cache = await caches.open(PREFIX);
      await Promise.all(
        [...CACHED_FILES, "/offline.html"].map((path) => {
          return cache.add(new Request(path));
        })
      );
    })()
  );
});

self.addEventListener("activate", (e) => {
  clients.claim();
  e.waitUntil(
    (async () => {
      const keys = await caches.keys();
      await Promise.all(
        keys.map((key) => {
          if (key !== PREFIX) {
            return caches.delete(key);
          }
        })
      );
    })()
  );
});

self.addEventListener("fetch", (e) => {
  if (e.request.mode === "navigate") {
    console.log("Navigate method called.")
    e.respondWith(
      (async () => {
        try {
          console.log("Fetching next request.")
          const preload = await e.preloadResponse;
          if (preload) {
            return preload;
          }
          return await fetch(e.request);
        } catch (e) {
          console.log("Fetching failed.")
          const cache = await caches.open(PREFIX);
          return await cache.match("/offline.html");
        }
      })()
    );
  } else if (CACHED_FILES.includes(e.request.url)) {
    e.respondWith(caches.match(e.request));
  }
});

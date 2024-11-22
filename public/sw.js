const CACHE_NAME = 'the-last-eden-cache-v2'; // Incrementa la versión del cache
const CACHE_URLS = [
  '/',
  '/index.php',
  '/favicon.ico',
  '/robots.txt',
  '/manifest.json',
  '/css/main.css',
  '/css/forms.css',
  '/images/Back-hero.png',
  '/images/hero.jpeg',
  '/images/gameplay1.png',
  '/images/gameplay2.png',
  '/images/gameplay3.png',
  '/images/history.jpeg',
  '/images/icon-16x16.png',
  '/images/ubication.png',
  '/images/icons/icon-192x192.png',
  '/images/icons/icon-512x512.png',
];

// Instalación del Service Worker
self.addEventListener('install', (event) => {
  console.log('Service Worker: Instalado');
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => {
        console.log('Service Worker: Caché abierto');
        return cache.addAll(CACHE_URLS); // Cachea todos los archivos listados
      })
      .catch((err) => {
        console.log('Service Worker: Error al cachear', err);
      })
  );
});

// Activación del Service Worker
self.addEventListener('activate', (event) => {
  console.log('Service Worker: Activado');
  const cacheWhitelist = [CACHE_NAME]; // Se asegura que solo la versión actual del cache sea usada

  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (!cacheWhitelist.includes(cacheName)) {
            // Borra el caché obsoleto
            return caches.delete(cacheName);
          }
        })
      );
    }).then(() => {
      // Force the waiting service worker to become the active service worker
      self.clients.claim(); // Esto permite que el nuevo SW controle las pestañas abiertas
    })
  );
});

// Interceptar las solicitudes y responder con los recursos cacheados
self.addEventListener('fetch', (event) => {
  // Solo interceptar las solicitudes que no sean de APIs o recursos dinámicos
  if (event.request.url.includes('api')) {
    return;
  }

  event.respondWith(
    caches.match(event.request).then((cachedResponse) => {
      // Devuelve la respuesta cacheada si existe
      if (cachedResponse) {
        console.log(`Service Worker: Sirviendo ${event.request.url} desde el caché`);
        return cachedResponse;
      }

      // Si no está en caché, hacer la solicitud normal
      return fetch(event.request)
        .then((response) => {
          return caches.open(CACHE_NAME).then((cache) => {
            // Cachea la respuesta para futuras solicitudes
            cache.put(event.request, response.clone());
            console.log(`Service Worker: Caché de nuevo ${event.request.url}`);
            return response;
          });
        });
    })
  );
});

// Para notificaciones push (opcional si deseas usar push notifications en el futuro)
self.addEventListener('push', (event) => {
  const title = event.data ? event.data.text() : 'Notificación';
  const options = {
    body: 'Aquí va el contenido de la notificación',
    icon: '/images/icons/icon-192x192.png',
    badge: '/images/icons/icon-192x192.png'
  };

  event.waitUntil(
    self.registration.showNotification(title, options)
  );
});

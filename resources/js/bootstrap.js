import axios from 'axios';
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

// Setup Axios
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Inject CSRF token from <meta> if available
const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
const csrfToken = csrfTokenMeta ? csrfTokenMeta.getAttribute('content') : null;

// Setup Echo with Pusher
window.Pusher = Pusher;

// Jika hanya pakai pusher.com dan tidak pakai WebSocket lokal
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true,
    encrypted: true,
    wsHost: 'ws.pusherapp.com',
    wsPort: 443,
    wssPort: 443,
    disableStats: true,
    enabledTransports: ['ws', 'wss'], // ini boleh, tapi pastikan tidak mengarah ke localhost
    authEndpoint: '/broadcasting/auth',
    auth: {
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    }
});


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allow your team to quickly build robust real-time web applications.
 */

import './echo';

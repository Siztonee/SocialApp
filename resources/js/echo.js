import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb',  // если вы используете pusher как back-end для reverb
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: '127.0.0.1',
    wsPort: 9000,  // если Reverb работает на порту 9000
    wssPort: 9000,  // если Reverb работает на порту 9000
    forceTLS: false,  // если не используете TLS, если используете - должно быть true
    enabledTransports: ['ws', 'wss'], // 'ws' и 'wss' должны соответствовать настройкам сервера
});

// Если ваш Reverb сервер использует другой протокол, может понадобиться изменить broadcaster


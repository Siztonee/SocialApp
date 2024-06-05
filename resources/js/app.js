import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



// // chat
// const messages_el = document.getElementById('messages');
// const message_input = document.getElementById('message_input');
// const message_form = document.getElementById('message_form');
// const message_block = document.getElementById('message_block');
//
// message_form.addEventListener('submit', function (e) {
//     e.preventDefault();
//     let has_errors = false;
//
//     if (message_input.value == '') {
//         alert('Please enter a message');
//         has_errors = true;
//     }
//
//     if (has_errors) {
//         return;
//     }
//
//     const options = {
//         method: 'post',
//         url: '/send-message',
//         data: {
//             'message': message_input.value
//         }
//     }
//
//
//     axios(options);
//
//
// });
//
// // window.Echo.channel('chat')
// //     .listen('message', (e) => {
// //         console.log(e);
// //     });
//

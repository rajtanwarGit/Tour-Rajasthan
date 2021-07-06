
const open1 = document.getElementById('enquiry_btn');
// const open2 = document.getElementById('enquiry_btn2');
const modal_cotainer = document.getElementById('modal_cotainer');
const close = document.getElementById('close');

open1.addEventListener('click', () => {
    modal_cotainer.classList.add('show');
});

// open2.addEventListener('click', () => {
//     modal_cotainer.classList.add('show');
// });

close.addEventListener('click', () => {
    modal_cotainer.classList.remove('show');
});
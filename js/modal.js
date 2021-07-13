function openModal() {

const modal_cotainer = document.getElementById('modal_cotainer');
const close = document.getElementById('close');

modal_cotainer.classList.add('show');

close.addEventListener('click', () => {
    modal_cotainer.classList.remove('show');
});
}
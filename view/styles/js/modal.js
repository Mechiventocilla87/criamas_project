let boxModal = document.querySelector('.modal-bienvenida');
let boxWhite = document.querySelector('.box_middle');
let btnExit = document.getElementById('btn_exit');

btnExit.addEventListener('click', function () {
    boxModal.classList.add('hidden');
    boxWhite.classList.add('hidden');
})
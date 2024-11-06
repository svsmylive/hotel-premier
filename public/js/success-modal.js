import { closeModal } from './modals.js';

const btnOk = document.querySelector('#modal-book-success .btn-ok');
btnOk.addEventListener('click', () => {
  closeModal('modal-book-success');
});

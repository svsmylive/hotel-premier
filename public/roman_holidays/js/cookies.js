import { closeModal, openModal } from './modals.js';

const cookieShown = localStorage.getItem('cookie_shown');

if (!cookieShown) {
  openModal('modal-cookie', false);

  localStorage.setItem('cookie_shown', 'yep )');
}

const btnOk = document.querySelector('#modal-cookie .modal-cookie__btn-ok');
btnOk.addEventListener('click', () => {
  closeModal('modal-cookie');
});

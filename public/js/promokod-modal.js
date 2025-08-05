import {closeModal, openModal} from './modals.js';

window.addEventListener('load', () => openModal('modal-promokod'));
setTimeout(() => closeModal('modal-promokod'), 6000);

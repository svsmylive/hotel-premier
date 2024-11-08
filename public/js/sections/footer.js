import { openModal } from '../modals.js';

const policyLink = document.querySelector('.policy-cont__link-policy');
policyLink.addEventListener('click', e => {
  e.preventDefault();
  openModal('modal-policy');
});
const rulesLink = document.querySelector('.policy-cont__link-rules');
rulesLink.addEventListener('click', e => {
  e.preventDefault();
  openModal('modal-rules');
});

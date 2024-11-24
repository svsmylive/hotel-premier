import { initBookForm } from '../forms/book.js';
import { closeModal, openModal } from '../modals.js';

const btnOrderBanket = document.getElementById('btn-book-banket');
btnOrderBanket.addEventListener('click', () => {
  openModal('modal-book');
});

initBookForm('modal-book-form', data => {
  closeModal('modal-book');
  openModal('modal-book-success');

  const eventTypeEl = document.querySelector('#modal-book-form .modal__form-element[data-field-name="event-type"]');
  const selectedOption = eventTypeEl.querySelector('.select-option-selected > .select-option-selected__text');

  data.eventType = selectedOption.textContent;

  // console.log('banquet data', data);

  fetch('https://hotelpremier.ru/api/reserve/banquet', {
    method: 'POST',
    body: JSON.stringify({
      name: data.name,
      date: data.date,
      guest_count: data.guestsNum,
      phone: data.mobileNumber,
      additional_info: data.additionalData,
      format: data.eventType,
    }),
  })
    .then(res => {})
    .catch(err => {});
});

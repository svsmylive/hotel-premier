import {initBookForm} from '../forms/book.js';
import {closeModal, openModal} from '../modals.js';

const btnOrderBanket = document.getElementById('btn-book-banket');
btnOrderBanket.addEventListener('click', () => {
    openModal('modal-book');
});

initBookForm('modal-book-form', data => {
    closeModal('modal-book');
    openModal('modal-book-success');

    fetch('https://hotelpremier.ru/api/reserve/banquet', {
        method: 'POST',
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify({
            name: data.name,
            date: data.date,
            guest_count: data.guestsNum,
            phone: data.mobileNumber,
            additional_info: data.additionalData,
        }),
    }).then(res => {
    });
});

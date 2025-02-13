// swiper

import {closeModal, openModal} from '../modals.js';
import {initBookForm} from '../forms/book.js';

new Swiper('.events-section__accordion-item-swiper', {
    direction: 'horizontal',
    mousewheelControl: true,
    slidesPerView: 'auto',
    followFinger: true,
    mousewheel: {
        releaseOnEdges: true,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
});

const eventsSwiperContainer = document.querySelector('.events-section__swiper-wrapper');
eventsSwiperContainer.addEventListener('wheel', e => {
    e.preventDefault();
});

// accordion

const eventsAccordionItems = document.querySelectorAll('.events-section__accordion-item');

const updateEventsAccordionItems = () => {
    eventsAccordionItems.forEach(item => {
        const content = item.querySelector('.events-section__accordion-content');
        if (!item.classList.contains('active')) {
            content.style.maxHeight = '0px';
        } else {
            content.style.maxHeight = content.scrollHeight + 20 + 'px';
        }
    });
};

updateEventsAccordionItems();

window.addEventListener('resize', updateEventsAccordionItems);

eventsAccordionItems.forEach((item, idx) => {
    const header = item.querySelector('.accordion-header');
    header.addEventListener('click', () => {
        item.classList.toggle('active');

        updateEventsAccordionItems();
    });
});

// booking

let accordionItemConnectedWihForm = null;

eventsAccordionItems.forEach(item => {
    const btnBook = item.querySelector('.events-section__btn-book');
    btnBook?.addEventListener('click', () => {
        accordionItemConnectedWihForm = item;
        openModal('modal-book-event');
    });
});

initBookForm('modal-book-event-form', data => {
    if (accordionItemConnectedWihForm) {
        data.type = accordionItemConnectedWihForm.querySelector('.accordion-header > h4').textContent;
    }

    closeModal('modal-book-event');
    openModal('modal-book-success');

    fetch('https://hotelpremier.ru/api/reserve/conferences', {
        method: 'POST',
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify({
            name: data.name,
            date: data.date,
            guest_count: data.guestsNum,
            phone: data.mobileNumber,
            additional_info: data.additionalData,
            type: data.type,
        }),
    })
        .then(res => {
        })
        .catch(err => {
            console.log(err);
        });
});

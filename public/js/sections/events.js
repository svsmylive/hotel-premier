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
        // eventsAccordionItems.forEach(_item => item !== _item && _item.classList.remove('active'));
        item.classList.toggle('active');

        // if (item.classList.contains('active')) {
        //   const top = eventsAccordionItems.item(0).offsetTop;
        //   const headerHeight = document.querySelector('.header').clientHeight;
        //   let itemsHeight = 0;

        //   for (let i = 0; i < idx; i++) {
        //     itemsHeight += eventsAccordionItems.item(i).querySelector('.accordion-header').clientHeight;
        //   }

        //   document.body.scrollTo({ top: top + itemsHeight - headerHeight });
        // }

        updateEventsAccordionItems();
    });
});

// booking

const bookButtons = document.querySelectorAll('.events-section__btn-book');
bookButtons.forEach(btnBook => {
    btnBook.addEventListener('click', () => {
        openModal('modal-book-event');
    });
});

initBookForm('modal-book-event-form', data => {
    const eventTypeEl = document.querySelector('#modal-book-event-form .modal__form-element[data-field-name="event-type"]');
    const selectedOption = eventTypeEl.querySelector('.select-option-selected > .select-option-selected__text');

    data.eventType = selectedOption.textContent;

    const activeItem = Array.from(eventsAccordionItems).find(item => item.classList.contains('active'));
    if (activeItem) {
        data.type = activeItem.querySelector('.accordion-header > h4').textContent;
    }

    closeModal('modal-book-event');
    openModal('modal-book-success');

    console.log('data', data);

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
            format: data.eventType,
        }),
    })
        .then(res => {
        })
        .catch(err => {
            console.log(err);
        });
});

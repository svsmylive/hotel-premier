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

let selectedConference = null;

eventsAccordionItems.forEach(item => {
    const btnBook = item.querySelector('.events-section__btn-book');

    btnBook?.addEventListener('click', () => {
        selectedConference = {
            hall: btnBook.dataset.hall,
            goal: btnBook.dataset.goal,
        };

        openModal('modal-book-event');
    });
});

initBookForm('modal-book-event-form', async data => {
    if (!selectedConference) {
        console.error('Не удалось определить выбранный конференц-зал');
        return;
    }

    try {
        const response = await fetch(
            'https://hotelpremier.ru/api/reserve/conferences',
            {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    name: data.name,
                    date: data.date,
                    guest_count: data.guestsNum,
                    phone: data.mobileNumber,
                    additional_info: data.additionalData,
                    type: selectedConference.hall,
                }),
            }
        );

        if (!response.ok) {
            throw new Error(
                `Ошибка отправки формы: ${response.status} ${response.statusText}`
            );
        }

        if (
            selectedConference.goal &&
            typeof window.ym === 'function'
        ) {
            window.ym(
                99236087,
                'reachGoal',
                selectedConference.goal
            );
        }

        closeModal('modal-book-event');
        openModal('modal-book-success');
    } catch (error) {
        console.error(
            'Ошибка бронирования конференц-зала:',
            error
        );
    }
});

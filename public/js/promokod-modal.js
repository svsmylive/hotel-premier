import {closeModal, openModal} from './modals.js';

const MODAL_ID = 'modal-promokod';
const COOKIE_NAME = 'promokod_modal_shown';
const COOKIE_MINUTES = 5;
const AUTO_CLOSE_MS = 12_000;

// Параметр модуля бронирования TravelLine, который применяет промокод сам,
// без ручного ввода в форме.
const PROMO_PARAM = 'promo-code-plain';

const modal = document.getElementById(MODAL_ID);

if (modal) {
    const promokod = modal.dataset.promokod;

    initCopyButton(modal, promokod);
    initCtaLink(modal, promokod);

    // Промокод уже применён — предлагать его второй раз незачем.
    if (!getCookie(COOKIE_NAME) && !new URLSearchParams(location.search).has(PROMO_PARAM)) {
        window.addEventListener('load', () => {
            // Без затемнения: страница и форма бронирования остаются доступными.
            openModal(MODAL_ID, false);
            setCookie(COOKIE_NAME, '1', COOKIE_MINUTES);

            const autoClose = setTimeout(() => closeModal(MODAL_ID), AUTO_CLOSE_MS);

            // Гость взаимодействует с окном — не закрываем его под рукой.
            modal.addEventListener('pointerdown', () => clearTimeout(autoClose));

            // Касание в стороне (в том числе по форме бронирования) убирает окно.
            // Событие не отменяем, поэтому нажатие сразу доходит до формы.
            document.addEventListener('pointerdown', event => {
                if (!modal.contains(event.target)) {
                    clearTimeout(autoClose);
                    closeModal(MODAL_ID);
                }
            });
        });
    }
}

function initCopyButton(modal, promokod) {
    const button = modal.querySelector('.modal-promokod__copy');
    const label = button?.querySelector('.modal-promokod__copy-text');
    if (!button || !label) return;

    const defaultText = label.textContent;
    let resetLabel = null;

    button.addEventListener('click', async () => {
        const copied = await copyToClipboard(promokod);

        label.textContent = copied ? 'Скопировано' : 'Не вышло';
        button.classList.toggle('copied', copied);

        clearTimeout(resetLabel);
        resetLabel = setTimeout(() => {
            label.textContent = defaultText;
            button.classList.remove('copied');
        }, 2000);
    });
}

// Кнопка ведёт на бронирование с уже применённым промокодом. На самой странице
// бронирования сохраняем текущие параметры поиска — иначе сбросится выбор номера.
function initCtaLink(modal, promokod) {
    const cta = modal.querySelector('.modal-promokod__cta');
    if (!cta) return;

    const url = new URL(cta.getAttribute('href'), location.origin);

    if (location.pathname === url.pathname) {
        new URLSearchParams(location.search).forEach((value, key) => {
            if (key !== PROMO_PARAM) url.searchParams.set(key, value);
        });
    }

    url.searchParams.set(PROMO_PARAM, promokod);
    cta.href = url.pathname + url.search;
}

async function copyToClipboard(text) {
    try {
        // navigator.clipboard недоступен вне https и в части мобильных браузеров.
        if (navigator.clipboard?.writeText) {
            await navigator.clipboard.writeText(text);
            return true;
        }
    } catch {
        // Падаем в запасной вариант ниже.
    }

    const input = document.createElement('textarea');
    input.value = text;
    input.setAttribute('readonly', '');
    input.style.position = 'fixed';
    input.style.opacity = '0';
    document.body.appendChild(input);

    try {
        input.select();
        input.setSelectionRange(0, text.length);
        return document.execCommand('copy');
    } catch {
        return false;
    } finally {
        input.remove();
    }
}

function setCookie(name, value, minutes) {
    const expires = new Date(
        Date.now() + minutes * 60 * 1000
    ).toUTCString();

    document.cookie = [
        `${encodeURIComponent(name)}=${encodeURIComponent(value)}`,
        `expires=${expires}`,
        'path=/',
        'SameSite=Lax'
    ].join('; ');
}

function getCookie(name) {
    const encodedName = `${encodeURIComponent(name)}=`;

    const cookie = document.cookie
        .split('; ')
        .find(item => item.startsWith(encodedName));

    return cookie
        ? decodeURIComponent(cookie.substring(encodedName.length))
        : null;
}

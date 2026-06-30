import {closeModal, openModal} from './modals.js';

window.addEventListener('load', () => {
    const cookieName = 'promokod_modal_shown';

    if (getCookie(cookieName)) {
        return;
    }

    openModal('modal-promokod');

    // Запоминаем показ на 5 минут
    setCookie(cookieName, '1', 5);

    // Закрываем окно через 10 секунд
    setTimeout(() => {
        closeModal('modal-promokod');
    }, 10_000);
});

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

setTimeout(() => closeModal('modal-promokod'), 10000);

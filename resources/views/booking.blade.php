<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"><link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бронирование номеров | Бизнес-отель «Премьер» - Краснодар</title>
    <meta name="description"
          content="Бронирование номера онлайн в нашей гостинице сэкономит ваше время на 90% а так же вы получите скидку на номер -5% от полной стоимости номера.">
    <meta name="keywords"
          content="бронирование гостиничных номеров,бронирование номера +в отеле,бронирование номеров,бронирование номеров +в гостинице,бронирование номеров +на английском,бронирование номеров бесплатно,бронирование номеров мест +в гостинице,бронирование отелей краснодар,бронирование отель,бронирование отель онлайн,бронирования краснодар,бронировать отель,бронировать отель барселона,букинг номер бронирования,гостиница бронирование,гостиница город,гостиница забронировать,гостиница измайлово,гостиница краснодар,гостиница номер,гостиница цена,забронировать номер,забронировать отель,заказ отель,заявка +на бронирование номера,краснодар раннее бронирование,номер бронирования билетов,номер подтверждения бронирования,номер телефона бронирования,онлайн бронирование краснодар,онлайн бронирование номеров,отель бронь,отель забронировать номер,отель мир,отель поиск,отель сайт,проверить номер бронирования,сайт отель бронирование,сайты бронирования номеров,центр бронирования краснодар,бронирования номера краснодра,забронировать номер в краснодаре,забронировать номер премьер,бронирования премьер,бронирования номер премьер отель">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="/assets/styles/styles.css" rel="stylesheet">
    <link href="/assets/styles/rooms.css" rel="stylesheet">
</head>
<body id="app">
<div class="wrapper">
    <header class="header header--shadow">
        <div class="content">
            <div class="header__logo logo">
                <a href="/"><img src="/images/logo.png"/></a>
            </div>
            <menu class="header__menu">
                <div class="menu__item">
                    <a href="/rooms/">Номера</a>
                </div>
                <div class="menu__item">
                    <a href="/conference_rooms/">Конференц-залы</a>
                </div>
                <div class="menu__item">
                    <a href="/pool_gym/">Бассейн и спортзал</a>
                </div>
                <div class="menu__item menu__item--more">
                    Еще
                    <div class="menu__item-sub">
                        <div class="menu__item-sub-item"><a href="/news/">Новости</a></div>
                        <div class="menu__item-sub-item"><a href="/about/">О нас</a></div>
                        <div class="menu__item-sub-item"><a href="/park-krasnodar/">Парк Краснодар</a></div>
                    </div>
                </div>
            </menu>
            <div class="header__contacts">
                <div class="contacts_tel">8 (861) 274-11-55</div>
                <div class="contacts_address">г. Краснодар, ул. Васнецова, 14</div>
            </div>
            <div class="header__burger" @click="toggleMenu"></div>
        </div>
    </header>
    <menu class="mobile" v-if="mobileMenu">
        <div class="menu__close" @click="toggleMenu"></div>
        <div class="menu__logo">
            <img src="/images/logo.png"/>
        </div>
        <div class="menu__contacts">
            <div class="contacts__tel">8 (861) 274-11-55</div>
            <div class="contacts__address">г. Краснодар, ул. Васнецова, 14</div>
        </div>
        <div class="menu__items">
            <div class="menu__item"><a href="/rooms/">Номера</a></div>
            <div class="menu__item"><a href="/conference_rooms/">Конференц-залы</a></div>
            <div class="menu__item"><a href="/pool_gym/">Бассейн и спортзал</a></div>
            <div class="menu__item"><a href="/restaurant/">Завтрак и рестораны</a></div>
            <div class="menu__item"><a href="/news/">Новости</a></div>
            <div class="menu__item"><a href="/about/">О нас</a></div>
            <div class="menu__item"><a href="/park-krasnodar/">Парк Краснодар</a></div>
        </div>
    </menu>

    <main class="main">
        <div class="cover-image">
            <img src="/images/rooms-cover.png"/>
        </div>
        <div class="content">
            <div id="tl-booking-form"></div>
        </div>
    </main>

    <div class="before-footer"></div>
    <footer class="footer">
        <div class="content">
            <div class="footer__col">
                <div class="footer__logo logo">
                    <a href="/"><img src="/images/logo.png"/></a>
                </div>
                <div class="footer__address">
                    г. Краснодар,<br/>ул. Васнецова, 14
                </div>
            </div>
            <div class="footer__col">
                <menu class="footer__menu">
                    <div class="menu__item">
                        <a href="/rooms/">Номера</a>
                    </div>
                    <div class="menu__item">
                        <a href="/conference_rooms/">Конференц-залы</a>
                    </div>
                    <div class="menu__item">
                        <a href="/pool_gym/">Бассейн и спортзал</a>
                    </div>
                    <div class="menu__item">
                        <a href="/restaurant/">Завтрак и рестораны</a>
                    </div>
                </menu>
            </div>
            <div class="footer__col">
                <menu class="footer__menu">
                    <div class="menu__item">
                        <a href="/about/">О нас</a>
                    </div>
                    <div class="menu__item">
                        <a href="/park-krasnodar/">Парк "Краснодар"</a>
                    </div>
                </menu>
            </div>
            <div class="footer__col">
                <div class="footer__socials">
                    <div class="socials__tel">8 (861) 274-11-55</div>
                    <div class="socials__vk"></div>
                    <div class="socials__ok"></div>
                </div>
                <div class="footer__links">
                    <div class="links__item">
                        <a href="/privacy-policy/">Политика конфиденциальности</a>
                    </div>
                    <div class="links__item">
                        <a href="/rules/">Правила проживания</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const {createApp, ref, onMounted} = Vue

        const mobileMenu = ref(false)
        const toggleMenu = () => {
            mobileMenu.value = !mobileMenu.value
        }

        createApp({
            setup() {
                return {mobileMenu, toggleMenu}
            }
        }).mount('#app')


        ;(function (d, w, e) {
            w[e] = w[e] || function () {
                try {
                    w.ecviBookingForm = new EcviBookingForm({
                        protocol: 'https',
                        showOtherHotels: true,
                        checkHotelByDefault: true,
                        headOfficeID: '42',
                        hotelID: '56',
                        bookingPath: 'https://hotelpremier-test.ru/booking',
                        token: 'a8d3da15-f863-4a26-a11e-2db40468ea7e',
                        width: '',
                        height: 420,
                        cssPath: 'https://hotelpremier-test.ru/assets/styles/custom.css',
                        rulesPath: '',
                        policyPath: '',
                        container: 'tl-booking-form',
                        target: 'booking',
                        lang: sessionStorage.getItem('ecviLang') || document.documentElement.lang.toUpperCase() || 'RU',
                        hiddenElems: 'nutrition,time'
                    });
                } catch (e) {
                    console.warn('Something goes wrong');
                }
            }
            var n = d.getElementsByTagName('script')[0],
                s = d.createElement('script'),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'https://cm.web-booking.ru/assets/formreservation/js/iframeCreate/widget.create.js';
            if (w.opera == '[object Opera]') {
                d.addEventListener('DOMContentLoaded', f, false);
            } else {
                f();
            }
        })(document, window, 'ecvi_booking_callback');
    </script>
</div>
</body>
</html>

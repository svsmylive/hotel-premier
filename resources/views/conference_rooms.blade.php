<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аренда конференц-зала в отеле «Премьер» в центре Краснодара - официальный сай</title>
    <meta name="description"
          content="Аренда конференц-зала в отеле «Премьер» в центре Краснодара. Узнать стоимость аренды и забронировать можете на сайте.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

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
            <a href="/"><img src="/images/logo.png"/></a>
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
            <img src="/images/conf-rooms-cover.jpg"/>
            <div class="cover-image__text">
                Конференц-залы<br/>для ваших мероприятий
            </div>
        </div>
        <div class="content">
            <div class="rooms">
                <div class="room">
                    <div class="room__images">
                        <img src="/images/conf-room-1.jpeg"/>
                    </div>
                    <div class="room__info">
                        <div class="room__info-top">
                            <h4 class="room__name">Основной конференц-зал</h4>
                            <div class="room__description">Основной зал с театральной рассадкой</div>
                        </div>
                        <div class="room__info-bottom">
                            <div class="room__info-bottom-content">
                                <div class="room__features">
                                    <div class="features__item features__item--sqr">
                                        Площадь
                                        <div>60 м<sup>2</sup></div>
                                    </div>
                                    <div class="features__item features__item--qty">
                                        Вместимость
                                        <div>до 70 чел.</div>
                                    </div>
                                </div>
                                <div class="room__description">Чтобы забронировать, позвоните по телефону</div>
                            </div>
                            <div class="room__prices">
                                <div class="room__price-new">
                                    2 500
                                    <span>₽/час</span>
                                </div>
                                <div class="room__price-tel">
                                    +7 (861) 274-11-55
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room">
                    <div class="room__images">
                        <img src="/images/conf-room-2.jpeg"/>
                    </div>
                    <div class="room__info">
                        <div class="room__info-top">
                            <h4 class="room__name">Большой конференц-зал</h4>
                            <div class="room__description">Большой зал со свободной рассадкой</div>
                        </div>
                        <div class="room__info-bottom">
                            <div class="room__info-bottom-content">
                                <div class="room__features">
                                    <div class="features__item features__item--sqr">
                                        Площадь
                                        <div>60 м<sup>2</sup></div>
                                    </div>
                                    <div class="features__item features__item--qty">
                                        Вместимость
                                        <div>до 120 чел.</div>
                                    </div>
                                </div>
                                <div class="room__description">Чтобы забронировать, позвоните по телефону</div>
                            </div>
                            <div class="room__prices">
                                <div class="room__price-new">
                                    2 500
                                    <span>₽/час</span>
                                </div>
                                <div class="room__price-tel">
                                    +7 (861) 274-11-55
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room">
                    <div class="room__images">
                        <img src="/images/conf-room-3.jpeg"/>
                    </div>
                    <div class="room__info">
                        <div class="room__info-top">
                            <h4 class="room__name">Переговорная комната</h4>
                            <div class="room__description">Специальная переговорная для бизнес встреч от 2 до 20
                                человек
                            </div>
                        </div>
                        <div class="room__info-bottom">
                            <div class="room__info-bottom-content">
                                <div class="room__features">
                                    <div class="features__item features__item--sqr">
                                        Площадь
                                        <div>60 м<sup>2</sup></div>
                                    </div>
                                    <div class="features__item features__item--qty">
                                        Вместимость
                                        <div>до 20 чел.</div>
                                    </div>
                                </div>
                                <div class="room__description">Чтобы забронировать, позвоните по телефону</div>
                            </div>
                            <div class="room__prices">
                                <div class="room__price-new">
                                    1 500
                                    <span>₽/час</span>
                                </div>
                                <div class="room__price-tel">
                                    +7 (861) 274-11-55
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner">
                <div class="banner__content">
                    <h4 class="banner__title">Организуем кофе-брейки и бизнес-ланчи</h4>
                    <div class="banner__text">Возьмем на себя обслуживание гостей с нашим персоналом</div>
                </div>
                <div class="banner__image">
                    <img src="/images/conf_rooms_banner.jpg"/>
                </div>
            </div>
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
</div>
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
</script>
</body>
</html>

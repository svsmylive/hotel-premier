<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"><link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>Отель рядом с парком Краснодар - бизнес-отель «Премьер»</title>
    <meta name="description"
          content="Вы сможете быстро добраться до главной достопримечательности города — парка Краснодар. Расстояние составит всего 2 км. Бизнес-отель «Премьер».">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link href="/assets/styles/styles.css" rel="stylesheet">
    <link href="/assets/styles/park.css" rel="stylesheet">
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
        <div class="content">
            <div class="breadcrumbs">
                <div class="breadcrumbs__item"><a href="/">Главная</a></div>
                <div class="breadcrumbs__item">Парк Краснодар</div>
            </div>

            <h1>Парк Краснодар</h1>

            <div class="block-1">
                <div class="block-1__text">
                    <p>Наш отель имеет прекрасное расположение.</p>
                    <p>Вы сможете быстро добраться до главной достопримечательности города — парка Краснодар. Расстояние
                        составит всего 2 км.</p>
                </div>
                <div class="block-1__cover">
                    <img src="/images/park-cover.jpg"/>
                </div>
            </div>
            <div class="block-2">
                <div class="block-2__text">
                    В парке был реализован один из старейших приемов ландшафтной архитектуры и геопластики — модуляция
                    перспектив.
                </div>
            </div>
            <div class="block-3">
                <img src="/images/park-1.jpg"/>
                <img src="/images/park-2.jpg"/>
                <img src="/images/park-3.jpg"/>
            </div>
            <h2>Японский сад</h2>
            <div class="block-4">
                <div class="block-4__text">
                    <p>Японский сад открыт весной 2023 года в парке «Краснодар».</p>
                    <p>Площадь сада — 7,5 га, протяженность пешеходных троп — 3591 метр. В саду высажено 6700 деревьев,
                        5900 кустарников и 280 000 цветов.</p>
                    <p>Отдельно выложенные камни, являются прогулочными тропами.</p>
                </div>
                <div class="block-4__cover">
                    <img src="/images/park-4.jpg"/>
                </div>
            </div>
            <div class="block-5">
                <h3>Посещение Японского сада осуществляется по QR-кодам</h3>
                <p>Можно получить в инфоматах расположенных у входа в Японский сад. Время прогулок не ограничено.</p>
            </div>
            <div class="block-6">
                <img src="/images/park-5.jpg"/>
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
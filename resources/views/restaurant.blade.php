<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ресторан «Камелот» в бизнес-отеле «Премьер», в центре Краснодара</title>
    <meta name="description"
          content="Ресторан «Камелот» в бизнес-отеле «Премьер», в центре Краснодара. Завтраки, обслуживание по меню, банкетный зал, караоке и бильярд.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap"
        rel="stylesheet">

    <link href="/assets/styles/styles.css" rel="stylesheet">
    <link href="/assets/styles/restaurant.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <header class="header header--shadow">
        <div class="content">
            <div class="header__logo logo">
                <a href="/"><img src="/images/logo.png"/></a>
            </div>
            <menu class="header__menu">
                <div class="menu__item">
                    <a href="{{ route('rooms') }}">Номера</a>
                </div>
                <div class="menu__item">
                    <a href="{{ route('conference_rooms') }}">Конференц-залы</a>
                </div>
                <div class="menu__item">
                    <a href="{{ route('pool_gym') }}">Бассейн и спортзал</a>
                </div>
            </menu>
            <div class="header__contacts">
                <div class="contacts_tel">8 (861) 274-11-55</div>
                <div class="contacts_address">г. Краснодар, ул. Васнецова, 14</div>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="content">
            <div class="breadcrumbs">
                <div class="breadcrumbs__item"><a href="/">Главная</a></div>
                <div class="breadcrumbs__item">Завтрак и рестораны</div>
            </div>

            <h1>Ресторан «Камелот»</h1>

            <div class="restaurant__items">
                <div class="restaurant__item">
                    <h4 class="restaurant__item-title">Завтраки</h4>
                    <div class="restaurant__item-text">Завтрак для гостей отеля по системе «Шведский стол»</div>
                    <div class="restaurant__item-cover">
                        <img src="/images/breakfast-cover.jpg"/>
                    </div>
                </div>
                <div class="restaurant__item">
                    <h4 class="restaurant__item-title">Ресторан</h4>
                    <div class="restaurant__item-text">Обслуживание по меню для всех гостей. Ресторан открыт до 01:00
                    </div>
                    <div class="restaurant__item-cover">
                        <img src="/images/restaurant-cover.jpg"/>
                    </div>
                </div>
                <div class="restaurant__item">
                    <h4 class="restaurant__item-title">Банкетный зал</h4>
                    <div class="restaurant__item-text">Для проведения мероприятий до 100 человек</div>
                    <div class="restaurant__item-cover">
                        <img src="/images/bankethall-cover.jpg"/>
                    </div>
                </div>
                <div class="restaurant__item">
                    <h4 class="restaurant__item-title">Караоке</h4>
                    <div class="restaurant__item-text">Караоке вечера для талантливых и весёлых компаний</div>
                    <div class="restaurant__item-cover">
                        <img src="/images/karaoke.cover.jpg"/>
                    </div>
                </div>
                <div class="restaurant__item">
                    <h4 class="restaurant__item-title">Бильярдный зал</h4>
                    <div class="restaurant__item-text">Уникальная бильярдная в рыцарском стиле</div>
                    <div class="restaurant__item-cover">
                        <img src="/images/billiard-cover.jpg"/>
                    </div>
                </div>
                <div class="restaurant__item">
                    <h4 class="restaurant__item-title">Летняя веранда</h4>
                    <div class="restaurant__item-text">Свежий воздух и живописный вид с летней веранды ресторана</div>
                    <div class="restaurant__item-cover">
                        <img src="/images/terrace-cover.jpg"/>
                    </div>
                </div>
            </div>

            <div class="restaurant__text">
                Уютно расположенный в самом сердце Краснодара между улицами Северная и Селезнева ресторан с легкостью
                перенесет Вас из кипящего жизнью центра южной столицы в прохладный и таинственный полумрак
                средневекового европейского замка.
            </div>

            <div class="restaurant__info">
                <div class="restaurant__info-item">
                    <h5 class="restaurant__info-item-title">Вместимость</h5>
                    <div class="restaurant__info-item-text">до 100 чел.</div>
                </div>
                <div class="restaurant__info-item">
                    <h5 class="restaurant__info-item-title">Телефон</h5>
                    <div class="restaurant__info-item-text">+7 (861) 274-11-55</div>
                </div>
                <div class="restaurant__info-item">
                    <h5 class="restaurant__info-item-title">Меню</h5>
                    <div class="restaurant__info-item-text"><a target="_blank"
                                                               href="https://drink-in-group.ru/kamelot/">Основное
                            меню</a></div>
                </div>
            </div>

            <div class="banner">
                <div class="banner__content">
                    <div class="banner__title">Получите максимум удовольствия</div>
                    <div class="banner__text">Забронируйте номер в нашем отеле и пользуйтесь всеми услугами, включенными
                        в проживание
                    </div>
                    <div class="banner__button">Выбрать номер</div>
                </div>
                <div class="banner__image">
                    <img src="/images/banner2.jpg"/>
                </div>
            </div>

            <div class="location">
                <div class="location__content">
                    <h2 class="location__title">Где находимся</h2>
                    <div class="location__items">
                        <div class="location__item location__item--location">г. Краснодар, ул. Васнецова, 14</div>
                        <div class="location__item location__item--tel">+7 (861) 274-11-55</div>
                    </div>
                </div>
                <div class="location__map">
                    <img src="/images/map.jpg"/>
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
                        <a href="{{ route('rooms') }}">Номера</a>
                    </div>
                    <div class="menu__item">
                        <a href="{{ route('conference_rooms') }}">Конференц-залы</a>
                    </div>
                    <div class="menu__item">
                        <a href="{{ route('pool_gym') }}">Бассейн и спортзал</a>
                    </div>
                    <div class="menu__item">
                        <a href="{{ route('restaurant') }}">Завтрак и рестораны</a>
                    </div>
                </menu>
            </div>
            <div class="footer__col">
                <menu class="footer__menu">
                    <div class="menu__item">
                        <a href="/about.html">О нас</a>
                    </div>
                    <div class="menu__item">
                        <a href="{{ route('park-krasnodar') }}">Парк "Краснодар"</a>
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
                        <a href="#">Политика конфиденциальности</a>
                    </div>
                    <div class="links__item">
                        <a href="#">Правила проживания</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>

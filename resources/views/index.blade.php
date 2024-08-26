<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap"
        rel="stylesheet">

    <link href="/assets/styles/styles.css" rel="stylesheet">
    <link href="/assets/styles/index.css" rel="stylesheet">
</head>
<body>
<header class="header desktop">
    <div class="header__logo logo">
        <img src="images/logo.png"/>
    </div>
    <div></div>
    <div class="header__contacts">
        <div class="contacts__tel">8 (861) 274-11-55</div>
        <div class="contacts__address">г. Краснодар, ул. Васнецова, 14</div>
    </div>
</header>
<menu class="menu menu__items desktop">
    <div class="menu__item"><a href="{{ route('rooms') }}">Номера</a></div>
    <div class="menu__item"><a href="{{ route('conference_rooms') }}">Конференц-залы</a></div>
    <div class="menu__item"><a href="{{ route('pool_gym') }}">Бассейн и спортзал</a></div>
    <div class="menu__item"><a href="{{ route('restaurant') }}">Завтрак и рестораны</a></div>
    <div class="menu__item"><a href="/news">Новости</a></div>
    <div class="menu__item"><a href="/about">О нас</a></div>
    <div class="menu__item"><a href="{{ route('park-krasnodar') }}">Парк Краснодар</a></div>
</menu>
<menu class="mobile">
    <div class="menu__contacts">
        <div class="contacts__tel">8 (861) 274-11-55</div>
        <div class="contacts__address">г. Краснодар, ул. Васнецова, 14</div>
    </div>
    <div class="menu__items">
        <div class="menu__item"><a href="{{ route('rooms') }}">Номера</a></div>
        <div class="menu__item"><a href="{{ route('conference_rooms') }}">Конференц-залы</a></div>
        <div class="menu__item"><a href="{{ route('pool_gym') }}">Бассейн и спортзал</a></div>
        <div class="menu__item"><a href="{{ route('restaurant') }}">Завтрак и рестораны</a></div>
        <div class="menu__item"><a href="/news">Новости</a></div>
        <div class="menu__item"><a href="/about">О нас</a></div>
        <div class="menu__item"><a href="{{ route('park-krasnodar') }}">Парк Краснодар</a></div>
    </div>
</menu>
<video autoplay muted loop class="main-page-video">
    <source src="/videos/main_page.mp4" type="video/mp4">
</video>
</body>
</html>

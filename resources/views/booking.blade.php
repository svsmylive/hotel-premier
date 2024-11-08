<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Бизнес-отель «Премьер» 4 звезды в центре Краснодара</title>
    <meta name="description"
          content="Бизнес-отель «Премьер» 4 звезды. Конференц зал, спорт зал, ресторанный комплекс, богатый номерной фонд в центре Краснодара.">
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/assets/styles/variables.css"/>
    <link rel="stylesheet" href="/assets/styles/shared.css"/>
    <link rel="stylesheet" href="/assets/styles/index.css"/>
    <link rel="stylesheet" href="/assets/styles/adaptive.css"/>
    <title>ПРЕМЬЕР</title>

    <link rel="icon" type="image/png" href="./favicon.png"/>
</head>
<body>
<header class="header" style="position: unset">

    <div class="logo-cont">
        <img src="/assets/images/logo2.svg" alt="#" class="logo-cont__img"/>
        <h2 class="logo-cont__title">
            <a href="/" style="text-decoration: none; color: black">
                ПРЕМЬЕР
            </a>
        </h2>
    </div>

    <div class="links-cont">
        <a class="links-cont__link" href="/#nums">Номера</a>
        <a class="links-cont__link" href="/#gastronomya">Гастрономия</a>
        <a class="links-cont__link" href="/#events">Мероприятия</a>
        <a class="links-cont__link" href="/#wealness">Wellness</a>
        <a class="links-cont__link" href="/#entertaiment">Развлечения</a>
    </div>
    <div class="phone-cont">
        <a class="phone-cont__phone" href="tel:88612741155">8 (861) 274-11-55</a>
    </div>
    <div class="menu-icon">
        <span></span>
    </div>
</header>
<div class="menu-block collapsed">
    <div class="links-cont">
        <a class="links-cont__link" href="/#nums">Номера</a>
        <a class="links-cont__link" href="/#gastronomya">Гастрономия</a>
        <a class="links-cont__link" href="/#events">Мероприятия</a>
        <a class="links-cont__link" href="/#wealness">Wellness</a>
        <a class="links-cont__link" href="/#entertaiment">Развлечения</a>
    </div>

    <div class="contacts-cont">
        <a class="contacts-cont__phone" href="tel:88612741155">8 (861) 274-11-55</a>
        <div class="contacts-cont__addr">г. Краснодар, ул. Васнецова, 14</div>
    </div>
</div>
<main class="main">
    <div id="booking_iframe" style="position: relative; padding-bottom: 30px;">
        <div id="bn_iframe" style="font-family: 'Proxima nova', 'Helvetica Neue', 'Cera Pro Medium',
Arial, Helvetica, sans-serif; position: absolute; right: 0; bottom: 0; font-size: 12px; line-height:
1em; opacity: .5; z-index: 10; margin-top: 10px;">
            <div style="color: #1403fc!important; background: rgba(0, 0, 0, 0)!important;">
                <a style="color: #808080!important; background: #fff!important;"
                   href="https://bnovo.ru/bnovo-mb/?utm_source=client_modul_br" id="bnovo_link"
                   target="_blank">Система управления отелем Bnovo ©</a>
            </div>
        </div>
    </div>
    <script src="https://widget.reservationsteps.ru/iframe/library/dist/booking_iframe.js"></script>
    <script type="text/javascript">
        (function () {
            var BnovoBookFrame = new BookingIframe({
                html_id: "booking_iframe",
                uid: "917b573b-59b0-4f30-ad3c-324ecd99e0d1",
                lang: "ru",
                width: "auto",
                height: "auto",
                rooms: "",
                IsMobile: "0",
                scroll_to_rooms: "0",
            });
            BnovoBookFrame.init();
        })();
    </script>
</main>

<footer class="footer">
    <div class="footer__head">
        <img src="/assets/images/logo-footer.svg" alt=""/>
        <h2>
            <a href="/" style="text-decoration: none; color: white">
                ПРЕМЬЕР
            </a></h2>
    </div>
    <div class="footer__content">
        <div class="footer__content-map-links-wrapper">
            <div class="footer-map-cont">
                <p class="footer-map-cont__text" style="margin-bottom: 12px">г. Краснодар, ул. Васнецова, 14</p>
                <a class="footer-map-cont__text" href="tel:88612741155">8 (861) 274-11-55</a>
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3Adda1f7b06b71574a5fcb37454f8bf26dedcd8416ab439192dae38046dfad31c3&amp;source=constructor"
                    width="100%"
                    height="300"
                    frameborder="0"
                    style="margin-top: 20px"
                ></iframe>
            </div>
            <div class="footer__content-links-wrapper">
                <div class="links">
                    <a href="/#nums">Номера</a>
                    <a href="/#gastronomya">Гастрономия</a>
                    <a href="/#events">Мероприятия</a>
                    <a href="/#wealness">Wellness</a>
                    <a href="/#entertaiment">Развлечения</a>
                </div>
            </div>
        </div>

        <div class="policy-cont">
            <a class="policy-cont__link-rules" href="#">Правила проживания</a>
            <a class="policy-cont__link-policy" href="#">Политика конфиденциальности</a>
        </div>
    </div>
</footer>

<div class="modal" id="modal-cookie">
    <svg class="modal__close" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 17L17 3M3 3L17 17" stroke="#ADAAA9" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg>
    <p>Этот сайт собирает cookies, чтобы сделать его удобнее для вас.</p>
    <button class="modal-cookie__btn-ok btn-primary">Хорошо</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/js/lib/imask.js"></script>
<script src="/js/index.js" type="module"></script>
</body>
</html>

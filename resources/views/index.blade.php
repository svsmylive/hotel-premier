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
<header class="header">
    <div class="logo-cont">
        <img src="/assets/images/logo2.svg" alt="#" class="logo-cont__img"/>
        <h2 class="logo-cont__title">ПРЕМЬЕР</h2>
    </div>
    <div class="links-cont">
        <a class="links-cont__link" href="#nums">Номера</a>
        <a class="links-cont__link" href="#gastronomya">Гастрономия</a>
        <a class="links-cont__link" href="#events">Мероприятия</a>
        <a class="links-cont__link" href="#wealness">Wellness</a>
        <a class="links-cont__link" href="#entertaiment">Развлечения</a>
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
        <a class="links-cont__link" href="#nums">Номера</a>
        <a class="links-cont__link" href="#gastronomya">Гастрономия</a>
        <a class="links-cont__link" href="#events">Мероприятия</a>
        <a class="links-cont__link" href="#wealness">Wellness</a>
        <a class="links-cont__link" href="#entertaiment">Развлечения</a>
    </div>

    <div class="contacts-cont">
        <a class="contacts-cont__phone" href="tel:88612741155">8 (861) 274-11-55</a>
        <div class="contacts-cont__addr">г. Краснодар, ул. Васнецова, 14</div>
    </div>
</div>
<main class="main">
    <section class="intro-section">
        <div class="intro-section__video loading"></div>
        <div class="intro-section__text-cont">
            <h1 class="intro-section__title">ПРЕМЬЕР</h1>
            <h4 class="intro-section__description">Для деловых встреч и тихого отдыха</h4>
        </div>
        <div class="book-widget">
            <div class="left" id="_bn_widget_">
            </div>
        </div>
    </section>

    <section class="opportunities-section">
        <ul class="opportunities-section__list">
            <li class="opportunities-section__list-item">
                <img src="/assets/images/opportunities_1.svg" alt=""/>
                <h3>ПАРК «КРАСНОДАР»</h3>
                <p>
                    И самый большой в Европе Японский сад<br/>
                    в 20 минутах. Рядом ж/д вокзал,<br/>
                    удобный выезд на центральные улицы.
                </p>
            </li>
            <li class="opportunities-section__list-divider"></li>
            <li class="opportunities-section__list-item">
                <img src="/assets/images/opportunities_2.svg" alt=""/>
                <h3>41 НОМЕР ОТ 3500 ₽</h3>
                <p>
                    Room service, ранний завтрак,<br/>
                    можно с питомцем до 6 кг.<br/>
                    Каждый этаж в своей концепции и стиле.
                </p>
            </li>
            <li class="opportunities-section__list-divider"></li>
            <li class="opportunities-section__list-item">
                <img src="/assets/images/opportunities_3.svg" alt=""/>
                <h3>WELLNESS-ЦЕНТР</h3>
                <p>
                    Тренажёрный зал, бассейн и сауна,<br/>
                    3 конференц-зала, ресторан, бильярдная.<br/>
                    Рядом автосервис.
                </p>
            </li>
        </ul>
    </section>

    <section id="nums" class="nums-section">
        <h2 class="nums-section__title">НОМЕРА</h2>
        <div class="nums-section__subtitle">Пять категорий номеров от 20 до 60 м²</div>
        <div class="nums-carousel swiper">
            <div class="nums-carousel__items-wrapper swiper-wrapper">
                @foreach($rooms as $room)
                    <div class="nums-carousel__item swiper-slide">
                        <div class="nums-carousel__item-image-wrapper">
                            @foreach($room['images'] as $image)
                                <div
                                    data-var="{{ $loop->iteration }}"
                                    class="nums-carousel__item-image-variant @if($loop->iteration == 1) active @endif"
                                    style="background-image: url({{ $image['url'] }})"
                                ></div>
                            @endforeach
                            <div class="nums-carousel__item-minis">
                                @foreach($room['images'] as $key => $image)
                                    <div
                                        data-var="{{ $loop->iteration }}"
                                        class="nums-carousel__item-mini-item @if($loop->iteration == 1) active @endif"
                                        style="background-image: url({{ $image['url'] }})"
                                    ></div>
                                @endforeach
                            </div>
                        </div>

                        <div class="nums-carousel__item-about">
                            <div class="nums-carousel__item-counter"> {{ $loop->iteration }}<span>/5</span></div>
                            <h4>{{ $room['name'] }}</h4>
                            <div class="nums-carousel__item-conviniences">{{ $room['description'] }}
                            </div>
                            <ul class="nums-carousel__item-about-list">
                                @foreach($room['options'] as $option)
                                    <li>{{ $option['name'] }}</li>
                                @endforeach
                            </ul>

                            <div class="nums-carousel__item-about-bottom">
                                <div class="nums-carousel__item-about-tags">
                                    <div>{{ $room['square'] }}</div>
                                    <div> {{ $room['capacity'] }}</div>
                                </div>

                                <div class="nums-carousel__item-book-cont">
                                    <div class="nums-carousel__item-price">От {{ $room['price'] }} ₽/сутки</div>
                                    <button class="btn-primary">Забронировать</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="nums-carousel__dots-cont"></div>
        </div>
    </section>

    <section class="hotel-section">
        <h2 class="hotel-section__title">НАШ ОТЕЛЬ ПОДОЙДЁТ</h2>
        <div class="advantages-cont">
            <div>
                <div class="advantages-cont__advantage">
                    <div style="background-image: url('/assets/images/our-hotel-suits/1.jpg')"></div>
                    <span>
                <h4>ДЛЯ ДЕЛОВЫХ ВСТРЕЧ</h4>
                <p>
                  В распоряжении гостей два конференц-зала и переговорная с бесплатным Wi-Fi. 30 парковочных мест. Решайте
                  важные вопросы, не выходя из отеля
                </p>
              </span>
                </div>
                <div class="advantages-cont__advantage">
                    <div style="background-image: url('/assets/images/our-hotel-suits/2.jpg')"></div>
                    <span>
                <h4>ДЛЯ ОТДЫХА И РАЗВЛЕЧЕНИЙ</h4>
                <p>
                  Бассейн, солярий, сауна и ХХХ тренажёрный зал. А вечером можно поиграть в бильярд или арендовать
                  караоке-комнату на небольшую компанию
                </p>
              </span>
                </div>
            </div>
            <div class="advantages-cont__advantage">
                <div style="background-image: url('/assets/images/our-hotel-suits/3.jpg')"></div>
                <span>
              <h4>ДЛЯ ЗНАКОМСТВА С ГОРОДОМ</h4>
              <p>
                20 минут до ж/д вокзала и центра города. Вблизи парк «Краснодар», Японский сад и главный стадион юга России.
                Прогулки, матчи и концерты — всё около отеля
              </p>
            </span>
            </div>
        </div>
    </section>
    <section id="gastronomya" class="gastronomya-section">
        <h2 class="gastronomya-section__title">ГАСТРОНОМИЯ</h2>
        <p class="gastronomya-section__description">От ранних завтраков до праздничных банкетов</p>
        <div>
            <div class="gastro-cont">
                <div class="gastro-cont__image" style="background-image: url('/assets/images/gastronomy/1.jpg')"></div>
                <h3 class="gastro-cont__title">БАНКЕТНЫЙ ЗАЛ</h3>
                <span class="line"></span>
                <p class="gastro-cont__description">
                    Подходит для проведения мероприятий до 100 человек. Банкетный зал оборудован акустической системой,
                    световой
                    аппаратурой и экраном.
                </p>
                <button id="btn-book-banket" class="btn-secondary gastronomya-section__action-button">Заказать банкет
                </button>
            </div>
            <div class="gastro-cont">
                <div class="gastro-cont__image" style="background-image: url('/assets/images/gastronomy/2.jpg')"></div>
                <h3 class="gastro-cont__title">РЕСТОРАН</h3>
                <span class="line"></span>
                <p class="gastro-cont__description">
                    Круглосуточно обслуживаем гостей по меню. Кухня ресторана «Камелот» специализируется на блюдах
                    европейской кухни в
                    авторском исполнении.
                </p>
                <a
                    href="https://drink-in-group.ru/kamelot/"
                    target="_blank"
                    class="btn-secondary gastronomya-section__action-button"
                >Посмотреть меню</a
                >
            </div>
            <div class="gastro-cont">
                <div class="gastro-cont__image" style="background-image: url('/assets/images/gastronomy/3.jpg')"></div>
                <h3 class="gastro-cont__title">ЗАВТРАКИ</h3>
                <span class="line"></span>
                <p class="gastro-cont__description">С 7:00 до 11:00 подаём 2 варианта завтрака: </p>
                <ul>
                    <li>Английский с глазуньей, сосисками и сырниками на десерт; </li>
                    <li>Континентальный со скремблом, лососем и овсяной кашей.</li>
                </ul>
                <span class="line"></span>
                <p class="gastro-cont__description">
                    По предзаказу приготовим завтрак к нужному времени или подадим его в номер. А для тех, кто сильно
                    торопится,
                    упакуем еду в ланч-боксы с собой. 
                </p>
            </div>
        </div>
    </section>

    <section id="events" class="events-section">
        <img src="/assets/images/microphone.svg" alt="" class="events-section__microphone"/>
        <h2 class="events-section__title">ЗАЛЫ ДЛЯ МЕРОПРИЯТИЙ</h2>
        <p class="events-section__description">
            Проводите у нас совещания, мастер-классы, круглые столы, пресс-конференции, форумы, семинары, презентации
            продуктов и
            другие мероприятия. В перерывах организуем фуршет и кофе-брейк.
        </p>
        <div class="events-section__accordion">
            <div class="events-section__accordion-item active">
                <div class="events-section__accordion-header accordion-header">
                    <div></div>
                    <h4>МАЛЫЙ КОНФЕРЕНЦ-ЗАЛ</h4>
                    <div class="events-section__toggler toggler">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.4001 1.40002L12.6001 12.6"
                                stroke="#D9D8D4"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M12.6001 1.40002V12.6H1.4001"
                                stroke="#D9D8D4"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                </div>
                <div class="events-section__accordion-content">
                    <div class="events-section__accordion-item-descr">
                        <h4>Зал площадью 60 м2 с театральной рассадкой.</h4>
                        <div class="events-section__accordion-item-descr-advances">
                            <p>
                                70 человек размещаются на удобных креслах. <br/>
                                В зале много света и хорошая акустика.
                            </p>
                            <ul>
                                <li>Wi-Fi</li>
                                <li>Проектор</li>
                                <li>Экран</li>
                                <li>Колонки</li>
                                <li>Микрофоны и переносная трибуна</li>
                            </ul>
                        </div>
                        <div class="events-section__accordion-item-descr-placements">
                            <p>Варианты рассадки:</p>
                            <div class="events-section__accordion-item-descr-placements-list">
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_1.svg" alt=""/>
                                    <h3>Театр</h3>
                                    <p>60 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Класс</h3>
                                    <p>30 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Буква Т</h3>
                                    <p>30 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Буква П</h3>
                                    <p>20 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Буква О</h3>
                                    <p>25 чел.</p>
                                </div>
                            </div>
                        </div>
                        <div class="events-section__accordion-item-descr-price">
                            <h4>ЦЕНА</h4>
                            <button class="btn-secondary events-section__btn-book">Забронировать</button>
                        </div>
                    </div>
                    <div class="events-section__accordion-item-swiper swiper">
                        <div class="events-section__swiper-wrapper swiper-wrapper">
                            <div
                                class="swiper-slide events-section__swiper-image"
                                style="background-image: url(/assets/images/conference-hall/small-hall/1.jpg)"
                            ></div>
                            <div
                                class="swiper-slide events-section__swiper-image"
                                style="background-image: url(/assets/images/conference-hall/small-hall/2.jpg)"
                            ></div>
                            <div
                                class="swiper-slide events-section__swiper-image"
                                style="background-image: url(/assets/images/conference-hall/small-hall/3.jpg)"
                            ></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <div class="events-section__accordion-item">
                <div class="events-section__accordion-header accordion-header">
                    <div></div>
                    <h4>БОЛЬШОЙ КОНФЕРЕНЦ-ЗАЛ</h4>
                    <div class="events-section__toggler toggler">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.4001 1.40002L12.6001 12.6"
                                stroke="#D9D8D4"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M12.6001 1.40002V12.6H1.4001"
                                stroke="#D9D8D4"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                </div>
                <div class="events-section__accordion-content">
                    <div class="events-section__accordion-item-descr">
                        <h4>Зал площадью 60 м2 с театральной рассадкой.</h4>
                        <div class="events-section__accordion-item-descr-advances">
                            <p>
                                70 человек размещаются на удобных креслах. <br/>
                                В зале много света и хорошая акустика.
                            </p>
                            <ul>
                                <li>Wi-Fi</li>
                                <li>Проектор</li>
                                <li>Экран</li>
                                <li>Колонки</li>
                                <li>Микрофоны и переносная трибуна</li>
                            </ul>
                        </div>
                        <div class="events-section__accordion-item-descr-placements">
                            <p>Варианты рассадки:</p>
                            <div class="events-section__accordion-item-descr-placements-list">
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_1.svg" alt=""/>
                                    <h3>Театр</h3>
                                    <p>60 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Класс</h3>
                                    <p>30 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Буква Т</h3>
                                    <p>30 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Буква П</h3>
                                    <p>20 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Буква О</h3>
                                    <p>25 чел.</p>
                                </div>
                            </div>
                        </div>
                        <div class="events-section__accordion-item-descr-price">
                            <h4>ЦЕНА</h4>
                            <button class="btn-secondary events-section__btn-book">Забронировать</button>
                        </div>
                    </div>
                    <div class="events-section__accordion-item-swiper swiper">
                        <div class="events-section__swiper-wrapper swiper-wrapper">
                            <div
                                class="swiper-slide events-section__swiper-image"
                                style="background-image: url(/assets/images/conference-hall/big-hall/1.jpg)"
                            ></div>
                            <div
                                class="swiper-slide events-section__swiper-image"
                                style="background-image: url(/assets/images/conference-hall/big-hall/2.jpg)"
                            ></div>
                            <div
                                class="swiper-slide events-section__swiper-image"
                                style="background-image: url(/assets/images/conference-hall/big-hall/3.jpg)"
                            ></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <div class="events-section__accordion-item">
                <div class="events-section__accordion-header accordion-header">
                    <div></div>
                    <h4>ПЕРЕГОВОРНАЯ КОМНАТА</h4>
                    <div class="events-section__toggler toggler">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.4001 1.40002L12.6001 12.6"
                                stroke="#D9D8D4"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M12.6001 1.40002V12.6H1.4001"
                                stroke="#D9D8D4"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                </div>
                <div class="events-section__accordion-content">
                    <div class="events-section__accordion-item-descr">
                        <h4>Зал площадью 60 м2 с театральной рассадкой.</h4>
                        <div class="events-section__accordion-item-descr-advances">
                            <p>
                                70 человек размещаются на удобных креслах. <br/>
                                В зале много света и хорошая акустика.
                            </p>
                            <ul>
                                <li>Wi-Fi</li>
                                <li>Проектор</li>
                                <li>Экран</li>
                                <li>Колонки</li>
                                <li>Микрофоны и переносная трибуна</li>
                            </ul>
                        </div>
                        <div class="events-section__accordion-item-descr-placements">
                            <p>Варианты рассадки:</p>
                            <div class="events-section__accordion-item-descr-placements-list">
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_1.svg" alt=""/>
                                    <h3>Театр</h3>
                                    <p>60 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Класс</h3>
                                    <p>30 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Буква Т</h3>
                                    <p>30 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Буква П</h3>
                                    <p>20 чел.</p>
                                </div>
                                <div class="events-section__accordion-item-descr-placement">
                                    <img src="/assets/images/placements/placement_2.svg" alt=""/>
                                    <h3>Буква О</h3>
                                    <p>25 чел.</p>
                                </div>
                            </div>
                        </div>
                        <div class="events-section__accordion-item-descr-price">
                            <h4>ЦЕНА</h4>
                            <button class="btn-secondary events-section__btn-book">Забронировать</button>
                        </div>
                    </div>
                    <div class="events-section__accordion-item-swiper swiper">
                        <div class="events-section__swiper-wrapper swiper-wrapper">
                            <div
                                class="swiper-slide events-section__swiper-image"
                                style="background-image: url(/assets/images/conference-hall/negotiation-room/1.jpg)"
                            ></div>
                            <div
                                class="swiper-slide events-section__swiper-image"
                                style="background-image: url(/assets/images/conference-hall/negotiation-room/2.jpg)"
                            ></div>
                            <div
                                class="swiper-slide events-section__swiper-image"
                                style="background-image: url(/assets/images/conference-hall/negotiation-room/3.jpg)"
                            ></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wealness" class="wealness-section">
        <div class="wealness-section__title-wrapper">
            <h2 class="wealness-section__title">WELLNESS-ЦЕНТР</h2>
            <div class="wealness-section__subtitle">Укрепить здоровье и отдохнуть</div>
            <div class="wealness-section__accordion">
                <div class="wealness-section__accordion-item active">
                    <div class="wealness-section__accordion-header accordion-header">
                        <div></div>
                        <h4>БАССЕЙН</h4>
                        <div class="wealness-section__toggler toggler-secondary">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.4001 1.40002L12.6001 12.6"
                                    stroke="#D9D8D4"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M12.6001 1.40002V12.6H1.4001"
                                    stroke="#D9D8D4"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                    </div>
                    <div class="wealness-section__accordion-content">
                        <div class="wealness-section__accordion-content-descr">
                            <h4>Бассейн размером NхN метров.</h4>
                            <ul>
                                <li>Регулярно чистим чашу и обновляем воду;</li>
                                <li>На лежаках рядом с бассейном можно отдохнуть после купания.</li>
                            </ul>
                        </div>
                        <div class="swiper wealness-section__accordion-content-images">
                            <div class="swiper-wrapper">
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/basseyn/1.jpg)"
                                ></div>
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/basseyn/2.jpg)"
                                ></div>
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/basseyn/3.jpg)"
                                ></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <div class="wealness-section__accordion-item">
                    <div class="wealness-section__accordion-header accordion-header">
                        <div></div>
                        <h4>ТРЕНАЖЕРНЫЙ ЗАЛ</h4>
                        <div class="wealness-section__toggler toggler-secondary">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.4001 1.40002L12.6001 12.6"
                                    stroke="#D9D8D4"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M12.6001 1.40002V12.6H1.4001"
                                    stroke="#D9D8D4"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                    </div>
                    <div class="wealness-section__accordion-content">
                        <div class="wealness-section__accordion-content-descr">
                            <h4>Следите за здоровьем и оставайтесь в форме даже в поездке.</h4>
                            <ul>
                                <li>Силовые и кардио-тренажёры;</li>
                                <li>Зона со свободными весами, место для йоги и стретчинга.</li>
                            </ul>
                        </div>
                        <div class="swiper wealness-section__accordion-content-images">
                            <div class="swiper-wrapper">
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/gym/1.jpg)"
                                ></div>
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/gym/2.jpg)"
                                ></div>
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/gym/3.jpg)"
                                ></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <div class="wealness-section__accordion-item">
                    <div class="wealness-section__accordion-header accordion-header">
                        <div></div>
                        <h4>САУНА</h4>
                        <div class="wealness-section__toggler toggler-secondary">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.4001 1.40002L12.6001 12.6"
                                    stroke="#D9D8D4"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M12.6001 1.40002V12.6H1.4001"
                                    stroke="#D9D8D4"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                    </div>
                    <div class="wealness-section__accordion-content">
                        <div class="wealness-section__accordion-content-descr">
                            <h4>Финская сауна укрепляет иммунитет и улучшает общее состояние здоровья.</h4>
                            <ul>
                                <li>Средняя температура 96°С, влажность около 15%;</li>
                                <li>Вмещает до 5 человек.</li>
                            </ul>
                        </div>
                        <div class="swiper wealness-section__accordion-content-images">
                            <div class="swiper-wrapper">
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/sauna/1.jpg)"
                                ></div>
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/sauna/2.jpg)"
                                ></div>
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/sauna/3.jpg)"
                                ></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <div class="wealness-section__accordion-item">
                    <div class="wealness-section__accordion-header accordion-header">
                        <div></div>
                        <h4>СОЛЯРИЙ</h4>
                        <div class="wealness-section__toggler toggler-secondary">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.4001 1.40002L12.6001 12.6"
                                    stroke="#D9D8D4"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M12.6001 1.40002V12.6H1.4001"
                                    stroke="#D9D8D4"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                    </div>
                    <div class="wealness-section__accordion-content">
                        <div class="wealness-section__accordion-content-descr">
                            <h4>Вертикальный солярий с новыми лампами.</h4>
                            <ul>
                                <li>После каждого гостя обрабатываем кабину;</li>
                                <li>Выдаём защитные очки, в продаже есть крема и аксессуары для загара.</li>
                            </ul>
                        </div>
                        <div class="swiper wealness-section__accordion-content-images">
                            <div class="swiper-wrapper">
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/sauna/1.jpg)"
                                ></div>
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/sauna/2.jpg)"
                                ></div>
                                <div
                                    class="wealness-section__accordion-content-image swiper-slide"
                                    style="background-image: url(/assets/images/wellness/sauna/3.jpg)"
                                ></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="entertaiment" class="entertaiment-section">
        <h2 class="entertaiment-section__title">РАЗВЛЕЧЕНИЯ</h2>
        <div class="entertaiment-cont">
            <div class="entertaiments-list">
                <div class="entertaiment">
                    <h4>СПЕТЬ В КАРАОКЕ</h4>
                    <div style="background-image: url(/assets/images/entertaiment/1.jpg)"></div>
                    <p>
                        Караоке-зал с почасовой арендой оснащён экранами, колонками и микрофонами. В каталоге свыше
                        тысячи популярных
                        песен, а благодаря звукоизоляции вы не помешаете другим гостям.
                    </p>
                </div>
                <div class="entertaiment">
                    <h4>ПОИГРАТЬ В БИЛЬЯРД</h4>
                    <div style="background-image: url(/assets/images/entertaiment/2.jpg)"></div>
                    <p>
                        4 стола для профессионалов и любителей игры в русский бильярд. Предоставляем шары, кии и другие
                        аксессуары. Зал
                        подходит для проведения турниров.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="footer__head">
        <img src="/assets/images/logo-footer.svg" alt=""/>
        <h2>ПРЕМЬЕР</h2>
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
                    <a href="#nums">Номера</a>
                    <a href="#gastronomya">Гастрономия</a>
                    <a href="#events">Мероприятия</a>
                    <a href="#wealness">Wellness</a>
                    <a href="#entertaiment">Развлечения</a>
                </div>
            </div>
        </div>

        <div class="policy-cont">
            <a class="policy-cont__link-rules" href="#">Правила проживания</a>
            <a class="policy-cont__link-policy" href="#">Политика конфиденциальности</a>
        </div>
    </div>
</footer>

<div class="modal-tint">
    <div class="modal" id="modal-book">
        <svg class="modal__close" width="20" height="20" viewBox="0 0 20 20" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M3 17L17 3M3 3L17 17" stroke="#ADAAA9" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>

        <div class="modal__logo-wrapper">
            <img class="modal__logo" src="/assets/images/modal-logo.svg" alt=""/>
        </div>
        <h1>Бронирование конференц-зала</h1>
        <form class="modal__form" id="modal-book-form" action="">
            <div class="modal__form-element" data-field-name="name">
                <label for="book-form_name">Ваше имя</label>
                <input id="book-form_name" name="name" type="text"/>
                <div class="modal__form-element-error"></div>
            </div>
            <div class="modal__form-group">
                <div class="modal__form-element" data-field-name="date">
                    <label for="book-form_date">Дата мероприятия</label>
                    <input id="book-form_date" name="date" type="text"/>
                    <div class="modal__form-element-error"></div>
                </div>
                <div class="modal__form-element" data-field-name="guestsNum">
                    <label for="book-form_guests">Число гостей</label>
                    <input id="book-form_guests" name="guestsNum" type="text"/>
                    <div class="modal__form-element-error"></div>
                </div>
            </div>

            <div class="modal__form-element" data-field-name="mobileNumber">
                <label for="book-form_mobile">Номер телефона</label>
                <input id="book-form_mobile" name="mobileNumber" type="text"/>
                <div class="modal__form-element-error"></div>
            </div>

            <div class="modal__form-element" data-field-name="additionalData">
                <label for="book-form_info">Дополнительная информация</label>
                <textarea id="book-form_info" name="additionalData"></textarea>
                <div class="modal__form-element-error"></div>
            </div>

            <div class="modal__form-element" data-field-name="personalData">
                <label class="modal__form-element-checkbox">
                    <input type="checkbox" id="book-form_personal-data" name="personalData" checked/>
                    <div class="checkmark">
                        <img src="/assets/images/check.svg" alt=""/>
                    </div>
                    <div>Согласен на<span class="modal__form-label-personal">обработку персональных данных</span></div>
                </label>
                <div class="modal__form-element-error"></div>
            </div>

            <button class="modal__btn-submit btn-primary" type="submit">Оставить заявку</button>
        </form>
    </div>

    <div class="modal" id="modal-book-event">
        <svg class="modal__close" width="20" height="20" viewBox="0 0 20 20" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M3 17L17 3M3 3L17 17" stroke="#ADAAA9" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>

        <div class="modal__logo-wrapper">
            <img class="modal__logo" src="/assets/images/modal-logo.svg" alt=""/>
        </div>
        <h1>Бронирование конференц-зала</h1>
        <form class="modal__form" id="modal-book-event-form" action="">
            <div class="modal__form-element" data-field-name="name">
                <label for="book-event-form_name">Ваше имя</label>
                <input id="book-event-form_name" name="name" type="text"/>
                <div class="modal__form-element-error"></div>
            </div>
            <div class="modal__form-element select-option" data-field-name="event-type">
                <label>Формат мероприятия</label>
                <div class="select-option-selected">
                    <span class="select-option-selected__text">Корпоратив</span>
                    <span class="select-option-selected__svg"></span>
                </div>
                <div class="select-option-variants">
                    <div class="active">Корпоратив</div>
                    <div>Свадьба</div>
                    <div>День рождения</div>
                    <div>Банкет</div>
                    <div>Деловой вечер</div>
                    <div>Другое</div>
                </div>
                <div class="modal__form-element-error"></div>
            </div>
            <div class="modal__form-group">
                <div class="modal__form-element" data-field-name="date">
                    <label for="book-event-form_date">Дата мероприятия</label>
                    <input id="book-event-form_date" name="date" type="text"/>
                    <div class="modal__form-element-error"></div>
                </div>
                <div class="modal__form-element" data-field-name="guestsNum">
                    <label for="book-event-form_guests">Число гостей</label>
                    <input id="book-event-form_guests" name="guestsNum" type="text"/>
                    <div class="modal__form-element-error"></div>
                </div>
            </div>

            <div class="modal__form-element" data-field-name="mobileNumber">
                <label for="book-event-form_mobile">Номер телефона</label>
                <input id="book-event-form_mobile" name="mobileNumber" type="text"/>
                <div class="modal__form-element-error"></div>
            </div>

            <div class="modal__form-element" data-field-name="additionalData">
                <label for="book-event-form_info">Дополнительная информация</label>
                <textarea id="book-event-form_info" name="additionalData"></textarea>
                <div class="modal__form-element-error"></div>
            </div>

            <div class="modal__form-element" data-field-name="personalData">
                <label class="modal__form-element-checkbox">
                    <input type="checkbox" id="book-event-form_personal-data" name="personalData" checked/>
                    <div class="checkmark">
                        <img src="/assets/images/check.svg" alt=""/>
                    </div>
                    <div>Согласен на <span class="modal__form-label-personal">обработку персональных данных</span></div>
                </label>
                <div class="modal__form-element-error"></div>
            </div>

            <button class="modal__btn-submit btn-primary" type="submit">Оставить заявку</button>
        </form>
    </div>

    <div class="modal" id="modal-book-success">
        <svg class="modal__close" width="20" height="20" viewBox="0 0 20 20" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M3 17L17 3M3 3L17 17" stroke="#ADAAA9" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>

        <div class="modal__logo-wrapper">
            <img class="modal__logo" src="/assets/images/modal-logo.svg" alt=""/>
        </div>

        <div class="modal-book-success__content">
            <h3>Готово!</h3>
            <p>Мы свяжемся с вами в ближайшее время!</p>
            <button class="btn-primary btn-ok">Понятно</button>
        </div>
    </div>
    <div class="modal" id="modal-policy">
        <svg class="modal__close" width="20" height="20" viewBox="0 0 20 20" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M3 17L17 3M3 3L17 17" stroke="#ADAAA9" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>

        <h3>ПОЛИТИКА ЗАЩИТЫ ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ ПОЛЬЗОВАТЕЛЕЙ САЙТА</h3>
        <h4>1. Общие условия</h4>
        <ol>
            <li>
                Настоящая Политика определяет порядок обработки и защиты Индивидуальным предпринимателем Дрынкиным
                Павелом
                Семеновичем (Далее ИП Дрынкин П. С.) информации о физических лицах (далее – Пользователь), которая может
                быть
                получена ИП Дрынкиным П. С при использовании Пользователем услуг/товаров, неисключительной лицензии
                предоставляемых
                в том числе посредством сайта, сервисов, служб, программ используемых ИП Дрынкиным П. С (далее – Сайт,
                Сервисы).
            </li>
            <li>
                Целью настоящей Политики является обеспечение надлежащей защиты персональной информации которую
                Пользователь
                предоставляет о себе самостоятельно при использовании Сайта, Сервисов или в процессе регистрации
                (создании учетной
                записи), для приобретения товаров/услуг, неисключительной лицензии от несанкционированного доступа и
                разглашения.
            </li>
            <li>
                Отношения, связанные со сбором, хранением, распространением и защитой информации предоставляемой
                Пользователем,
                регулируются настоящей Политикой, иными официальными документами ИП Дрынкина П. С и действующим
                законодательством
                Российской Федерации.
            </li>
            <li>
                Регистрируясь на Сайте и используя Сайт и Сервисы Пользователь выражает свое полное согласие с условиями
                настоящей
                Политики.
            </li>
            <li>
                В случае несогласия Пользователя с условиями настоящей Политики использование Сайта и/или каких-либо
                Сервисов
                доступных при использовании Сайта должно быть немедленно прекращено.
            </li>
            <li>
                В случае не согласия Пользователя в получении информации от ИП Дрынкина П. С Пользователь может
                отписаться от
                рассылки:
                <ul>
                    <li>кликнув по ссылке Отписаться внизу письма</li>
                    <li>
                        путем направления уведомления на электронную почту info@hotelpremier.ru или при телефонном
                        обращении в
                        контакт-центр.
                    </li>
                </ul>
            </li>
        </ol>
        <p>
            При поступлении уведомлений на электронную почту info@hotelpremier.ru или при телефонном обращении в
            контакт-центр в
            специальном программном обеспечении для учета действий по соответствующему Пользователю, создается обращение
            по итогам
            полученной от Пользователя информации. Обращение обрабатывается максимум в течение 24 часов. В результате
            информация о
            Пользователе не включается в сегмент рассылок по соответствующему региону.
        </p>
        <h4>2. Цели сбора, обработки и хранения информации предоставляемой пользователями Сайта</h4>
        <ol>
            <li>
                Обработка персональных данных Пользователя осуществляется в соответствии с законодательством Российской
                Федерации.
                ИП Дрынкин П. С. обрабатывает персональные данные Пользователя в целях:
                <ul>
                    <li>идентификации стороны в рамках соглашений и договоров заключаемых с ИП Дрынкиным П. С.;</li>
                    <li>предоставления Пользователю товаров/услуг, неисключительной лицензии, доступа к Сайту,
                        Сервисам;
                    </li>
                    <li>
                        связи с Пользователем, направлении Пользователю транзакционных писем в момент получения заявки
                        регистрации на
                        Сайте или получении оплаты от Пользователя, разово, если Пользователь совершает эти действия,
                        направлении
                        Пользователю уведомлений, запросов;
                    </li>
                    <li>
                        направлении Пользователю сообщений рекламного и/или информационного характера — не более 1
                        сообщения в день;
                    </li>
                    <li>
                        проверки, исследования и анализа таких данных, позволяющих поддерживать и улучшать сервисы и
                        разделы Сайта, а
                        также разрабатывать новые сервисы и разделы Сайта;
                    </li>
                    <li>проведение статистических и иных исследований на основе обезличенных данных.</li>
                </ul>
            </li>
        </ol>
        <h4>3. Условия обработки персональной информации предоставленной Пользователем и ее передачи третьим лицам</h4>
        <ol>
            <li>
                ИП Дрынкин П. С. принимает все необходимые меры для защиты персональных данных Пользователя от
                неправомерного
                доступа, изменения, раскрытия или уничтожения.
            </li>
            <li>
                ИП Дрынкин П. С. предоставляет доступ к персональным данным Пользователя только тем работникам,
                подрядчикам и
                Аффилированным лицам которым эта информация необходима для обеспечения функционирования Сайта, Сервисов
                и оказания
                Услуг, продажи товаров, получении неисключительной лицензии Пользователем.
            </li>
            <li>
                ИП Дрынкин П. С. вправе использовать предоставленную Пользователем информацию, в том числе персональные
                данные, в
                целях обеспечения соблюдения требований действующего законодательства Российской Федерации (в том числе
                в целях
                предупреждения и/или пресечения незаконных и/или противоправных действий Пользователей). Раскрытие
                предоставленной
                Пользователем информации может быть произведено лишь в соответствии с действующим законодательством
                Российской
                Федерации по требованию суда, правоохранительных органов, а равно в иных предусмотренных
                законодательством
                Российской Федерации случаях.
            </li>
            <li>
                ИП Дрынкин П. С. не проверяет достоверность информации предоставляемой Пользователем и исходит из того,
                что
                Пользователь в рамках добросовестности предоставляет достоверную и достаточную информацию, заботится о
                своевременности внесения изменений в ранее предоставленную информацию при появлении такой необходимости,
                включая но
                не ограничиваясь изменение номера телефона
            </li>
        </ol>

        <h4>4. Условия пользования Сайтом, Сервисами</h4>
        <ol>
            <li>
                Пользователь при пользовании Сайтом, подтверждает, что:
                <ul>
                    <li>
                        обладает всеми необходимыми правами, позволяющими ему осуществлять регистрацию (создание учетной
                        записи) и
                        использовать Услуги сайта;
                    </li>
                    <li>
                        указывает достоверную информацию о себе в объемах, необходимых для пользования Услугами Сайта,
                        обязательные для
                        заполнения поля для дальнейшего предоставления Услуг сайта помечены специальным образом, вся
                        иная информация
                        предоставляется пользователем по его собственному усмотрению.
                    </li>
                    <li>
                        осознает, что информация на Сайте, размещаемая Пользователем о себе, может становиться доступной
                        для третьих лиц
                        не оговоренных в настоящей Политике и может быть скопирована и распространена ими;
                    </li>
                    <li>
                        ознакомлен с настоящей Политикой, выражает свое согласие с ней и принимает на себя указанные в
                        ней права и
                        обязанности. Ознакомление с условиями настоящей Политики и проставление галочки под ссылкой на
                        данную Политику
                        является письменным согласием Пользователя на сбор, хранение, обработку и передачу третьим лицам
                        персональных
                        данных предоставляемых Пользователем.
                    </li>
                </ul>
            </li>
            <li>
                ИП Дрынкин П. С. не проверяет достоверность получаемой (собираемой) информации о Пользователях, за
                исключением
                случаев, когда такая проверка необходима в целях исполнения обязательств перед Пользователем.
            </li>
        </ol>

        <h4>5. В рамках настоящей Политики под «персональной информацией Пользователя» понимаются:</h4>
        <ol>
            <li>
                Данные предоставленные Пользователем самостоятельно при пользовании Сайтом, Сервисами включая но, не
                ограничиваясь:
                имя, фамилия, пол, номер мобильного телефона и/или адрес электронной почты, семейное положение, дата
                рождения,
                родной город, родственные связи, домашний адрес, информация об образовании, о роде деятельности.
            </li>
            <li>
                Данные, которые автоматически передаются Сервисам в процессе их использования с помощью установленного
                на устройстве
                Пользователя программного обеспечения, в том числе IP-адрес, информация из cookie, информация о браузере
                пользователя (или иной программе, с помощью которой осуществляется доступ к Сервисам), время доступа,
                адрес
                запрашиваемой страницы.
            </li>
            <li>
                Иная информация о Пользователе, сбор и/или предоставление которой определено в Регулирующих документах
                отдельных
                Сервисов ИП Дрынкина П. С.
            </li>
        </ol>
        <h4>6. Изменение и удаление персональных данных</h4>
        <ol>
            <li>
                Пользователь может в любой момент изменить (обновить, дополнить) предоставленную им персональную
                информацию или её
                часть, а также параметры её конфиденциальности, воспользовавшись функцией редактирования персональных
                данных в
                разделе, либо в персональном разделе соответствующего Сервиса. Пользователь обязан заботится о
                своевременности
                внесения изменений в ранее предоставленную информацию, ее актуализации, в противном случае ИП Дрынкин П.
                С. не несет
                ответственности за неполучение уведомлений, товаров/услуг и т.п.
            </li>
            <li>
                Пользователь также может удалить предоставленную им в рамках определенной учетной записи персональную
                информацию.
                При этом удаление аккаунта может повлечь невозможность использования некоторых Сервисов.
            </li>
        </ol>
        <h4>7. Изменение Политики конфиденциальности. Применимое законодательство</h4>
        <ol>
            <li>
                ИП Дрынкин П. С. имеет право вносить изменения в настоящую Политику конфиденциальности. При внесении
                изменений в
                актуальной редакции указывается дата последнего обновления. Новая редакция Политики вступает в силу с
                момента ее
                размещения, если иное не предусмотрено новой редакцией Политики. Действующая редакция всегда находится
                на странице
                по адресу https://hotelpremier.ru/confidentiality/
            </li>
            <li>
                К настоящей Политике и отношениям между Пользователем и ИП Дрынкиным П. С. возникающим в связи с
                применением
                Политики конфиденциальности, подлежит применению право Российской Федерации.
            </li>
        </ol>
        <h4>8. Обратная связь. Вопросы и предложения</h4>
        <p>
            Все предложения или вопросы по поводу настоящей Политики следует сообщать в Службу поддержки ИП Дрынкина П.
            С. по
            электронной почте info@hotelpremier.ru или по телефону +7 (861) 274-11-55 или путем направления
            корреспонденции по
            адресу: 350059, г. Краснодар, ул. Васнецова,16
        </p>
    </div>

    <div class="modal" id="modal-rules">
        <svg class="modal__close" width="20" height="20" viewBox="0 0 20 20" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M3 17L17 3M3 3L17 17" stroke="#ADAAA9" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>
        <h3>ПОРЯДОК ПРОЖИВАНИЯ В ПРЕМЬЕР ОТЕЛЕ</h3>
        <ol>
            <li>
                Носите карточку гостя с собой. Она является документом, подтверждающим Ваше право на проживание и
                пользование
                услугами отеля, входящими в стоимость.
            </li>
            <li>
                Расчётный час в 12:00. Если Вы хотите заехать раньше или взять дополнительные часы проживания,
                предупредите об этом
                администратора гостиницы заранее и оплатите согласно прейскуранту на дополнительные часы. Дополнительные
                часы
                предоставляются при условии наличия свободного номера той же категории.
            </li>
            <li>
                Если вы хотите сократить срок пребывания в отеле, Вам необходимо сообщить об этом администратору не
                менее чем за 24
                часа. В противном случае проживание рассчитывается по ранее оговоренному сроку
            </li>
            <li>При проживании менее суток плата взимается за полные сутки.</li>
            <li>
                При заселении в номер Вы получаете ключ-карту. При её потере Вам необходимо сразу сообщить
                администратору, чтобы
                предотвратить злоупотребления. Сразу после извещения администратор выдаст Вам новый ключ стоимостью
                согласно
                прейскуранту.
            </li>
            <li>Люди, навещающие гостей, должны предварительно подходить к администратору службы размещения.</li>
            <li>
                Обо всех возможных дополнительных пожеланиях (например, побудка, стирка, глажение и т.д.) и отказах от
                услуг
                сообщайте администратору.
            </li>
            <li>
                Ежедневная уборка – после 14:00. Если Вам удобно другое время – позвоните, пожалуйста, 553 или повесьте
                зелёную
                карту. Замена постельного белья в номерах производится каждый день.
            </li>
            <li>Просим соблюдать тишину и правила этики по отношению к другим гостям отеля.</li>
            <li>
                Если гость пользуется номером или другими помещениями отеля и ресторанного комплекса с нарушениями
                общепринятых
                правил, администрация отеля имеет право отказать в дальнейшем предоставлении услуг.
            </li>
            <li>
                Сообщите о Вашем отъезде заранее, и мы сделаем всё возможное, чтобы не занимать Вашего времени на
                оформление
                отъезда.
            </li>
            <li>Если Вам необходима дополнительная информация или помощь, обращайтесь в службу приёма и размещения.</li>
        </ol>
        <h4>ПРАВИЛА ПОЛЬЗОВАНИЯ НОМЕРАМИ ОТЕЛЯ</h4>
        <ol>
            <li>
                Просим аккуратно пользоваться аппаратурой, оборудованием и инвентарём, находящимся в номерах отеля, а
                также общих
                помещениях, и использовать их только по их прямому назначению. Ущерб, принесённый отелю по Вашей вине,
                будет отнесён
                на Ваш счёт согласно действующему прейскуранту на ремонтно-восстановительные работы.
            </li>
            <li>
                Просим сразу сообщать о замеченных Вами повреждениях и неисправностях, чтобы мы устранили их в
                кратчайшие сроки.
            </li>
            <li>
                Соблюдайте правила противопожарной безопасности, Инструкцию о действиях в случае пожара и экстремальных
                ситуаций,
                Правила пользования электробытовыми приборами, иные правила, действующие на территории Отеля.
            </li>
            <li>
                Курение в любых помещениях и на территории отеля запрещено. Курение разрешено в специально отведенной
                зоне для
                курения (на улице).
            </li>
        </ol>
        <h4>ПОРЯДОК И УСЛОВИЯ БРОНИРОВАНИЯ НОМЕРОВ</h4>
        <ol>
            <li>Бронирование может быть осуществлено в любой форме: с помощью почтовой, телефонной и иной связи.</li>
            <li>
                В ПРЕМЬЕР отеле применяются следующие виды бронирования:
                <ul>
                    <li>
                        Гарантированное бронирование – вид бронирования, при котором гостиница ожидает потребителя до
                        расчетного часа
                        дня, следующего за днем запланированного заезда. В случае отказа от бронирования позднее, чем за
                        24 часа до
                        расчетного часа даты заезда, опоздания или незаезда потребителя с него или с заказчика взимается
                        плата за
                        фактический простой номера, но не более, чем за сутки. При опоздании более чем на сутки
                        гарантированное
                        бронирование аннулируется.
                    </li>
                    <li>
                        Негарантированное бронирование – вид бронирования, при котором гостиница ожидает потребителя до
                        18:00 дня
                        заезда, после чего бронирование аннулируется.
                    </li>
                </ul>
            </li>
            <li>
                Бронирование считается действительным с момента получения заказчиком уведомления, содержащего сведения о
                наименовании исполнителя, данных заказчика, категории заказанного номера и о его цене, об условиях
                бронирования, о
                сроках проживания.
            </li>
            <li>
                Заказчик вправе аннулировать заявку не позднее, чем за 24 часа до даты заезда. В случае несвоевременной
                отмены
                заявки исполнитель вправе взимать оплату, за простой номера, но не более, чем за сутки.
            </li>
        </ol>
    </div>
</div>

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
<script src="//widget.reservationsteps.ru/js/bnovo.js"></script>
<script type="text/javascript">
    (function () {
        Bnovo_Widget.init(function () {
            Bnovo_Widget.open('_bn_widget_', {
                type: "horizontal",
                uid: "917b573b-59b0-4f30-ad3c-324ecd99e0d1",
                lang: "ru",
                currency: "RUB",
                width: "100%",
                width_mobile: "300",
                background: "#ffffff",
                background_mobile: "#ffffff",
                bg_alpha: "65",
                bg_alpha_mobile: "100",
                border_color_mobile: "#C6CAD3",
                padding: "24",
                padding_mobile: "15",
                border_radius: "8",
                button_font_size: "14",
                button_height: "42",
                font_type: "verdana",
                title_color: "#242742",
                title_color_mobile: "#242742",
                title_size: "25",
                title_size_mobile: "22",
                inp_color: "#242742",
                inp_bordhover: "#BBBBBB",
                inp_bordcolor: "#DDDDDD",
                inp_alpha: "50",
                btn_background: "#1875F0",
                btn_background_over: "#1850D2",
                btn_textcolor: "#FFFFFF",
                btn_textover: "#FFFFFF",
                btn_bordcolor: "#1875F0",
                btn_bordhover: "#1850D2",
                min_age: "0",
                max_age: "17",
                adults_default: "1",
                btn_text: "Выбрать",
                dates_preset: "on",
                dfrom_today: "on",
                dfrom_value: "2",
                dto_nextday: "on",
                dto_value: "2",
                cancel_color: "#1875F0",
                url: "https://hotelpremier.ru/booking",
                down_mode: "on",
                switch_mobiles: "on",
                switch_mobiles_width: "500",
            });
        });
    })();
</script>
</body>
</html>

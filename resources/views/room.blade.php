<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>{{ $data['meta_title'] }}</title>
    <meta name="description" content="{{ $data['meta_description'] }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap"
            rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/@vuepic/vue-datepicker@latest"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="/assets/styles/styles.css" rel="stylesheet">
    <link href="/assets/styles/room.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@vuepic/vue-datepicker@latest/dist/main.css">
    <link href="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css" rel="stylesheet"
          type="text/css">
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
                <div class="breadcrumbs__item"><a href="{{ route('rooms') }}">Номера</a></div>
                <div class="breadcrumbs__item">{{ $data['name'] }}</div>
            </div>
            <h1>Номер категории "{{ $data['name'] }}"</h1>
            <div class="room">
                <div class="room__images-mobile">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach($data['images'] as $image)
                                <div class="swiper-slide">
                                    <img src="{{ $image['url'] }}"/>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="room__images">
                    @foreach($data['images'] as $image)
                        @if($loop->last)
                            <div class="room__image">
                                <img src="{{ $image['url'] }}" data-ngsrc="{{ $image['url'] }}"
                                     data-nanogallery2-lightbox/>
                                @if($data['more_count'] > 0)
                                    <div class="room__image-shadow"></div>
                                    <span data-nanogallery2-lightbox>{{ '+' . $data['more_count'] . ' фото' }}</span>
                                @endif
                            </div>
                        @else
                            <div class="room__image @if($loop->first) room__image-main @endif ">
                                <img src="{{ $image['url'] }}" data-ngsrc="{{ $image['url'] }}"
                                     data-nanogallery2-lightbox/>
                            </div>
                        @endif
                    @endforeach

                </div>
                <div class="room__flex">
                    <div class="room__info">
                        <div class="room__options">
                            <div class="room__option room__option--sqr">
                                <span>Площадь</span>
                                {{ $data['square'] }}
                            </div>
                            <div class="room__option room__option--bed">
                                <span>Кровать</span>
                                {{ $data['bed_size'] }}
                            </div>
                            <div class="room__option room__option--qty">
                                <span>Гости</span>
                                {{ $data['capacity'] }}
                            </div>
                        </div>
                        <div class="room__description">
                            {!! $data['description'] !!}
                        </div>
                    </div>
                    <div class="room__form">
                        <h3 class="h3">Номер категории "{{ $data['name'] }}"</h3>
                        <div class="room__form-time">
                            <div class="room__form-time1">Заезд 14:00</div>
                            <div class="room__form-time2">Выезд 12:00</div>
                        </div>
                        <div class="room__form-rows">
                            <div class="room__form-row">
                                <div class="room__form-input">
                                    <vue-date-picker
                                            v-model="startDate"
                                            locale="ru"
                                            auto-apply
                                            :enable-time-picker="false"
                                            :clearable="false"
                                            placeholder="Дата заезда"
                                            no-today
                                            :format="format"
                                            :min-date="new Date()"
                                    />
                                </div>
                            </div>
                            <div class="room__form-row">
                                <div class="room__form-input">
                                    <vue-date-picker
                                            v-model="endDate"
                                            locale="ru"
                                            auto-apply
                                            :enable-time-picker="false"
                                            :clearable="false"
                                            placeholder="Дата заезда"
                                            no-today
                                            :format="format"
                                            :min-date="new Date()"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="room__form-cost">
                            <div class="room__form-cost-line">
                                <span>Стоимость за 1 ночь</span>
                                <span>{{ $data['price'] }} ₽</span>
                            </div>
                            <div class="room__form-cost-line">
                                <span>Скидка <div>{{ $data['discount_percent'] }}</div></span>
                                <span>{{ $data['discount_sum'] }} ₽</span>
                            </div>
                            <div class="room__form-cost-line room__form-cost-line--big">
                                                    <span>
                                                        ИТОГО
                                                        <small>Налоги и сборы включены</small>
                                                    </span>
                                <span> {!! '{{ totalPrice }}' !!} ₽</span>
                            </div>
                        </div>
                        <div class="room__form-button" @click="goToBooking()">Забронировать</div>
                    </div>
                </div>
            </div>
            <h2 class="h2">Услуги и оснащение номера</h2>
            <div class="services">
                @foreach($data['options'] as $option)
                    <div class="services__item">{{ $option['name'] }}</div>
                @endforeach
            </div>
            <h2 class="h2 h2--right">Предлагаем широкий набор дополнительных услуг для вашего комфортного отдыха</h2>
            <div class="benefits">
                <div class="benefits__item">
                    <img src="/images/benefits-1.jpg"/>
                    <div class="benefits__item-title">Room service</div>
                </div>
                <div class="benefits__item"></div>
                <a href="{{ route('pool_gym') }}">
                    <div class="benefits__item">
                        <img src="/images/benefits-2.jpg"/>
                        <div class="benefits__item-title">Бассейн</div>
                    </div>
                </a>
                <a href="{{ route('pool_gym') }}">
                    <div class="benefits__item">
                        <img src="/images/benefits-3.jpg"/>
                        <div class="benefits__item-title">Тренажерный зал</div>
                    </div>
                </a>
                <div class="benefits__item"></div>
                <a href="{{ route('restaurant') }}">
                    <div class="benefits__item">
                        <img src="/images/benefits-4.jpg"/>
                        <div class="benefits__item-title">Ресторанный комплекс</div>
                    </div>
                </a>
                <a href="{{ route('park-krasnodar') }}">
                    <div class="benefits__item">
                        <img src="/images/benefits-5.jpg"/>
                        <div class="benefits__item-title">Парк «Краснодар»</div>
                    </div>
                </a>
                <div class="benefits__item"></div>
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
    const roomPrice = {{ str_replace(' ', '', $data['price']) }};
    const roomDiscount = {{ preg_replace('/[^\d]/', '',$data['discount_percent']) }}
        const
    {
        createApp, ref, onMounted, watch, computed
    }
    = Vue

    const rooms = ref([])
    const diffDays = ref(1)

    const mobileMenu = ref(false)
    const startDate = ref()
    const endDate = ref()
    const toggleMenu = () => {
        mobileMenu.value = !mobileMenu.value
    }
    const format = (date) => {
        const formattedDate = new Date(date).toLocaleDateString("ru-RU", {day: "2-digit", month: "long"})

        return `${formattedDate}`
    }
    const formatDate = (date) => {
        const day = date.getDate()
        const month = date.getMonth() + 1
        const year = date.getFullYear()

        return `${year}-${month < 10 ? '0' + month : month}-${day < 10 ? '0' + day : day}`
    }
    const goToBooking = () => {
        const hotelID = 56
        const headOfficeID = 42
        const hotelName = '%D0%9F%D1%80%D0%B5%D0%BC%D1%8C%D0%B5%D1%80%20%D0%BE%D1%82%D0%B5%D0%BB%D1%8C'
        const start = formatDate(startDate.value)
        const end = formatDate(endDate.value)
        window.location.href = `https://hotelkrasnodar-test.ru/booking?startDate=${start}&endDate=${end}&hotelID=${hotelID}&headOfficeID=${headOfficeID}&hotelName=${hotelName}`
    }

    const totalPrice = computed(() => {
        return ((roomPrice - (roomPrice * (roomDiscount / 100))) * diffDays.value).toLocaleString()
    })

    const getDiffDays = (start, end) => {
        const diffTime = Math.abs(end - start)
        return Math.floor(diffTime / (1000 * 60 * 60 * 24))
    }

    watch(() => startDate.value, () => {
        if (startDate.value && endDate.value) {
            diffDays.value = getDiffDays(startDate.value, endDate.value)
            console.log('diffDays', diffDays.value)
        }
    })
    watch(() => endDate.value, () => {
        if (startDate.value && endDate.value) {
            diffDays.value = getDiffDays(startDate.value, endDate.value)
            console.log('diffDays', diffDays.value)
        }
    })

    createApp({
        setup() {
            onMounted(() => {
                setTimeout(() => {
                    const swiper = new Swiper(".mySwiper", {
                        slidesPerView: 1,
                        spaceBetween: 12,
                        loop: true,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                    })
                }, 1000)
            })
            return {mobileMenu, toggleMenu, rooms, startDate, endDate, format, formatDate, goToBooking, totalPrice}
        },
        components: {VueDatePicker},
    }).mount('#app')
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>

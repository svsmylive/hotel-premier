<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/@vuepic/vue-datepicker@latest"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="/assets/styles/styles.css" rel="stylesheet">
    <link href="/assets/styles/room.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@vuepic/vue-datepicker@latest/dist/main.css">
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
            <h1>Номер категории «Стандарт»</h1>
            <div class="room">
                <div class="room__images">
                    <div class="room__image room__image-main">
                        <img src="/images/room-1.jpg"/>
                    </div>
                    <div class="room__image">
                        <img src="/images/room-2.jpg"/>
                    </div>
                    <div class="room__image">
                        <img src="/images/room-3.jpg"/>
                    </div>
                    <div class="room__image">
                        <img src="/images/room-4.jpg"/>
                    </div>
                    <div class="room__image">
                        <img src="/images/room-5.jpg"/>
                        <span>+20 фото</span>
                    </div>
                </div>
                <div class="room__flex">
                    <div class="room__info">
                        <div class="room__options">
                            <div class="room__option room__option--sqr">
                                <span>Площадь</span>
                                от 20 м2
                            </div>
                            <div class="room__option room__option--bed">
                                <span>Кровать</span>
                                160*200 см
                            </div>
                            <div class="room__option room__option--qty">
                                <span>Гости</span>
                                до 2 человек
                            </div>
                        </div>
                        <div class="room__description">
                            Компактный и уютный номер в современном стиле с комфортным зонированием пространства для
                            работы и отдыха.
                            Современный интерьер в благородных тонах и оптимальный набор удобств — это то самое
                            сочетание,
                            которое поможет вам ощутить домашний уют.
                        </div>
                    </div>
                    <div class="room__form">
                        <h3 class="h3">Номер категории «Стандарт»</h3>
                        <div class="room__form-time">
                            <div class="room__form-time1">Заезд 15:00</div>
                            <div class="room__form-time2">Выезд 11:00</div>
                        </div>
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
                                />
                            </div>
                        </div>
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
                                />
                            </div>
                        </div>
                        <div class="room__form-cost">
                            <div class="room__form-cost-line">
                                <span>Стоимость за 5 ночей</span>
                                <span>18 000 ₽</span>
                            </div>
                            <div class="room__form-cost-line">
                                <span>Скидка <div>-10%</div></span>
                                <span>1 800 ₽</span>
                            </div>
                            <div class="room__form-cost-line room__form-cost-line--big">
								<span>
									ИТОГО
									<small>Налоги и сборы включены</small>
								</span>
                                <span>16 200 ₽</span>
                            </div>
                        </div>
                        <div class="room__form-button">Забронировать</div>
                    </div>
                </div>
            </div>
            <h2 class="h2">Услуги и оснащение номера</h2>
            <div class="services">
                <div class="services__item">Ортопедические матрасы высотой 30 см</div>
                <div class="services__item">Пуховые одеяла класса люкс</div>
                <div class="services__item">Гипоаллергенное постельное белье</div>
                <div class="services__item">Wi Fi бесплатно</div>
                <div class="services__item">Городской телефон для междугородней связи</div>
                <div class="services__item">Персональный компьютер для работы</div>
                <div class="services__item">Smart-TV/3D c интернетом</div>
                <div class="services__item">Бутилированная питьевая вода</div>
                <div class="services__item">Кулеры с горячей и холодной водой</div>
                <div class="services__item">Кондиционер</div>
                <div class="services__item">Зубные принадлежности</div>
                <div class="services__item">Халаты, тапочки, полотенца</div>
                <div class="services__item">Гель для душа, мыло</div>
                <div class="services__item">Бритвенный станок</div>
                <div class="services__item">Фен</div>
            </div>
            <h2 class="h2 h2--right">Предлагаем широкий набор дополнительных услуг для вашего комфортного отдыха</h2>
            <div class="benefits">
                <div class="benefits__item">
                    <img src="/images/benefits-1.jpg"/>
                    <div class="benefits__item-title">Room service</div>
                </div>
                <div class="benefits__item"></div>
                <div class="benefits__item">
                    <img src="/images/benefits-2.jpg"/>
                    <div class="benefits__item-title">Бассейн</div>
                </div>
                <div class="benefits__item">
                    <img src="/images/benefits-3.jpg"/>
                    <div class="benefits__item-title">Тренажерный зал</div>
                </div>
                <div class="benefits__item"></div>
                <div class="benefits__item">
                    <img src="/images/benefits-4.jpg"/>
                    <div class="benefits__item-title">Ресторанный комплекс</div>
                </div>
                <div class="benefits__item">
                    <img src="/images/benefits-5.jpg"/>
                    <div class="benefits__item-title">Парк «Краснодар»</div>
                </div>
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
    const {createApp, ref, onMounted} = Vue

    const rooms = ref([])

    const mobileMenu = ref(false)
    const startDate = ref()
    const endDate = ref()
    const toggleMenu = () => {
        mobileMenu.value = !mobileMenu.value
    }
    const fetchRooms = async () => {
        try {
            const response = await fetch('https://hotelpremier-test.ru/api/rooms')
            if (!response.ok) {
                throw new Error(`Response status: ${response.status}`)
            }

            rooms.value = await response.json()
        } catch (error) {
            console.error(error.message)
        }
    }
    const format = (date) => {
        const day = date.getDate()
        const month = new Date(date).toLocaleString("ru-RU", {month: "long"})
        const year = date.getFullYear()

        return `${day} ${month} ${year}`
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
        window.location.href = `https://hotelpremier-test.ru/booking?startDate=${start}&endDate=${end}&hotelID=${hotelID}&headOfficeID=${headOfficeID}&hotelName=${hotelName}`
    }

    createApp({
        setup() {
            onMounted(() => {
                fetchRooms()
            })

            return {mobileMenu, toggleMenu, rooms, startDate, endDate, format, formatDate, goToBooking}
        },
        components: {VueDatePicker},
    }).mount('#app')
</script>
</body>
</html>
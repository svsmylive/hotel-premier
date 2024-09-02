<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/@vuepic/vue-datepicker@latest"></script>

    <link href="/assets/styles/styles.css" rel="stylesheet">
    <link href="/assets/styles/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@vuepic/vue-datepicker@latest/dist/main.css">
</head>
<body id="app">
<header class="header desktop">
    <div class="header__logo logo">
        <img src="/images/logo.png" />
    </div>
    <div class="header__contacts">
        <div class="contacts__tel">8 (861) 274-11-55</div>
        <div class="contacts__address">г. Краснодар, ул. Васнецова, 14</div>
    </div>
    <div class="header__burger" @click="toggleMenu"></div>
</header>
<menu class="menu desktop">
    <div class="menu__backdrop"></div>
    <div class="menu__items">
        <div class="menu__item"><a href="/rooms.html">Номера</a></div>
        <div class="menu__item"><a href="/conference_rooms.html">Конференц-залы</a></div>
        <div class="menu__item"><a href="/pool_gym.html">Бассейн и спортзал</a></div>
        <div class="menu__item"><a href="/restaurant.html">Завтрак и рестораны</a></div>
        <div class="menu__item"><a href="/events.html">События</a></div>
        <div class="menu__item"><a href="/about.html">О нас</a></div>
        <div class="menu__item"><a href="/park.html">Парк Краснодар</a></div>
    </div>
</menu>
<menu class="mobile" v-if="mobileMenu">
    <div class="menu__close" @click="toggleMenu"></div>
    <div class="menu__logo">
        <img src="/images/logo.png" />
    </div>
    <div class="menu__contacts">
        <div class="contacts__tel">8 (861) 274-11-55</div>
        <div class="contacts__address">г. Краснодар, ул. Васнецова, 14</div>
    </div>
    <div class="menu__items">
        <div class="menu__item"><a href="/rooms.html">Номера</a></div>
        <div class="menu__item"><a href="/conference_rooms.html">Конференц-залы</a></div>
        <div class="menu__item"><a href="/pool_gym.html">Бассейн и спортзал</a></div>
        <div class="menu__item"><a href="/restaurant.html">Завтрак и рестораны</a></div>
        <div class="menu__item"><a href="/events.html">События</a></div>
        <div class="menu__item"><a href="/about.html">О нас</a></div>
        <div class="menu__item"><a href="/park.html">Парк Краснодар</a></div>
    </div>
</menu>
<div style="position: absolute; left: 0; top: 0; width: 0; bottom: 0; background: transparent; clip-path: path('M156 68.5C167.046 68.5 176 59.5457 176 48.5V20C176 8.9543 184.954 0 196 0H1852C1863.05 0 1872 8.95431 1872 20V892C1872 903.046 1863.05 912 1852 912H20C8.95433 912 0 903.046 0 892V88.5C0 77.4543 8.9543 68.5 20 68.5H156Z')">
    <video autoplay muted loop class="main-page-video">
        <source src="/videos/main_page.mp4" type="video/mp4">
    </video>
</div>
<div class="widget">
    <div class="widget__datepickers">
        <div class="widget__datepicker">
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
        <div class="widget__datepicker">
            <vue-date-picker
                v-model="endDate"
                locale="ru"
                auto-apply
                :enable-time-picker="false"
                :clearable="false"
                placeholder="Дата выезда"
                no-today
                :format="format"
            />
        </div>
    </div>
    <div class="widget__button" @click="goToBooking()">Найти номер</div>
</div>
<script>
    const { createApp, ref, onMounted } = Vue

    const startDate = ref()
    const endDate = ref()
    const mobileMenu = ref(false)

    const toggleMenu = () => {
        mobileMenu.value = !mobileMenu.value
    }
    const format = (date) => {
        const day = date.getDate()
        const month = new Date(date).toLocaleString("ru-RU", { month: "long" })
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
        const hotelName= '%D0%9F%D1%80%D0%B5%D0%BC%D1%8C%D0%B5%D1%80%20%D0%BE%D1%82%D0%B5%D0%BB%D1%8C'
        const start = formatDate(startDate.value)
        const end = formatDate(endDate.value)
        window.location.href = `https://hotelpremier-test.ru/booking?startDate=${start}&endDate=${end}&hotelID=${hotelID}&headOfficeID=${headOfficeID}&hotelName=${hotelName}`
    }

    createApp({
        setup() {
            return { mobileMenu, toggleMenu, startDate, endDate, format, goToBooking }
        },
        components: { VueDatePicker },
    }).mount('#app')
</script>
</body>
</html>

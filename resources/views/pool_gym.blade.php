<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бассейн и тренажерный зал в отеле «Премьер» в центре Краснодара</title>
    <meta name="description"
          content="Бассейн и тренажерный зал в отеле «Премьер» в центре Краснодара. Отель 4* в центре Краснодара оборудован тренажерным залом, сауной, бассейном 20 м2.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link href="/assets/styles/styles.css" rel="stylesheet">
    <link href="/assets/styles/pool_gym.css" rel="stylesheet">
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

    <div class="pg">
        <div class="pg__sliders">
            <div class="pg__slider" v-if="tab === 'pool'">
                <div class="pg__slide" style="background-image: url(/images/pool.png)"></div>
            </div>
            <div class="pg__slider" v-if="tab === 'gym'">
                <div class="pg__slide" style="background-image: url(/images/gym.png)"></div>
            </div>
        </div>
        <div class="pg__content">
            <div class="pg__subtitle">Включено в проживание</div>
            <div class="pg__titles">
					<span
                        class="pg__title"
                        :class="{'pg__title--active': tab === 'pool'}"
                        @click="switchTo('pool')"
                    >Бассейн</span>
                <span
                    class="pg__title"
                    :class="{'pg__title--active': tab === 'gym'}"
                    @click="switchTo('gym')"
                >Спортзал</span>
            </div>
        </div>
    </div>
</div>
<script>
    const {createApp, ref, onMounted} = Vue

    const tab = ref('pool')

    const mobileMenu = ref(false)
    const toggleMenu = () => {
        mobileMenu.value = !mobileMenu.value
    }
    const switchTo = (tabName) => {
        tab.value = tabName
    }

    createApp({
        setup() {
            return {mobileMenu, toggleMenu, tab, switchTo}
        }
    }).mount('#app')
</script>
</body>
</html>

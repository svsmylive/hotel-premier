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
    <div class="pg" id="app">
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

    const switchTo = (tabName) => {
        tab.value = tabName
    }

    createApp({
        setup() {
            return {tab, switchTo}
        }
    }).mount('#app')
</script>
</body>
</html>

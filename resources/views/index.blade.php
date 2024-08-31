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

	<link href="/assets/styles/styles.css" rel="stylesheet">
	<link href="/assets/styles/index.css" rel="stylesheet">
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
	<div class="widget tl-widget-form"></div>
	<script>
		const { createApp, ref, onMounted } = Vue

		const mobileMenu = ref(false)
		const toggleMenu = () => {
			mobileMenu.value = !mobileMenu.value
		}

		createApp({
			setup() {
				return { mobileMenu, toggleMenu }
			}
		}).mount('#app')

		;(function (d, w, e) {
			w[e] = w[e] || function(){
				try {
					w.ecviBookingForm = new EcviBookingForm({
						protocol: 'http',
						showOtherHotels: true,
						checkHotelByDefault: true,
						headOfficeID: '42',
						hotelID: '56',
						bookingPath: 'http://vladim0u.beget.tech/booking',
						token: '98c95917-31ea-4306-b95d-7d450d84bdb5',
						width: '',
						height: 116,
						cssPath: 'http://vladim0u.beget.tech/assets/styles/custom.css',
						rulesPath: 'http://vladim0u.beget.tech/rules.html',
						policyPath: 'http://vladim0u.beget.tech/confidential.html',
						container: 'tl-widget-form',
						target: 'widget',
						lang: sessionStorage.getItem('ecviLang') || document.documentElement.lang.toUpperCase() || 'RU',
						hiddenElems: 'nutrition,time'
					});
				} catch(e) { console.warn( 'Something goes wrong'); }
			}
			var n = d.getElementsByTagName('script')[0],
				s = d.createElement('script'),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = 'text/javascript';
			s.async = true;
			s.src = 'http://cm.web-booking.ru/assets/formreservation/js/iframeCreate/widget.create.js';
			if (w.opera == '[object Opera]') {
				d.addEventListener('DOMContentLoaded', f, false);
			} else { f(); }
		})(document, window, 'ecvi_booking_callback');
	</script>
</body>
</html>

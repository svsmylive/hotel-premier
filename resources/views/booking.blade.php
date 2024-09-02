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

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link href="/assets/styles/styles.css" rel="stylesheet">
	<link href="/assets/styles/rooms.css" rel="stylesheet">
</head>
<body id="app">
<div class="wrapper">
	<header class="header header--shadow">
		<div class="content">
			<div class="header__logo logo">
				<img src="/images/logo.png" />
			</div>
			<menu class="header__menu">
				<div class="menu__item">
					<a href="/rooms.html">Номера</a>
				</div>
				<div class="menu__item">
					<a href="/conference_rooms.html">Конференц-залы</a>
				</div>
				<div class="menu__item">
					<a href="/pool_gym.html">Бассейн и спортзал</a>
				</div>
				<div class="menu__item menu__item--more">
					Еще
					<div class="menu__item-sub">
						<div class="menu__item-sub-item"><a href="">Новости</a></div>
						<div class="menu__item-sub-item"><a href="">О нас</a></div>
						<div class="menu__item-sub-item"><a href="">Парк Краснодар</a></div>
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

	<main class="main">
		<div class="cover-image">
			<img src="/images/rooms-cover.png" />
		</div>
		<div class="content">
			<div id="tl-booking-form"></div>
		</div>
	</main>

	<div class="before-footer"></div>
	<footer class="footer">
		<div class="content">
			<div class="footer__col">
				<div class="footer__logo logo">
					<img src="/images/logo.png" />
				</div>
				<div class="footer__address">
					г. Краснодар,<br />ул. Васнецова, 14
				</div>
			</div>
			<div class="footer__col">
				<menu class="footer__menu">
					<div class="menu__item">
						<a href="/rooms.html">Номера</a>
					</div>
					<div class="menu__item">
						<a href="/conference_rooms.html">Конференц-залы</a>
					</div>
					<div class="menu__item">
						<a href="/pool_gym.html">Бассейн и спортзал</a>
					</div>
					<div class="menu__item">
						<a href="/restaurant.html">Завтрак и рестораны</a>
					</div>
				</menu>
			</div>
			<div class="footer__col">
				<menu class="footer__menu">
					<div class="menu__item">
						<a href="/about.html">О нас</a>
					</div>
					<div class="menu__item">
						<a href="/park.html">Парк "Краснодар"</a>
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
						token: '03e87066-9360-44f6-957a-a680b39c70b8',
						width: '',
						height: 420,
						cssPath: 'http://vladim0u.beget.tech/custom.css',
						rulesPath: 'http://vladim0u.beget.tech/rules.html',
						policyPath: 'http://vladim0u.beget.tech/confidential.html',
						container: 'tl-booking-form',
						target: 'booking',
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
</div>
</body>
</html>

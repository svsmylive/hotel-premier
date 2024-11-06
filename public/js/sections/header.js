const btnBurgerMenu = document.getElementsByClassName('menu-icon')[0];
const burgerMenuBlock = document.getElementsByClassName('menu-block')[0];
const burgerMenuLink = document.querySelectorAll('.menu-block .links-cont__link');

const toggleBurgerMenu = () => {
  btnBurgerMenu.classList.toggle('active');
  burgerMenuBlock.classList.toggle('collapsed');
};
btnBurgerMenu.addEventListener('click', toggleBurgerMenu);
burgerMenuLink.forEach(item => item.addEventListener('click', toggleBurgerMenu));

const logo = document.getElementsByClassName('logo-cont')[0];
logo.addEventListener('click', e => {
  document.body.scrollTop = 0;
});

import { isMobile } from '../utils.js';

const carouselSlides = document.querySelectorAll('.nums-carousel__item');
const corouselImagesWrapper = document.querySelector('.nums-carousel__items-wrapper');
// const carouselActiveClasses = ['active', 'active-left', 'active-right'];

const SlideState = {
  left: 'left',
  leftGone: 'left-gone',
  active: 'active',
  right: 'right',
  rightGone: 'right-gone',
};

const slideRight = nextSlide => {
  const lastSlideState = carouselSlides[carouselSlides.length - 1].dataset.state;
  for (let i = carouselSlides.length - 1; i > 0; i--) {
    const curSlide = carouselSlides[i];
    const nextSlide = carouselSlides[i - 1];
    curSlide.dataset.state = nextSlide.dataset.state;
  }
  carouselSlides[0].dataset.state = lastSlideState;
};

const slideLeft = nextSlide => {
  const firstSlideState = carouselSlides[0].dataset.state;
  for (let i = 0; i < carouselSlides.length - 1; i++) {
    const curSlide = carouselSlides[i];
    const nextSlide = carouselSlides[i + 1];
    curSlide.dataset.state = nextSlide.dataset.state;
  }
  carouselSlides[carouselSlides.length - 1].dataset.state = firstSlideState;
};

const initSlider = () => {
  if (carouselSlides.length < 5) {
    return;
  }
  carouselSlides[0].dataset.state = SlideState.active;
  carouselSlides[1].dataset.state = SlideState.right;
  carouselSlides[2].dataset.state = SlideState.rightGone;
  for (let i = 3; i < carouselSlides.length; i++) {
    carouselSlides[i].dataset.state = SlideState.rightGone;
  }
  carouselSlides[carouselSlides.length - 2].dataset.state = SlideState.leftGone;
  carouselSlides[carouselSlides.length - 1].dataset.state = SlideState.left;
};

initSlider();

carouselSlides.forEach(slide => {
  slide.querySelector('.nums-carousel__item-image-wrapper').addEventListener('click', () => {
    if (isMobile()) return;
    if (slide.dataset.state === SlideState.left) {
      slideLeft(slide);
    } else if (slide.dataset.state === SlideState.right) {
      slideRight(slide);
    }
  });
});

carouselSlides.forEach(item => {
  const carouselSliderMinis = item.querySelectorAll('.nums-carousel__item-mini-item');
  carouselSliderMinis.forEach(miniImg => {
    miniImg.addEventListener('click', () => {
      if (!miniImg.classList.contains('active')) {
        const carouselSliderMinisInImage = item.querySelectorAll('.nums-carousel__item-mini-item');
        carouselSliderMinisInImage.forEach(mini => mini.classList.remove('active'));
        miniImg.classList.add('active');

        const prevActiveImage = item.querySelector('.nums-carousel__item-image-variant.active');
        const variant = miniImg.dataset.var;
        const imageToShow = item.querySelector(`.nums-carousel__item-image-variant[data-var="${variant}"]`);
        prevActiveImage.classList.remove('active');
        imageToShow.classList.add('active');
      }
    });
  });
});

// ajust size of wrapper dynamically

const defineCarouselWrapperHeight = () => {
  corouselImagesWrapper.style.height =
    Math.max(
      ...Array.from(carouselSlides).map(
        slide =>
          slide.querySelector('.nums-carousel__item-image-wrapper').clientHeight +
          slide.querySelector('.nums-carousel__item-about').clientHeight +
          parseInt(window.getComputedStyle(slide.querySelector('.nums-carousel__item-about')).marginTop)
      )
    ) + 'px';
};

defineCarouselWrapperHeight();

// mobile swiper

let swiper = null;

const initSwiper = () => {
  swiper = new Swiper('.nums-carousel', {
    direction: 'horizontal',
    slidesPerView: 'auto',
    followFinger: true,
    loop: false,
    pagination: {
      el: '.nums-carousel__dots-cont',
      type: 'bullets',
    },
  });
};

if (isMobile()) {
  initSwiper();
}

window.addEventListener('resize', () => {
  setTimeout(defineCarouselWrapperHeight, 100);
  setTimeout(defineCarouselWrapperHeight, 300);

  if (isMobile()) {
    if (!swiper) {
      initSwiper();
    }
  } else {
    if (swiper) {
      // console.log('destroy');
      swiper.destroy();

      // corouselImagesWrapper.style.removeProperty('transform');
      swiper = null;
    }
  }
});

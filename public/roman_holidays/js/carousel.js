const isMobile = () => window.innerWidth <= 1200;

const SlideState = {
  left: 'left',
  leftGone: 'left-gone',
  active: 'active',
  right: 'right',
  rightGone: 'right-gone',
};

function handleCarousel(carousel) {
  let carouselSlides = carousel.querySelectorAll('.nums-carousel__item');

  const initSlider = () => {
    const MinSlidesCount = 5;
    if (carouselSlides.length < MinSlidesCount) {
      const extraSlidesCount = MinSlidesCount - carouselSlides.length;
      for (let i = 0; i < extraSlidesCount; i++) {
        const slide = carouselSlides.item(i % carouselSlides.length).cloneNode(true);
        carousel.querySelector('.nums-carousel__items-wrapper').appendChild(slide);
        carouselSlides = carousel.querySelectorAll('.nums-carousel__item');
      }
    }
    const fakeLastItem = carousel.querySelector('.nums-carousel-fake-last-item');
    const container = fakeLastItem.parentNode;
    container.appendChild(fakeLastItem);

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

  let swiper = null;

  const initSwiper = () => {
    swiper = new Swiper(carousel, {
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
    if (isMobile()) {
      if (!swiper) {
        initSwiper();
      }
    } else {
      if (swiper) {
        swiper.destroy();
        swiper = null;
      }
    }
  });
}

// carousel change type

const carouselTypesItems = document.querySelectorAll('.nums-section__hat-list > li');
carouselTypesItems.forEach(item => {
  item.addEventListener('click', () => {
    carouselTypesItems.forEach(item => {
      if (item.classList.contains('active')) {
        const linkedCarousel = item.dataset.carouselId;
        document.getElementById(linkedCarousel)?.classList.remove('active');
        item.classList.remove('active');
        document
          .querySelector(`.nums-section__hat-description-item[data-carousel-id="${linkedCarousel}"]`)
          ?.classList.remove('active');
      }
    });
    item.classList.add('active');

    const linkedCarousel = item.dataset.carouselId;
    document.getElementById(linkedCarousel)?.classList.add('active');
    document
      .querySelector(`.nums-section__hat-description-item[data-carousel-id="${linkedCarousel}"]`)
      ?.classList.add('active');
  });
});

function main() {
  document.querySelectorAll('.nums-carousel').forEach((carousel, index) => {
    // if (index === 0) {
    //   carousel.style.position = 'relative';
    // }
    handleCarousel(carousel);
  });
}

main();

// swiper

const wealnessSwiper = new Swiper('.wealness-section__accordion-content-images', {
  direction: 'horizontal',
  slidesPerView: 'auto',
  followFinger: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
  },
});

// accordion

const wealnessAccordionItems = document.querySelectorAll('.wealness-section__accordion-item');

const updateWealnessAccordionItems = () => {
  wealnessAccordionItems.forEach(item => {
    const content = item.querySelector('.wealness-section__accordion-content');
    if (!item.classList.contains('active')) {
      content.style.maxHeight = '0px';
    } else {
      content.style.maxHeight = content.scrollHeight + 'px'; //+ 20 + 'px';
    }
  });
};

updateWealnessAccordionItems();

window.addEventListener('resize', updateWealnessAccordionItems);

wealnessAccordionItems.forEach((item, idx) => {
  const header = item.querySelector('.accordion-header');
  header.addEventListener('click', () => {
    // wealnessAccordionItems.forEach(_item => item !== _item && _item.classList.remove('active'));
    item.classList.toggle('active');

    // if (item.classList.contains('active')) {
    //   const top = wealnessAccordionItems.item(0).offsetTop;
    //   const headerHeight = document.querySelector('.header').clientHeight;
    //   let itemsHeight = 0;

    //   for (let i = 0; i < idx; i++) {
    //     itemsHeight += wealnessAccordionItems.item(i).querySelector('.accordion-header').clientHeight;
    //   }

    //   document.body.scrollTo({ top: top + itemsHeight - headerHeight });
    // }

    updateWealnessAccordionItems();
  });
});

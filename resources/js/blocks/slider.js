import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const initSliderSwiper = (scope = document) => {
  const swiperElements = scope.querySelectorAll('.slider-swiper:not(.swiper-initialized)');
  if (!swiperElements.length) return;

  swiperElements.forEach((swiperEl) => {
    new Swiper(swiperEl, {
      modules: [Navigation, Pagination],
      slidesPerView: 1.3,
      spaceBetween: 16,
      loop: false,
      pagination: { el: swiperEl.querySelector('.swiper-pagination'), clickable: true },
      navigation: { nextEl: swiperEl.querySelector('.__next'), prevEl: swiperEl.querySelector('.__prev') },
      breakpoints: {
        640: { 
          slidesPerView: 2.2, 
          spaceBetween: 24 
        },
        1024: { 
          slidesPerView: 3.5, 
          spaceBetween: 32 
        },
      },
      on: {},
    });
  });
};

initSliderSwiper();

if (window.acf) {
  window.acf.addAction('render_block', (el) => {
    const node = el?.[0] ?? el;
    if (node) {
      initSliderSwiper(node);
    }
  });
}

export default initSliderSwiper;
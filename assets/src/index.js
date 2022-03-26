import './style/main.scss';
import 'normalize.css';
import '@splidejs/splide/dist/css/splide.min.css';
import '@splidejs/splide/dist/css/themes/splide-default.min.css';
import '@splidejs/splide/dist/js/splide.min.js';
import Splide from '@splidejs/splide';

setTimeout(() => {
  const splideElement = document.querySelector('.splide');

  if (splideElement) {
    new Splide('.splide', {
      autoplay: true,
      interval: 10000,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: true,
      rewind: true,
      pagination: true
    }).mount();
  
    new Splide('.splide-questions', {
      autoplay: true,
      interval: 10000,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: true,
      rewind: true,
      pagination: true
    }).mount();
  }
});
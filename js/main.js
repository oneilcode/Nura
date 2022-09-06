const mySwiper = new Swiper('.swiper', {
   // Optional parameters
   loop: true,

   // Navigation arrows
   navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
   },

   // And if we need scrollbar
   scrollbar: {
      el: '.swiper-scrollbar',
   },
})

const swiperPrev = document.getElementById('swiperPrev')
const swiperNext = document.getElementById('swiperNext')

swiperPrev.addEventListener('click', () => {
   mySwiper.slidePrev();
})
swiperNext.addEventListener('click', () => {
   mySwiper.slideNext();
})
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

// menu-mobile

const menuBtn = document.querySelector('.menu__mobile');
const menuList = document.querySelector('.menu__nav-bottom');



menuBtn.addEventListener('click', function () {
   menuList.classList.toggle('show');
   console.log(menuList);
});
let slidesPerView = 3

if (window.screen.width<1250){
  slidesPerView = 2
}

if (window.screen.width<900){
  slidesPerView = 1.5
}

if (window.screen.width<600){
  slidesPerView = 1
}

let swiperTop = new Swiper(".swiper-top", {
  slidesPerView: slidesPerView,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

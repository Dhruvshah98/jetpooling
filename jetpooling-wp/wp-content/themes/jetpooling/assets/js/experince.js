var swiperServices = new Swiper(".services-swiper", {
  speed: 800,
  spaceBetween: 30,
  slidesPerView: 1,
  grabCursor: true,
  navigation: {
    nextEl: ".s-nav-next",
    prevEl: ".s-nav-prev",
  },
  pagination: {
    el: ".pagination-services",
    type: "custom",
    renderCustom: function (swiper, current, total) {
      return "0" + current + "<span></span>" + "0" + total;
    },
  },
});
var swiperServicesTxt = new Swiper(".swiper-ser-txt", {
  speed: 800,
  spaceBetween: 30,
  slidesPerView: 1,
  grabCursor: true,
});

swiperServices.controller.control = swiperServicesTxt;
swiperServicesTxt.controller.control = swiperServices;

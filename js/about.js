// Team Swiper

var swiperexp = new Swiper(".exp-swiper", {
  speed: 800,
  spaceBetween: 30,
  slidesPerView: 1,
  grabCursor: true,
  navigation: {
    nextEl: ".exp-nav-next",
    prevEl: ".exp-nav-prev",
  },
  pagination: {
    el: ".pagination-exp",
    type: "custom",
    renderCustom: function (swiper, current, total) {
      return "0" + current + "<span></span>" + "0" + total;
    },
  },
});
var swiperexpTxt = new Swiper(".swiper-exp-txt", {
  speed: 800,
  spaceBetween: 30,
  slidesPerView: 1,
  grabCursor: true,
});

swiperexp.controller.control = swiperexpTxt;
swiperexpTxt.controller.control = swiperexp;

// Team Swiper Ends

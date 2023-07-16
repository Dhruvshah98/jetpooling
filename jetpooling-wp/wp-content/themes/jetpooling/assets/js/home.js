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

var swiperfleet1 = new Swiper(".swiper-fleet-1", {
  speed: 800,
  spaceBetween: 30,
  slidesPerView: 1,
  grabCursor: true,
  navigation: {
    nextEl: ".fleet-nav-next-1",
    prevEl: ".fleet-nav-prev-1",
  },
  pagination: {
    el: ".pagination-fleet-1",
    type: "custom",
    renderCustom: function (swiper, current, total) {
      return "0" + current + "<span></span>" + "0" + total;
    },
  },
});

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

var swipertesti = new Swiper(".testi-swiper", {
  speed: 800,
  spaceBetween: 30,
  slidesPerView: 1,
  grabCursor: true,
  navigation: {
    nextEl: ".testi-nav-next",
    prevEl: ".testi-nav-prev",
  },
  pagination: {
    el: ".pagination-testi",
    type: "custom",
    renderCustom: function (swiper, current, total) {
      return "0" + current + "<span></span>" + "0" + total;
    },
  },
});

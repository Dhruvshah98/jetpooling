if ($(window).outerWidth() > 1200) {
  var ww = $(window).outerWidth();
  var wh = $(window).outerHeight();
  console.log(ww);

  $(".video-embed").width(ww + 100)
  $(".video-embed").height(wh + 200)
}
else {
  var ww = $(window).outerWidth();
  $(".video-embed").width(ww + 100);
  $(".home-banner").height(ww / 1.857);
  $(".video-embed").height((ww / 1.857) + 120);
}


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
// var swiperServicesTxt = new Swiper(".swiper-ser-txt", {
//   speed: 800,
//   spaceBetween: 30,
//   slidesPerView: 1,
//   grabCursor: true,
// });

// swiperServices.controller.control = swiperServicesTxt;
// swiperServicesTxt.controller.control = swiperServices;

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
var swiperBroch = new Swiper(".swiper-broch", {
  speed: 800,
  spaceBetween: 30,
  slidesPerView: 1,
  grabCursor: true,
  allowTouchMove: false
});
swiperfleet1.controller.control = swiperBroch
swiperBroch.controller.control = swiperfleet1


var swiperexp1 = new Swiper(".exp-swiper-1", {
  speed: 800,
  spaceBetween: 30,
  slidesPerView: 1,
  grabCursor: true,

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
  navigation: {
    nextEl: ".exp-nav-next",
    prevEl: ".exp-nav-prev",
  },
});

swiperexp1.controller.control = swiperexpTxt;
swiperexpTxt.controller.control = swiperexp1;

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


if (screen.width < 770) {
  $(".fleet-pointers").hide();
  $(".fleet-pointers:first").show();

  /* if in tab mode */
  $(".tabs li").click(function () {
    $(".fleet-pointers").hide();
    var activeTab = $(this).attr("rel");
    $("#" + activeTab).fadeIn();

    $(".tabs li").addClass("line");
    $(this).removeClass("line");
  });
} else {
  $(".fleet-pointers").hide();
  $(".fleet-pointers:first").show();

  /* if in tab mode */
  $(".tabs li").click(function () {
    $(".fleet-pointers").hide();
    var activeTab = $(this).attr("rel");
    $("#" + activeTab).fadeIn();

    $(".tabs li").addClass("line");
    $(this).removeClass("line");
  });
}








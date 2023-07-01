var swipergallery = new Swiper(".swiper-gallery", {
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

// BOOK TICKET
var minVal = 1,
  maxVal = 20; // Set Max and Min values
// Increase product quantity on cart page
$(".increaseQty").on("click", function () {
  var $parentElm = $(this).parents(".qtySelector");
  var value = $parentElm.find(".qtyValue").val();
  if (value < maxVal) {
    value++;
  }
  $parentElm.find(".qtyValue").val(value);
});
// Decrease product quantity on cart page
$(".decreaseQty").on("click", function () {
  var $parentElm = $(this).parents(".qtySelector");
  var value = $parentElm.find(".qtyValue").val();
  if (value > 1) {
    value--;
  }
  $parentElm.find(".qtyValue").val(value);
});
// BOOK TICKET Ends

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

/*Counter Script*/
var a = 0;
$(window).scroll(function () {
  var oTop = $(".counter-sec").offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $(".counter-num").each(function () {
      var $this = $(this),
        countTo = $this.attr("data-count");
      $({
        countNum: $this.text(),
      }).animate(
        {
          countNum: countTo,
        },
        {
          duration: 1200,
          easing: "swing",
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
          },
        }
      );
    });
    a = 1;
  }
});
/*Counter Script ends*/

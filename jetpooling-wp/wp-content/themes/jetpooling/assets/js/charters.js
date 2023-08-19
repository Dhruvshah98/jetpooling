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

var counterInfoSwiper = new Swiper(".counterInfoSwiper", {
  speed: 800,
  spaceBetween: 30,
  slidesPerView: 1,
  grabCursor: true,
  navigation: {
    nextEl: ".comm-next",
    prevEl: ".comm-prev",
  },
  pagination: {
    el: ".comm-pagination",
    type: "custom",
    renderCustom: function (swiper, current, total) {
      return "0" + current + "<span></span>" + "0" + total;
    },
  },
});

var counterSwiper = new Swiper(".counterSwiper", {
  speed: 800,
  spaceBetween: 30,
  slidesPerView: 1,
  grabCursor: true,
});

counterInfoSwiper.controller.control = counterSwiper;
counterSwiper.controller.control = counterInfoSwiper;

/*Counter Script*/
// var a = 0;
// $(window).scroll(function () {
//   var oTop = $(".counter-sec").offset().top - window.innerHeight;
//   if (a == 0 && $(window).scrollTop() > oTop) {
//     $(".counter-num").each(function () {
//       var $this = $(this),
//         countTo = $this.attr("data-count");
//       $({
//         countNum: $this.text(),
//       }).animate(
//         {
//           countNum: countTo,
//         },
//         {
//           duration: 1200,
//           easing: "swing",
//           step: function () {
//             $this.text(Math.floor(this.countNum));
//           },
//           complete: function () {
//             $this.text(this.countNum);
//           },
//         }
//       );
//     });
//     a = 1;
//   }
// });
/*Counter Script ends*/

// tabbed content
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

// tabbed content Ebs




var cBannerList = document.querySelectorAll(".fleet-pointers ul li");

cBannerList.forEach(element => {

});
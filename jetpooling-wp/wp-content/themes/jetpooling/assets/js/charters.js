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


// tabbed content
if (screen.width < 770) {
  $(".fleet-pointers").hide();
  $(".fleet-pointers:first").show();
  $(".charter-banner-img-wrap").hide();
  $(".charter-banner-img-wrap-1").show();
  /* if in tab mode */
  $(".tabs li").click(function () {
    $(".fleet-pointers").hide();
    var activeTab = $(this).attr("rel");
    $("#" + activeTab).fadeIn();

    $(".charter-banner-img-wrap").hide();
    $("#" + activeTab + "Img").fadeIn();
    $("#" + activeTab).fadeIn();
    $(".tabs li").addClass("line");
    $(this).removeClass("line");
  });
}
else {
  $(".fleet-pointers").hide();
  $(".fleet-pointers:first").show();
  $(".charter-banner-img-wrap").hide();
  $(".charter-banner-img-wrap-1").show();
  /* if in tab mode */
  $(".tabs li").click(function () {
    $(".fleet-pointers").hide();
    var activeTab = $(this).attr("rel");
    $(".charter-banner-img-wrap").hide();
    $("#" + activeTab + "Img").fadeIn();
    $("#" + activeTab).fadeIn();

    $(".tabs li").addClass("line");
    $(this).removeClass("line");
  });
}

// tabbed content Ebs




// var mapLength = $(".map-wrap").length;
// $(".map-point").on("click", function () {
//   console.log($(".map-point").attr("data-id"));
//   var a = $(this).attr("data-id"); $(".map-point").removeClass("active");
//   $(".map-wrap").removeClass("active"), $(".map-wrap-" + a).addClass("active");
//   $(this).addClass("active")
// })

var cBannerList = document.querySelectorAll(".fleet-pointers ul li");

cBannerList.forEach((section, i) => {
  section.onclick = () => {
    $(".fleet-pointers ul li").removeClass('active');
    section.classList.add("active");
    var a = $(section).attr("data-id")
    $(".charter-banner-img").removeClass('active');
    $(".charter-banner-img-" + a).addClass('active');
  }
});


$(".tabs .button").click(function () {
  $(".fleet-pointers ul li").removeClass('active');
  $(".charter-banner-img").removeClass('active');
  $(".charter-banner-img-1").addClass('active');
  $(".fleet-pointers ul li[data-id=" + 1 + "]").addClass('active');
})


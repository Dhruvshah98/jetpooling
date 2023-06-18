var swipergallery = new Swiper('.swiper-gallery', {
    speed: 800,
    spaceBetween: 30,
    slidesPerView: 1,
    grabCursor: true,
    navigation: {
        nextEl: '.fleet-nav-next-1',
        prevEl: '.fleet-nav-prev-1',
    },
    pagination: {
        el: '.pagination-fleet-1',
        type: 'custom',
        renderCustom: function (swiper, current, total) {
            return '0' + current + '<span></span>' + '0' + (total);
        }
    }
});

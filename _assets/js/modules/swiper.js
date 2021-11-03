

// スタッフ紹介ページギャラリー
//--------------------------------------------------------------------------
if (document.URL.match(/staff/)) {
  const swiper = new Swiper('.swiper-gallery', {

    speed: 9000,
    slidesPerView: '2',
    spaceBetween: 20,
    loop: true,
    allowTouchMove: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },

    breakpoints: {
      768: {
        allowTouchMove: false,
        slidesPerView: '3',
      },
      992: {
        slidesPerView: '4',
      },
    }
  });
}




// メインビジュアル
if (document.getElementById('js-mv')) {
  const swiperMv = new Swiper('.swiper-mv', {
    // Optional parameters
    speed: 400, // スライドが切り替わる時の速さ
    slidesPerView: '1', // スライド表示数
    effect: "fade", // フェードさせる
    loop: true,
    autoplay: { // 自動再生 ON
      delay: 4000, // 次のスライドまでの秒数
      disableOnInteraction: false, //スライダー操作後、自動再生が止まるかどうか
    },
    fadeEffect: {
      crossFade: true // クロスフェードさせる
    },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}


// スタッフ紹介ページギャラリー
if (document.getElementById('js-gallery')) {
  const swiperGallery = new Swiper('.swiper-gallery', {

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



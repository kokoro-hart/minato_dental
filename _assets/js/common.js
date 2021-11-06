
//ビューポート幅360px以下はリサイズして表示
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})();

// タッチデバイスの場合:hover無効化
const touch = 'ontouchstart' in document.documentElement || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
if (touch) {
  try {
    for (let si in document.styleSheets) {
      const styleSheet = document.styleSheets[si];
      if (!styleSheet.rules) continue;

      for (let ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
        if (!styleSheet.rules[ri].selectorText) continue;

        if (styleSheet.rules[ri].selectorText.match(':hover')) {
          styleSheet.deleteRule(ri);
        }
      }
    }
  } catch (ex) { }
}

//画像遅延読み込み
const lazy = document.querySelectorAll('.lazyload');
const lazyObserver = new IntersectionObserver(inViewport, {
  threshold: [0]
});

Array.from(lazy).forEach(element => {
  lazyObserver.observe(element);
});

function inViewport(entries, observer) {
  entries.forEach(entry => {

    if (entry.intersectionRatio > 0) {
      const imgElement = entry.target;
      imgElement.src = imgElement.dataset.src;

      imgElement.addEventListener('load', () => {
        imgElement.classList.add('is-lazyloaded');
      });

      lazyObserver.unobserve(entry.target);
    }
  });
}

//ページ内リンク
const header = document.getElementById('js-header').offsetHeight;
const urlHash = location.hash;

window.addEventListener('DOMContentLoaded', () => {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  const anchorLinksArr = Array.prototype.slice.call(anchorLinks);

  anchorLinksArr.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const targetId = link.hash;
      const targetElement = document.querySelector(targetId);
      const targetOffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top - (header + 10);

      window.scrollTo({
        top: targetOffsetTop,
        behavior: "smooth"
      });
    });
  });
});

//ページ遷移先がアンカーリンクの場合headerの高さを引く
window.addEventListener('DOMContentLoaded', () => {
  if (urlHash) {
    setTimeout(function () {
      const urlTarget = document.getElementById(urlHash.replace('#', ''));
      const urlPosition = window.pageYOffset + urlTarget.getBoundingClientRect().top - (header + 10);

      window.scroll({
        top: urlPosition,
      });
    }, 10);
  }
});
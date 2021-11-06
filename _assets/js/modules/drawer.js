
//  ドロワーメニュー
const drawerButton = document.getElementById('js-drawer');
const body = document.body;
const spGlobalNav = document.getElementById('js-global-nav');
const headerLogo = document.getElementById('js-header-logo');

drawerButton.addEventListener('click', function () {
  body.classList.toggle('is-drawerActive');
  headerLogo.classList.toggle('is-active');
  if (drawerButton.getAttribute('aria-expanded') == 'false') {
    this.setAttribute('aria-expanded', 'true');
    this.classList.add('is-active');
    spGlobalNav.setAttribute('area-hidden', 'false');
    spGlobalNav.classList.add('is-active');
  } else {
    this.setAttribute('aria-expanded', 'false');
    this.classList.remove('is-active');
    spGlobalNav.setAttribute('area-hidden', 'true');
    spGlobalNav.classList.remove('is-active');
  };
});

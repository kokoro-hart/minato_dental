<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon" href="<? echo get_template_directory_uri(); ?>/img/common/apple-touch-icon.png">
  <link rel="icon" href="<? echo get_template_directory_uri(); ?>/img/common/favicon.ico" id="favicon">
  <meta name="description" content="南町の歯医者さん">
  <meta property="og:title" content="みなみ歯科クリニック">
  <meta property="og:description" content="南町の歯医者さん">
  <meta property="og:url" content="サイトのドメイン/">
  <meta property="og:type" content="website ">
  <meta property="og:local" content="ja_JP">
  <meta property="og:image" content="<? echo get_template_directory_uri(); ?>/img/common/mv01.jpeg">
  <meta property="og:site_name" content="サイトのドメイン ">

  <?php wp_head(); ?>
</head>
<body>
  <div id="wrapper">
    <header id="js-header" class="l-header">
      <div class="l-header__inner">
        <!--ヘッダーロゴ-->
        <h1 id="js-header-logo" class="p-header-logo">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header-logo__link">
            <svg class="c-svg p-header-logo__svg" width="270" height="31">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#logo" />
              みなみ歯科クリニック
            </svg>
          </a>
        </h1>
        <!--/ヘッダーロゴ-->
        <div class="l-header__content">
          <!--グローバルナビ-->
          <nav class="p-global-nav" id="js-global-nav">
            <ul class="p-global-nav__list">
              <li class="p-global-nav__item">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-global-nav__link <?php if(is_front_page()) echo 'is-current' ?>">
                  <svg class="c-svg p-global-nav__icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-home" />
                  </svg>
                  <span class="p-global-nav__text">
                    ホーム
                  </span>
                  <svg class="c-svg p-global-nav__arrow-right u-hidden-xl-up" width="14" height="14">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-right" />
                  </svg>
                </a>
              </li>
              <li class="p-global-nav__item">
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="p-global-nav__link <?php check('about');?>">
                  <svg class="c-svg p-global-nav__icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-about" />
                  </svg>
                  <span class="p-global-nav__text">
                    当院について
                  </span>
                  <svg class="c-svg p-global-nav__arrow-right u-hidden-xl-up" width="14" height="14">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-right" />
                  </svg>
                </a>
              </li>
              <li class="p-global-nav__item">
                <a href="<?php echo esc_url(home_url('/medical')); ?>" class="p-global-nav__link <?php check('medical');?>">
                  <svg class="c-svg p-global-nav__icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-medical" />
                  </svg>
                  <span class="p-global-nav__text">
                    診察案内
                  </span>
                  <svg class="c-svg p-global-nav__arrow-right u-hidden-xl-up" width="14" height="14">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-right" />
                  </svg>
                </a>
              </li>
              <li class="p-global-nav__item">
                <a href="<?php echo esc_url(home_url('/staff')); ?>" class="p-global-nav__link <?php check('staff');?>">
                  <svg class="c-svg p-global-nav__icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-staff" />
                  </svg>
                  <span class="p-global-nav__text">
                    スタッフ紹介
                  </span>
                  <svg class="c-svg p-global-nav__arrow-right u-hidden-xl-up" width="14" height="14">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-right" />
                  </svg>
                </a>
              </li>
              <li class="p-global-nav__item">
                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="p-global-nav__link <?php if(is_home() || is_category() || is_single() || is_archive()) echo 'is-current' ?>">
                  <svg class="c-svg p-global-nav__icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-blog" />
                  </svg>
                  <span class="p-global-nav__text">
                    ブログ・お知らせ
                  </span>
                  <svg class="c-svg p-global-nav__arrow-right u-hidden-xl-up" width="14" height="14">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-right" />
                  </svg>
                </a>
              </li>
              <li class="p-global-nav__item">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-global-nav__link <?php check('contact');?>">
                  <svg class="c-svg p-global-nav__icon" width="24" height="24">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-contact" />
                  </svg>
                  <span class="p-global-nav__text">
                    お問い合わせ
                  </span>
                  <svg class="c-svg p-global-nav__arrow-right u-hidden-xl-up" width="14" height="14">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-right" />
                  </svg>
                </a>
              </li>
            </ul>
          </nav>
          <!--/グローバルナビ-->
          <!--ドロワーボタン-->
          <button id="js-drawer" class="c-button-drawer u-hidden-xl-up" aria-controls="js-global-nav" aria-expanded="false">
            <span class="c-button-drawer__line"></span>
            <span class="c-button-drawer__line"></span>
            <span class="c-button-drawer__line"></span>
          </button>
          <!--ドロワーボタン-->
          <!--電話番号-->
          <address class="p-header-tel u-hidden-xl-down">
            <p class="p-header-tel__text">
              〒166-0001 東京都杉並区阿佐谷北7-3-1
            </p>
            <a href="tel:03-1234-5678" class="p-header-tel__number">
              <svg class="c-svg p-header-tel__icon" width="28" height="28">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-tel" />
              </svg>
              03-1234-5678
            </a>
          </address>
          <!--電話番号-->
        </div>
      </div>
    </header>
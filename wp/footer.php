    <footer class="l-footer">
      <div class="l-footer__decoration"></div>
      <div class="l-footer__body">
        <div class="l-footer__inner l-inner">
          <!--インフォメーション-->
          <div class="p-footer-info">
            <div class="p-footer-info__contact">
              <div class="p-footer-info__logo">
                <a href="/" class="p-footer-info__logo-link">
                  <svg class="c-svg p-footer-info__logo-svg" width="311" height="33">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#logo" />
                  </svg>
                </a>
              </div>
              <p class="p-footer-info__access">
                〒166-0001 <span class="p-footer-info__access-inside">東京都杉並区阿佐谷北7-3-1</span>
              </p>
              <a href="tel:0312345678" class="p-footer-info__tel">
                <svg class="c-svg p-footer-info__tel-icon" width="28" height="28">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-tel" />
                </svg>
                03-1234-5678
              </a>
              <p class="p-footer-info__time">(年中無休 AM9:00〜PM22:00)</p>
              <div class="p-footer-info__link-wrapper">
                <a href="<?php echo esc_url(home_url('/reserve')); ?>" class="c-button-footer">
                  <svg class="c-svg c-button-footer__icon" width="25" height="14">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-web" />
                  </svg>
                  <span class="c-button-footer__text">
                    WEB予約
                  </span>
                </a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-button-footer c-button-footer--bg-white u-ml15">
                  <svg class="c-svg c-button-footer__icon" width="14" height="14">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-contact" />
                  </svg>
                  <span class="c-button-footer__text">
                    お問い合わせ
                  </span>
                </a>
              </div>
              <picture class="p-footer-info__medical">
                <source class="p-footer-info__medical-img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/medical-time_sp.webp" media="(max-width: 767px)" type="image/webp" />
                <source class="p-footer-info__medical-img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/medical-time_pc.webp" media="(min-width: 768px)" type="image/webp" />
                <source class="p-footer-info__medical-img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/medical-time_sp.png" media="(max-width: 767px)" />
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/medical-time_pc.png" class="p-footer-info__medical-img lazyload" media="(min-width: 768px)" alt="診察時間">
              </picture>
            </div>
            <div class="p-footer-map">
              <div class="p-footer-map__inner">
                <iframe class="p-footer-map__iframe lazyload" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.9756333026817!2d139.63371001568854!3d35.70221723018938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2767eb9e92b%3A0xc2d0573363890acc!2z6Zi_5L2Q44O26LC36aeF!5e0!3m2!1sja!2sjp!4v1635168343638!5m2!1sja!2sjp" width="315" height="315" style="border:0;" allowfullscreen="">
                </iframe>
              </div>
            </div>
          </div>
          <!--インフォメーション-->
          <!--フッターナビゲーション-->
          <ul class="p-footer-nav">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-footer-nav__link">TOP</a>
            <!--当院について-->
            <li class="p-footer-nav__item">
              当院について
              <div class="p-footer-nav__box">
                <ul class="p-footer-lower-nav">
                  <li class="p-footer-lower-nav__item">
                    <a href="<?php echo esc_url(home_url('/about#about-feature')); ?>" class="p-footer-lower-nav__link">
                      ポリシーと特徴
                    </a>
                  </li>
                  <li class="p-footer-lower-nav__item">
                    <a href="<?php echo esc_url(home_url('/about#about-state')); ?>" class="p-footer-lower-nav__link">
                      当院の様子
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!--/当院について-->
            <!--スタッフ紹介-->
            <li class="p-footer-nav__item">
              スタッフ紹介
              <div class="p-footer-nav__box">
                <ul class="p-footer-lower-nav">
                  <li class="p-footer-lower-nav__item">
                    <a href="<?php echo esc_url(home_url('/staff#staff-director')); ?>" class="p-footer-lower-nav__link">
                      院長のあいさつ
                    </a>
                  </li>
                  <li class="p-footer-lower-nav__item">
                    <a href="<?php echo esc_url(home_url('/staff#staff-member')); ?>" class="p-footer-lower-nav__link">
                      スタッフ
                    </a>
                  </li>
                  <li class="p-footer-lower-nav__item">
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="p-footer-lower-nav__link">
                      スタッフブログ
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!--/スタッフ紹介-->
            <!--診察内容-->
            <li class="p-footer-nav__item">
              診療内容
              <div class="p-footer-nav__box">
                <?php
                  // タクソノミ取得
                  $catargs = array(
                    'taxonomy' => 'medical'
                  );
                  $cat_lists = get_categories( $catargs );
                  foreach($cat_lists as $cat) :
                  $cat_slug = $cat->slug; // カテゴリのスラッグを取得
                ?>
                <ul class="p-footer-lower-nav">
                  <?php
                    $args = array(
                      'posts_per_page' => 4, //投稿を全て取得
                      'post_type' => 'plan', //診療案内
                      'medical' => $cat->slug, 
                      'orderby' => 'date',
                      'order' => 'DESC'
                    );
                    $my_posts = get_posts( $args );
                    if ( $my_posts ) :

                    foreach ( $my_posts as $post ) :
                    setup_postdata( $post );
                    $post_slug = $post->post_name;
                  ?>
                  <li class="p-footer-lower-nav__item">
                    <a href="/medical#<?php echo $post_slug; ?>" class="p-footer-lower-nav__link">
                      <?php the_title(); ?>
                    </a>
                  </li>
                  <?php
                    endforeach;
                    endif;
                    wp_reset_postdata();
                  ?>
                </ul>
                <?php endforeach; ?>
              </div>
            </li>
            <!--/診察内容-->
            <!--お問い合わせ-->
            <li class="p-footer-nav__item">
              お問い合わせ
              <div class="p-footer-nav__box">
                <ul class="p-footer-lower-nav">
                  <li class="p-footer-lower-nav__item">
                    <a href="/contact/" class="p-footer-lower-nav__link">
                      お問い合わせフォーム
                    </a>
                  </li>
                  <li class="p-footer-lower-nav__item">
                    <a href="/reserve/" class="p-footer-lower-nav__link">
                      WEB予約
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!--/お問い合わせ-->
          </ul>
          <!--/フッターナビゲーション-->
        </div>
        <!--コピーライト-->
        <div class="p-footer-copyright">
          <p class="p-footer-copyright__text"><span lang="en">©︎</span>2020-2021 みなみ歯科クリニック</p>
        </div>
        <!--コピーライト-->
      </div>
    </footer>
    <!--予約-->
    <a href="<?php echo esc_url(home_url('/reserve')); ?>" class="c-reserve u-hidden-xl-down">
      <svg class="c-svg c-reserve__icon" width="48" height="28">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-web" />
      </svg>
      <p class="c-reserve__text">WEB予約 はこちら</p>
    </a>
    <div class="c-reverse-footer u-hidden-xl-up">
      <div class="c-reverse-footer__tel">
        <a href="tel:0312345678" class="c-reverse-footer__tel-link">
          <svg class="c-svg c-reverse-footer__tel-icon" width="18" height="18">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-tel" />
          </svg>
          03-1234-5678
        </a>
        <p class="c-reverse-footer__tel-text">(年中無休 AM9:00〜PM22:00)</p>
      </div>
      <a href="<?php echo esc_url(home_url('/reserve')); ?>" class="c-reverse-footer__web">
        <svg class="c-svg c-reverse-footer__web-icon" width="43.5" height="25.5">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-web" />
        </svg>
        <p class="c-reverse-footer__web-text">WEB予約<br>はこちら</p>
      </a>
    </div>
    <!--/予約-->
  </div><!-- /wrapper -->

  <?php wp_footer(); ?>
</body>
</html>
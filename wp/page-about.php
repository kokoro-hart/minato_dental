
    <?php get_header(); ?>

    <main>
      <!--メインビジュアル-->
      <section class="p-lower-mv">
        <picture class="p-lower-mv__picture">
          <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/mv-about_sp.webp" media="(max-width: 767px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/mv-about_pc.webp" media="(min-width: 768px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/mv-about_sp.jpeg" media="(max-width: 767px)" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/mv-about_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="当院について">
        </picture>
        <div class="p-lower-mv__contents">
          <h2 class="p-lower-mv__heading">当院について</h2>
          <p class="p-lower-mv__lead">ABOUT OUR CLINIC</p>
        </div>
      </section>
      <!--/メインビジュアル-->
      <!--パンくずリスト-->
      <div class="c-breadcrumb u-mt10">
        <div class="l-inner">
          <?php
            if ( function_exists( 'bcn_display' ) ) {
              bcn_display();
            }
          ?>
        </div>
      </div>
      <!--/パンくずリスト-->
      <div class="l-lower l-lower-about">
        <!--ポリシーと特徴-->
        <section id="about-feature" class="p-about-feature">
          <div class="p-about-feature__title-wrapper">
            <h2 class="c-section-title">
              ポリシーと特徴
            </h2>
          </div>
          <div class="p-about-feature__items">
            <!--ポリシー-->
            <section class="p-feature p-feature--decoration p-about-feature__item">
              <svg class="c-svg p-feature__bg u-hidden-md-up" width="145vw" height="81vw">
                <use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/sprite.min.svg#concept-bg" />
              </svg>
              <div class="p-feature__contents">
                <picture class="p-feature__picture">
                  <source class="p-feature__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/feature01.webp" type="image/webp" />
                  <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/feature01.jpeg" width="1280" height="876" class="p-feature__img lazyload" alt="ポリシー">
                </picture>
                <div class="p-feature__textarea">
                  <div class="p-feature__title">
                    <span class="p-feature__title-en">POLICY</span>
                    <h2 class="p-feature__title-ja">
                      コミュニケーションから始まる最適な医療提供
                    </h2>
                  </div>
                  <p class="p-feature__text">
                    当院ではまず患者様から詳しくお話を伺います。 難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。
                    <br>
                    <br>
                    「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。
                  </p>
                </div>
              </div>
            </section>
            <!--/ポリシー-->
            <!--特徴-->
            <section class="p-feature p-feature--reverse p-about-feature__item">
              <div class="p-feature__contents">
                <picture class="p-feature__picture">
                  <source class="p-feature__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/feature02.webp" type="image/webp" />
                  <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/feature02.jpeg" width="1280" height="876" class="p-feature__img lazyload" alt="特徴">
                </picture>
                <div class="p-feature__textarea">
                  <div class="p-feature__title">
                    <span class="p-feature__title-en">FEATURE</span>
                    <h2 class="p-feature__title-ja">
                      「医療技術の追求」と<br>「通いやすさ
                    </h2>
                  </div>
                  <p class="p-feature__text">
                    歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。 また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
                    <br>
                    <br>
                    朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。
                  </p>
                </div>
              </div>
            </section>
            <!--/特徴-->
          </div>
        </section>
        <!--/ポリシーと特徴-->
        <!--院内の様子-->
        <section id="about-state" class="p-about-state l-lower-about__state">
          <div class="l-inner">
            <div class="p-about-state__title-wrapper">
              <h2 class="c-section-title">院内の様子</h2>
            </div>
            <div class="p-about-state__photos">
              <div class="p-about-state__photo">
                <picture class="p-about-state__picture">
                  <source class="p-about-state__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about01.webp" type="image/webp" />
                  <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/about01.jpeg" width="634" height="634" class="p-about-state__img lazyload" alt="院内の様子">
                </picture>
              </div>
              <div class="p-about-state__photo">
                <picture class="p-about-state__picture">
                  <source class="p-about-state__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about02.webp" type="image/webp" />
                  <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/about02.jpeg" width="634" height="634" class="p-about-state__img lazyload" alt="院内の様子">
                </picture>
              </div>
              <div class="p-about-state__photo">
                <picture class="p-about-state__picture">
                  <source class="p-about-state__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about03.webp" type="image/webp" />
                  <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/about03.jpeg" width="634" height="634" class="p-about-state__img lazyload" alt="院内の様子">
                </picture>
              </div>
              <div class="p-about-state__photo">
                <picture class="p-about-state__picture">
                  <source class="p-about-state__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about04.webp" type="image/webp" />
                  <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/about04.jpeg" width="634" height="634" class="p-about-state__img lazyload" alt="院内の様子">
                </picture>
              </div>
              <div class="p-about-state__photo">
                <picture class="p-about-state__picture">
                  <source class="p-about-state__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about05.webp" type="image/webp" />
                  <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/about05.jpeg" width="634" height="634" class="p-about-state__img lazyload" alt="院内の様子">
                </picture>
              </div>
              <div class="p-about-state__photo">
                <picture class="p-about-state__picture">
                  <source class="p-about-state__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about06.webp" type="image/webp" />
                  <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/about06.jpeg" width="634" height="634" class="p-about-state__img lazyload" alt="院内の様子">
                </picture>
              </div>
            </div>
          </div>
        </section>
        <!--/院内の様子-->
      </div>
    </main>
    
    <?php get_footer(); ?>
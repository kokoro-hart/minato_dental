
    <?php get_header(); ?>

    <main class="p-home l-home">
      <!--メインビジュアル（swiper）-->
      <section id="js-mv" class="p-home-mv">
        <div class="swiper swiper-mv">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture class="p-home-mv__picture">
                <source class="p-home-mv__img" srcset="<? echo get_template_directory_uri(); ?>/img/webp/mv01.webp" type="image/webp" />
                <img src="<? echo get_template_directory_uri(); ?>/img/common/mv01.jpeg" class="p-home-mv__img" width="1160" height="520" decoding="async" alt="メインビジュアル">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="p-home-mv__picture">
                <source class="p-home-mv__img" srcset="<? echo get_template_directory_uri(); ?>/img/webp/mv02.webp" type="image/webp" />
                <img src="<? echo get_template_directory_uri(); ?>/img/common/mv02.jpeg" class="p-home-mv__img" width="1160" height="520" decoding="async" alt="メインビジュアル">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="p-home-mv__picture">
                <source class="p-home-mv__img" srcset="<? echo get_template_directory_uri(); ?>/img/webp/mv03.webp" type="image/webp" />
                <img src="<? echo get_template_directory_uri(); ?>/img/common/mv03.jpeg" class="p-home-mv__img" width="1160" height="520" decoding="async" alt="メインビジュアル">
              </picture>
            </div>
          </div>
          <svg class="c-svg p-home-mv__text u-hidden-md-up" width="265" height="74.5">
            <use xlink:href="<? echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-text_sp" />
          </svg>
          <svg class="c-svg p-home-mv__text u-hidden-md-down" width="415" height="120">
            <use xlink:href="<? echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-text_pc" />
          </svg>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </section>
      <!--/メインビジュアル（swiper）-->

      <!--診察時間 お知らせ-->
      <section class="p-home-info l-home__info">
        <!--診察時間-->
        <div class="p-home-medical-time">
          <picture class="p-home-medical-time__picture">
            <source class="p-home-medical-time__img" srcset="<? echo get_template_directory_uri(); ?>/img/webp/medical-time_sp.webp" media="(max-width: 767px)" type="image/webp" />
            <source class="p-home-medical-time__img" srcset="<? echo get_template_directory_uri(); ?>/img/webp/medical-time_pc.webp" media="(min-width: 768px)" type="image/webp" />
            <source class="p-home-medical-time__img" srcset="<? echo get_template_directory_uri(); ?>/img/common/medical-time_sp.png" media="(max-width: 767px)" />
            <img src="<? echo get_template_directory_uri(); ?>/img/common/medical-time_pc.png" class="p-home-medical-time__img" media="(min-width: 768px)" decoding="async" alt="診察時間">
          </picture>
        </div>
        <!--/診察時間-->
        <!--お知らせ-->
        <div class="p-home-news">
          <div class="p-home-news__head">
            <div class="p-home-news__title">
              <h2 class="p-home-news__title-ja">お知らせ</h2>
              <span class="p-home-news__title-en">NEWS</span>
            </div>
            <div class="p-home-news__past">
              <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-home-news__past-link">
                過去のお知らせはこちら
              </a>
            </div>
          </div>
          <div class="p-home-news__body">
            <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DESC',
              );
              $new_posts = get_posts($args);
              foreach($new_posts as $post) : setup_postdata($post);
            ?>
            <a href="<?php the_permalink(); ?>" class="p-home-news__archive">
              <time class="p-home-news__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
              <p class="p-home-news__text">
                <?php the_title(); ?>
              </p>
              <svg class="c-svg p-home-news__arrow" width="14" height="14">
                <use xlink:href="<? echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-right" />
              </svg>
            </a>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
        </div>
        <!--/お知らせ-->
      </section>
      <!--/診察時間 お知らせ-->

      <!--コンセプト-->
      <section class="p-feature p-feature--decoration l-home__concept">
        <svg class="c-svg p-feature__bg u-hidden-md-up" width="145vw" height="81vw">
          <use xlink:href="<? echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#concept-bg" />
        </svg>
        <div class="p-feature__contents">
          <picture class="p-feature__picture">
            <source class="p-feature__img" srcset="<? echo get_template_directory_uri(); ?>/img/webp/concept-img01.webp" type="image/webp" />
            <img data-src="<? echo get_template_directory_uri(); ?>/img/common/concept-img01.jpeg" width="1280" height="876" class="p-feature__img lazyload" alt="コンセプトイメージ">
          </picture>
          <div class="p-feature__textarea">
            <div class="p-feature__title">
              <span class="p-feature__title-en">CONCEPT</span>
              <h2 class="p-feature__title-ja">
                健康的で素敵な笑顔あふれる <br>
                街づくりを目指して
              </h2>
            </div>
            <p class="p-feature__text">
              私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。
              <br>
              お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
            </p>
            <div class="p-feature__link-wrapper">
              <a href="<?php echo esc_url(home_url('/about'));?>" class="c-button-primary">
                当院について
                <svg class="c-svg c-button-primary__arrow" width="12" height="12">
                  <use xlink:href="<? echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-right" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!--/コンセプト-->
      <!--当院３つのおすすめ-->
      <section class="p-home-recommend l-home__recommend">
        <div class="p-home-recommend__title-wrapper">
          <h2 class="c-section-title">
            当院の3つのおすすめ
          </h2>
        </div>
        <ol class="p-home-recommend__items">
          <li class="p-home-recommend-item">
            <h3 class="p-home-recommend-item__title">
              <img data-src="<? echo get_template_directory_uri(); ?>/img/common/recommend01.png" width="355" height="65" alt="おすすめ01" class="p-home-recommend-item__title-img lazyload">
            </h3>
            <svg class="c-svg p-home-recommend-item__svg" width="276" height="254">
              <use xlink:href="<? echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#recommend01" />
            </svg>
            <p class="p-home-recommend-item__text">
              歯の治療において、小さな違和感は大きなストレスにつながります。<br class="u-hidden-sm-up">私たちは常に快適な歯科医療技術の研究を行っております。
            </p>
          </li>
          <li class="p-home-recommend-item">
            <h3 class="p-home-recommend-item__title">
              <img data-src="<? echo get_template_directory_uri(); ?>/img/common/recommend02.png" width="355" height="65" alt="おすすめ02" class="p-home-recommend-item__title-img lazyload">
            </h3>
            <svg class="c-svg p-home-recommend-item__svg" width="276" height="254">
              <use xlink:href="<? echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#recommend02" />
            </svg>
            <p class="p-home-recommend-item__text">
              「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
            </p>
          </li>
          <li class="p-home-recommend-item">
            <h3 class="p-home-recommend-item__title">
              <img data-src="<? echo get_template_directory_uri(); ?>/img/common/recommend03.png" width="355" height="65" alt="おすすめ03" class="p-home-recommend-item__title-img lazyload">
            </h3>
            <svg class="c-svg p-home-recommend-item__svg" width="276" height="254">
              <use xlink:href="<? echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#recommend03" />
            </svg>
            <p class="p-home-recommend-item__text">
              朝から夜までお仕事をされている方のために、診療時間を見直しました。<br>
              <span class="u-color-red">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span>
            </p>
          </li>
        </ol>
      </section>
      <!--/当院３つのおすすめ-->
      <!--診察案内-->
      <section class="p-home-medical l-home__medical l-decoration">
        <div class="l-decoration__top"></div>
        <div class="l-decoration__body">
          <div class="p-home-medical__contents l-inner">
            <div class="p-home-medical__title-wrapper">
              <h2 class="c-section-title">
                診療案内
              </h2>
            </div>
            <div class="p-home-medical__items">
              <?php
                // タクソノミ取得
                $catargs = array(
                  'taxonomy' => 'medical'
                );
                $cat_lists = get_categories( $catargs );
                foreach($cat_lists as $cat) :
                $cat_slug = $cat->slug; // カテゴリのスラッグを取得
              ?>
              <a href="/medical#<?php echo $cat_slug; ?>" class="p-home-medical-item">
                <div class="p-home-medical-item__text-wrapper">
                  <h2 class="p-home-medical-item__title"><?php echo $cat->name;?></h2>
                  <p class="p-home-medical-item__text"><?php echo $cat->description;?></p>
                </div>
              </a>
              <?php endforeach; ?>              
            </div>
            <p class="p-home-medical__text">
              当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。
              <br>
              痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。
              <br>
              <span class="u-color-red">
                ※特殊性の高い矯正治療などは保険の適応外となります。
                これらの治療を行う際は事前に詳細と費用のご説明いたします。
              </span>
            </p>
          </div>
        </div>
        <div class="l-decoration__bottom"></div>
      </section>
      <!--/診察案内-->
      <!--スタッフブログ-->
      <section class="p-home-blog l-home__blog">
        <div class="l-inner">
          <div class="p-home-blog__title-wrapper">
            <h2 class="c-section-title">
              スタッフブログ
            </h2>
          </div>
          <?php
            $args = array(
              'post_type' => 'blog',
              'posts_per_page' => 6 ,
              'orderby' => 'date',
              'order' => 'DESC'
            );
            $the_query = get_posts( $args );
            if ( $the_query ) :
          ?>
          <div class="p-home-blog__items">
            <?php foreach ( $the_query as $post ) : setup_postdata( $post ); ?>
            <a href="<?php the_permalink(); ?>" class="p-home-blog-item">
              <p class="p-home-blog-item__thumbnail">
                <?php
                  if(has_post_thumbnail()) {
                    the_post_thumbnail('small', array(
                      'class' => 'p-home-blog-item__img lazyload'
                    ));
                  } else {
                    echo '<img data-src="' . esc_url(get_template_directory_uri()) . '/img/common/blog01.jpeg" alt="記事の画像" class="p-home-blog-item__img lazyload">';
                  }
                ?>
              </p>
              <div class="p-home-blog-item__body">
                <div class="p-home-blog-item__cats">
                  <p class="p-home-blog-item__cat">
                    <?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?>
                  </p>
                </div>
                <p class="p-home-blog-item__title">
                  <?php the_title(); ?>
                </p>
                <time class="p-home-blog-item__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j') ?></time>
              </div>
            </a>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <?php endif; ?>
          <div class="p-home-blog__link-wrapper">
            
            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="c-button-primary">
              スタッフブログ一覧はこちら
              <svg class="c-svg c-button-primary__arrow" width="12" height="12">
                <use xlink:href="<? echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-right" />
              </svg>
            </a>
          </div>
        </div>
      </section>
      <!--/スタッフブログ-->
    </main>
    
    <?php get_footer(); ?>

    <?php get_header(); ?>

    <main>
      <!--メインビジュアル-->
      <section class="p-lower-mv">
        <picture class="p-lower-mv__picture">
          <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/mv-staff_sp.webp" media="(max-width: 767px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/mv-staff_pc.webp" media="(min-width: 768px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/mv-staff_sp.jpeg" media="(max-width: 767px)" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/mv-staff_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="スタッフの紹介">
        </picture>
        <div class="p-lower-mv__contents">
          <h2 class="p-lower-mv__heading">スタッフ紹介</h2>
          <p class="p-lower-mv__lead">STAFF</p>
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
      <div class="l-lower l-lower-staff">
        <!--院長の挨拶-->
        <section id="staff-director" class="p-staff-director">
          <div class="p-staff-director__title-wrapper">
            <h2 class="c-section-title">院長のあいさつ</h2>
          </div>
          <div class="l-inner">
            <div class="p-staff__content p-staff-director__inner">
              <div class="p-staff-director__about">
                <h3 class="p-staff-director__title">
                  気軽に相談できる<br>街の歯医者さんでありたい。
                </h3>
                <div class="p-staff-director__text-wrapper">
                  <p class="p-staff-director__text">
                    当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。
                  </p>
                </div>
                <div class="p-staff-director__text-wrapper">
                  <p class="p-staff-director__text">
                    「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。
                  </p>
                </div>
                <div class="p-staff-director__text-wrapper u-align-right">
                  <p class="p-staff-director__text">
                    みなみ歯科クリニック<br>院長　南 俊雄
                  </p>
                </div>
                <picture class="p-staff-director__picture u-hidden-md-up">
                  <source class="p-staff-director__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/staff-director.webp" type="image/webp" />
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/staff-director.jpeg" class="p-staff-director__img" width="460" height="613" decoding="async" alt="院長の写真">
                </picture>
                <div class="p-staff-director__career">
                  <p class="p-staff__sub-title">経歴</p>
                  <div class="p-staff-director__row">
                    <p class="p-staff-director__text">2004年</p>
                    <p class="p-staff-director__text">東京医科歯科大学歯学部 卒業</p>
                  </div>
                  <div class="p-staff-director__row">
                    <p class="p-staff-director__text">2008年</p>
                    <p class="p-staff-director__text">東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得</p>
                  </div>
                  <div class="p-staff-director__row">
                    <p class="p-staff-director__text">2012年</p>
                    <p class="p-staff-director__text">みなみ歯科クリニック 開院</p>
                  </div>
                </div>
                <div class="p-staff-director__certified">
                  <p class="p-staff__sub-title">資格</p>
                  <div class="p-staff-director__row">
                    <p class="p-staff-director__text">歯科医師臨床研修指導歯科医</p>
                  </div>
                  <div class="p-staff-director__row">
                    <p class="p-staff-director__text">博士(歯学)</p>
                  </div>
                  <div class="p-staff-director__row">
                    <p class="p-staff-director__text">衛生検査技師</p>
                  </div>
                </div>
              </div>
              <div class="p-staff-director__img-wrapper">
                <picture class="p-staff-director__picture u-hidden-md-down">
                  <source class="p-staff-director__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/staff-director.webp" type="image/webp" />
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/staff-director.jpeg" class="p-staff-director__img" width="460" height="613" decoding="async" alt="院長の写真">
                </picture>
              </div>
            </div>
          </div>
        </section>
        <!--/院長の挨拶-->

        <!--ギャラリー（swiper.js）-->
        <section id="js-gallery" class="p-staff-gallery l-lower-staff__gallery">
          <div class="swiper swiper-gallery">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <picture class="p-staff-gallery__picture">
                  <source class="p-staff-gallery__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/staff-swiper01.webp" type="image/webp" />
                  <img class="p-staff-gallery__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/staff-swiper01.jpeg" width="634" height="476" decoding="async" alt="ギャラリーの画像">
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="p-staff-gallery__picture">
                  <source class="p-staff-gallery__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/staff-swiper02.webp" type="image/webp" />
                  <img class="p-staff-gallery__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/staff-swiper02.jpeg" width="634" height="476" decoding="async" alt="ギャラリーの画像">
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="p-staff-gallery__picture">
                  <source class="p-staff-gallery__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/staff-swiper03.webp" type="image/webp" />
                  <img class="p-staff-gallery__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/staff-swiper03.jpeg" width="634" height="476" decoding="async" alt="ギャラリーの画像">
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="p-staff-gallery__picture">
                  <source class="p-staff-gallery__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/staff-swiper04.webp" type="image/webp" />
                  <img class="p-staff-gallery__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/staff-swiper04.jpeg" width="634" height="476" decoding="async" alt="ギャラリーの画像">
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="p-staff-gallery__picture">
                  <source class="p-staff-gallery__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/staff-swiper05.webp" type="image/webp" />
                  <img class="p-staff-gallery__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/staff-swiper05.jpeg" width="634" height="476" decoding="async" alt="ギャラリーの画像">
                </picture>
              </div>
            </div>
          </div>
        </section>
        <!--/ギャラリー（swiper.js）-->

        <!--スタッフ紹介-->
        
        <section id="staff-member" class="p-staff-member l-lower-staff__member">
          <div class="p-staff-member__title-wrapper">
            <h2 class="c-section-title">スタッフ紹介</h2>
          </div>
          
          
          <div class="l-inner">
            <!--歯科衛生士-->
            <?php
              $tax_args = array(
                'taxonomy' => 'staff'
              );
              $tax_lists = get_categories( $tax_args );
              foreach($tax_lists as $tax) :
            ?>
            <div class="p-staff__content">
              <h3 class="p-staff__sub-title"><?php echo $tax->name; ?></h3>
              <ul class="p-staff-member__items">
              <?php
                  $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'staffs', //スタッフ
                    'staff' => $tax->slug, 
                    'orderby' => 'date',
                    'order' => 'DESC'
                  );
                  $staff_posts = get_posts( $args );
                  if ( $staff_posts ) :

                  foreach ( $staff_posts as $post ) :
                  setup_postdata( $post );
                ?>
                <li class="p-staff-member__item p-card-staff">
                  <div class="p-card-staff__img-wrapper">
                    <?php 
                      if(has_post_thumbnail()) {
                        the_post_thumbnail('full', array(
                          
                          'class' => 'p-card-staff__img lazyload',
                        ));
                      } else {
                        echo '<img data-src="' . esc_url(get_template_directory_uri()) . '/img/common/staff01.jpeg" alt="スタッフの写真" class="p-card-staff__img lazyload">';
                      }
                    ?>
                  </div> 
                  <div class="p-card-staff__name-wrapper">
                    <p class="p-card-staff__role"><?php echo $tax->name; ?></p>
                    <p class="p-card-staff__name"><?php the_title(); ?></p>
                  </div>
                  <dl class="p-card-staff__dl">
                    <?php if ( get_field('from')) :  ?>
                    <div class="p-card-staff__row">
                      <dt class="p-card-staff__dt">出身地</dt>
                      <dd class="p-card-staff__dd"><?php the_field( 'from' ); //出身地 ?></dd>
                    </div>
                    <?php endif; ?>

                    <?php if ( get_field('hobby')) :  ?>
                    <div class="p-card-staff__row">
                      <dt class="p-card-staff__dt">趣味</dt>
                      <dd class="p-card-staff__dd"><?php the_field( 'hobby' ); //趣味 ?></dd>
                    </div>
                    <?php endif; ?>

                    <?php if ( get_field('food')) :  ?>
                    <div class="p-card-staff__row">
                      <dt class="p-card-staff__dt">好きな食べ物</dt>
                      <dd class="p-card-staff__dd"><?php the_field( 'food' ); //好きな食べ物 ?></dd>
                    </div>
                    <?php endif; ?>
                  </dl>
                </li>
                <?php
                  endforeach;
                  endif;
                  wp_reset_postdata();
                ?>
              </ul>
            </div>
            <?php endforeach; ?>
            <!--/歯科衛生士-->
          </div>
        </section>

        <!--/スタッフ紹介-->
      </div>
    </main>
    
    <?php get_footer(); ?>

    <?php get_header(); ?>

    <main class="p-medical">
      <!--メインビジュアル-->
      <section class="p-lower-mv">
        <picture class="p-lower-mv__picture">
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-medical_sp.webp" media="(max-width: 767px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-medical_pc.webp" media="(min-width: 768px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/mv-medical_sp.jpeg" media="(max-width: 767px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/mv-medical_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="診察案内">
        </picture>
        <div class="p-lower-mv__contents">
          <h2 class="p-lower-mv__heading">診療案内</h2>
          <p class="p-lower-mv__lead">MEDICAL</p>
        </div>
      </section>
      <!--/メインビジュアル-->
      <!--パンくずリスト-->
      <div class="c-breadcrumb u-mt10">
        <div class="l-inner">
          <ul class="c-breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a class="c-breadcrumb__link" itemprop="item" href="/"><span itemprop="name">ホーム</span></a>
              <meta itemprop="position" content="1" />
            </li>
            <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a class="c-breadcrumb__link" itemprop="item" href="/medical/"><span itemprop="name">診察案内</span></a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </div>
      <!--/パンくずリスト-->

      <div class="l-lower l-lower-medical">

        <!--診察案内ナビゲーション-->
        <div class="p-medical-nav">
          <div class="p-medical-nav__inner l-inner">
            <?php
              // タクソノミ取得
              $catargs = array(
                'taxonomy' => 'medical'
              );
              $cat_lists = get_categories( $catargs );
              foreach($cat_lists as $cat) :
              $cat_slug = $cat->slug; // カテゴリのスラッグを取得
            ?>
            <div class="p-medical-nav__group">
              <div class="p-medical-nav__title-wrapper">
                <h2 class="p-medical-nav__title"><?php echo $cat->name; // 一般診療 or 特殊診療?></h2>
                <?php if($cat_slug === 'medical01') : // スラッグがmedical01の場合?>
                <p class="p-medical-nav__label p-medical-nav__label--blue"><?php echo $cat->description;?></p>
                <?php else : // medical01以外は?>
                  <p class="p-medical-nav__label p-medical-nav__label--red"><?php echo $cat->description;?></p>
                <?php endif; ?>
              </div>

              <ul class="p-medical-nav__list">
                <?php
                  $args = array(
                    'posts_per_page' => -1, //投稿を全て取得
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
                <li class="p-medical-nav__item">
                  <a href="#<?php echo $post_slug; ?>" class="p-medical-nav__link">
                    <?php the_title(); ?>
                  </a>
                </li>
                <?php
                  endforeach;
                  endif;
                  wp_reset_postdata();
                ?>
              </ul>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <!--/診察案内ナビゲーション-->

        <!--診療内容-->
        <?php
          // タクソノミ取得
          $catargs = array(
            'taxonomy' => 'medical'
          );
          $cat_lists = get_categories( $catargs );
          foreach($cat_lists as $cat) :
          $cat_slug = $cat->slug; // カテゴリのスラッグを取得
        ?>
        <section id="<?php echo $cat_slug; ?>" class="l-lower-medical__details l-decoration">
          <div class="l-decoration__top"></div>
          <div class="p-medical-detail l-decoration__body">
            <div class="p-medical-detail__title-wrapper">
              <h2 class="c-section-title"><?php echo $cat->name; ?></h2>
            </div>
            <div class="l-inner">
              <ul class="p-medical-detail__items">
                <?php
                  $args = array(
                    'posts_per_page' => -1, //投稿を全て取得
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
                <li id="<?php echo $post_slug; ?>" class="p-medical-detail-item">
                  <div class="p-medical-detail-item__title-wrapper">
                    <h3 class="p-medical-detail-item__title">
                      <?php the_title(); ?>
                    </h3>
                    <?php if ( get_field('worries')) :  ?>
                    <p class="p-medical-detail-item__lead">
                      <?php the_field( 'worries' ); //お悩み ?>
                    </p>
                    <?php endif; ?>
                  </div>
                  <div class="p-medical-detail-item__body">
                    <?php if ( get_field('overview')) :  ?>
                    <p class="p-medical-detail-item__text">
                      <?php the_field( 'overview' ); //概要紹介 ?>
                    </p>
                    <?php endif; ?>
                    <div class="p-medical-detail-item__img-wrapper">
                      <?php 
                        if(has_post_thumbnail()) {
                          the_post_thumbnail('small', array(
                            'class' => 'p-medical-detail-item__img lazyload',
                          ));
                        } else {
                          echo '<img data-src="' . esc_url(get_template_directory_uri()) . '/img/common/medical08.jpeg" alt="一般歯科" class="p-medical-detail-item__img lazyload">';
                        }
                      ?>
                    </div>
                  </div>
                  <?php if($cat_slug === 'medical01') : // スラッグがmedical01の場合は青のリボン?>
                    <svg class="c-svg p-medical-detail-item__tag u-hidden-md-up" width="80" height="60">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-tag01_sp" />
                    </svg>
                    <svg class="c-svg p-medical-detail-item__tag u-hidden-md-down" width="100" height="80">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-tag01_pc" />
                    </svg>
                  <?php else : // medical01以外は赤のリボン?>
                    <svg class="c-svg p-medical-detail-item__tag u-hidden-md-up" width="80" height="60">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-tag02_sp" />
                    </svg>
                    <svg class="c-svg p-medical-detail-item__tag u-hidden-md-down" width="100" height="80">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-tag02_pc" />
                    </svg>
                  <?php endif; ?>
                  
                </li>
                <?php
                  endforeach;
                  endif;
                  wp_reset_postdata();
                ?>
              </ul>
            </div>
          </div>
          <div class="l-decoration__bottom"></div>
        </section>
        <?php endforeach; ?>
        <!--/診療内容-->
      </div>
    </main>
    
    <?php get_footer(); ?>
<aside class="p-sidebar l-archive__sidebar">
  <!--クリニックの紹介-->
  <article class="p-sidebar-intro">
    <h2 class="p-sidebar__title">
      <svg class="c-svg p-sidebar__title-icon" width="24" height="24">
        <use xlink:href="<?php echo esc_url(get_template_directory_uri());  ?>/img/svg/sprite.min.svg#icon-sidebar01" />
      </svg>
      クリニックの紹介
    </h2>
    <picture class="p-sidebar-intro__picture">
      <source class="p-sidebar-intro__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/sidebar01.webp" type="image/webp" />
      <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/sidebar01.jpeg" alt="クリニックの紹介" decoding="async" class="p-sidebar-intro__img">
    </picture>
    <h3 class="p-sidebar-intro__title">みなみ歯科クリニック</h3>
    <p class="p-sidebar-intro__text">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
    <a href="<?php echo esc_url(home_url('/about')); ?>" class="p-sidebar-intro__button">
      当院について
    </a>
  </article>
  <!--/クリニックの紹介-->
  <!--新着記事-->
  <article class="p-sidebar-new">
    <h2 class="p-sidebar__title">
      <svg class="c-svg p-sidebar__title-icon" width="24" height="24">
        <use xlink:href="<?php echo esc_url(get_template_directory_uri());  ?>/img/svg/sprite.min.svg#icon-sidebar03" />
      </svg>
      新着記事
    </h2>
    <div class="p-sidebar-new__cards">
      <?php
        $args = array(
          'post_type' => 'news', 
          'posts_per_page' => 5,
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $my_posts = get_posts( $args );
        if ( $my_posts ) :

        foreach ( $my_posts as $post ) :
        setup_postdata( $post );
      ?>
      <a href="<?php the_permalink(); ?>" class="p-sidebar-new__card p-card-sidebar">
        <div class="p-card-sidebar__thumbnail">
          <?php
            if(has_post_thumbnail()) {
              the_post_thumbnail('full', array(
                'class' => 'p-card-sidebar__img lazyload'
              ));
            } else {
              echo '<img data-src="' . esc_url(get_template_directory_uri()) . '/img/common/blog01.jpeg" alt="記事の画像" class="p-card-sidebar__img lazyload">';
            }
          ?>
        </div>
        <div class="p-card-sidebar__body">
          <div class="p-card-sidebar__cats">
            <p class="p-card-sidebar__cat">
              <?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?>
            </p>
          </div>
          <h3 class="p-card-sidebar__title">
            <?php the_title(); ?>
          </h3>
          <time class="p-card-sidebar__time" datetime="<?php the_time('c'); ?>">
            <?php the_time('Y.n.j'); ?>
          </time>
        </div>
      </a>
      <?php
        endforeach;
        endif;
        wp_reset_postdata();
      ?>
    </div>
  </article>
  <!--新着記事-->
  <!--カテゴリーリスト-->
  <article class="p-sidebar-cats">
    <h2 class="p-sidebar__title">
      <svg class="c-svg p-sidebar__title-icon" width="24" height="24">
        <use xlink:href="<?php echo esc_url(get_template_directory_uri());  ?>/img/svg/sprite.min.svg#icon-sidebar03" />
      </svg>
      カテゴリー
    </h2>
    <ul class="p-sidebar-cats__list">
      <?php
        $blog_cats = get_terms( 'genre', array(
          'hide_empty' => false
        ));
        foreach ( $blog_cats as $blog_cat ) :
      ?>
      <li class="p-sidebar-cats__item">
        <a href="<?php echo esc_url(get_term_link($blog_cat->slug, 'genre')); ?>" class="p-sidebar-cats__link">
          <?php echo esc_html( $blog_cat->name ); ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </article>
  <!--/カテゴリーリスト-->
</aside>
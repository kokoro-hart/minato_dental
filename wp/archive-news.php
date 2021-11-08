
    <?php get_header(); ?>

    <main class="p-news">
      <!--メインビジュアル-->
      <section class="p-lower-mv">
        <picture class="p-lower-mv__picture">
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-blog_sp.webp" media="(max-width: 767px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-blog_pc.webp" media="(min-width: 768px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/mv-blog_sp.jpeg" media="(max-width: 767px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/mv-blog_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="スタッフブログ">
        </picture>
        <div class="p-lower-mv__contents">
          <h2 class="p-lower-mv__heading">お知らせ</h2>
          <p class="p-lower-mv__lead">NEWS</p>
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
      <!--スタッフブログ-->
      <section class="p-archive l-lower l-archive">
        <div class="p-archive__inner l-archive__inner l-inner">
          <!--メインエリア-->
          <main class="p-archive-main l-archive__main">
            <article class="p-archive-main__cards">
              <?php
                $args = array(
                  'post_type' => 'news', 
                  'posts_per_page' => 10,
                  'orderby' => 'date',
                  'order' => 'DESC',
                  'paged' => get_query_var('paged')
                );
                $my_posts = get_posts( $args );
                if ( $my_posts) :

                foreach ( $my_posts as $post ) :
                setup_postdata( $post );
              ?>
              <a href="<?php the_permalink(); ?>" class="p-archive-main-card">
                <div class="p-archive-main-card__thumbnail">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail('small', array(
                        'class' => 'p-archive-main-card__img lazyload'
                      ));
                    } else {
                      echo '<img data-src="' . esc_url(get_template_directory_uri()) . '/img/common/blog01.jpeg" alt="記事の画像" class="p-archive-main-card__img lazyload">';
                    }
                  ?>
                </div>
                <div class="p-archive-main-card__body">
                  <div class="p-archive-main-card__cats">
                    <p class="p-archive-main-card__cat">
                      <?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?>
                    </p>
                  </div>
                  <h3 class="p-archive-main-card__title">
                    <?php the_title(); ?>
                  </h3>
                  <time class="p-archive-main-card__time" datetime="<?php the_time('c'); ?>">
                    <?php the_time('Y.n.j'); ?>
                  </time>
                </div>
              </a>
              <?php
                endforeach;
                endif;
                wp_reset_postdata();
              ?>
            </article>

            <!--ページネーション-->
              <?php my_pagination() ?>
            <!--/ページネーション-->
          </main>
          <!--/メインエリア-->

          <!--サイドバー-->
          <?php get_template_part('includes/sidebar-news'); ?>
          <!--サイドバー-->
        </div>
      </section>
      <!--/スタッフブログ-->
    </main>
    
    <?php get_footer(); ?>
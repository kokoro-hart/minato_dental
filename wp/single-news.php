
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
      <section class="p-single l-lower l-archive">
        <div class="p-single__inner l-archive__inner l-inner">
          <!--メインエリア-->
          <main class="p-single__main l-archive__main">
            <h2 class="p-single__title">
              <?php the_title(); ?>
            </h2>
            <div class="p-single__meta">
              <time class="p-single__date" datetime="<?php the_time('c'); ?>">
                <?php the_time('Y.n.j'); ?>
              </time>
              <?php
                $blog_cats = get_the_terms($post->ID,'genre');
                foreach( $blog_cats as $blog_cat ) :
              ?>
              <a href="<?php echo esc_url(get_term_link($blog_cat->slug, 'genre')); ?>" class="p-single__cat">
                <?php echo esc_html($blog_cat->name); ?>
              </a>
              <?php endforeach; ?>
            </div>
            <div class="p-single__content">
              <?php the_content(); ?>
            </div>

            <!--ページネーション-->
            <?php
              $prev_post = get_previous_post(); // 前の投稿を取得
              $next_post = get_next_post(); // 次の投稿を取得
            ?>
            <div class="p-single__pagination c-pagination">
              <?php if ($next_post) : ?>
                <div class="prev page-numbers">
                  前の記事へ
                  <svg class="c-svg c-pagination__arrow c-pagination__arrow--prev" width="16" height="16">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#arrow-next" />
                  </svg>
                  <?php next_post_link('%link'); ?>
                </div>
              <?php endif; ?>

              <a class="p-single__pagination-button" href="<?php echo esc_url(home_url('/news')); ?>">記事一覧</a>

              <?php if ($prev_post) : ?>
                <div class="next page-numbers">
                  次の記事へ
                  <svg class="c-svg c-pagination__arrow c-pagination__arrow--next" width="16" height="16">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#arrow-prev" />
                  </svg>
                  <?php previous_post_link('%link'); ?>
                </div>
              <?php endif; ?>
            </div>
            <!--ページネーション-->

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
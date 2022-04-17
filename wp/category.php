<?php get_header(); ?>

<main>
      <!--メインビジュアル-->
      <section class="p-lower-mv">
        <picture class="p-lower-mv__picture">
          <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/mv-blog_sp.webp" media="(max-width: 767px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/mv-blog_pc.webp" media="(min-width: 768px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/mv-blog_sp.jpeg" media="(max-width: 767px)" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/mv-blog_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="お知らせ">
        </picture>
        <div class="p-lower-mv__contents">
          <h2 class="p-lower-mv__heading">スタッフブログ</h2>
          <p class="p-lower-mv__lead">STAFF BLOG</p>
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
                if(have_posts()) :
                while(have_posts()) : the_post();
                $category = get_the_category();
              ?>
              <a href="<?php the_permalink(); ?>" class="p-archive-main__card p-card-archive">
                <div class="p-card-archive__thumbnail">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail('full', array(
                        'class' => 'p-card-archive__img lazyload'
                      ));
                    } else {
                      echo '<img data-src="' . esc_url(get_template_directory_uri()) . '<?php echo esc_url(get_template_directory_uri()); ?>/img/common/blog01.jpeg" alt="記事の画像" class="p-card-archive__img lazyload">';
                    }
                  ?>
                </div>
                <div class="p-card-archive__body">
                  <div class="p-card-archive__cats">
                    <?php if($category[0]) : ?>
                    <p class="p-card-archive__cat">
                      <?php echo $category[0]->cat_name; ?>
                    </p>
                    <?php endif; ?>
                  </div>
                  <h3 class="p-card-archive__title">
                    <?php the_title(); ?>
                  </h3>
                  <time class="p-card-archive__time" datetime="<?php the_time('c'); ?>">
                    <?php the_time('Y.n.j'); ?>
                  </time>
                </div>
              </a>
              <?php
                endwhile;
                endif;
              ?>
            </article>

            <!--ページネーション-->
            <?php my_pagination(); ?>
            <!--/ページネーション-->
          </main>
          <!--/メインエリア-->
          <!--サイドバー-->
          <?php get_template_part('includes/sidebar-blog') ?>
          <!--サイドバー-->
        </div>
      </section>
      <!--/スタッフブログ-->
    </main>

<?php get_footer(); ?>
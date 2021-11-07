
    <?php get_header(); ?>

    <main class="p-blog">
      <!--メインビジュアル-->
      <section class="p-lower-mv">
        <picture class="p-lower-mv__picture">
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-blog_sp.webp" media="(max-width: 767px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-blog_pc.webp" media="(min-width: 768px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/mv-blog_sp.jpeg" media="(max-width: 767px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/mv-blog_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="スタッフブログ">
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
          <ul class="c-breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a class="c-breadcrumb__link" itemprop="item" href="/"><span itemprop="name">ホーム</span></a>
              <meta itemprop="position" content="1" />
            </li>
            <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a class="c-breadcrumb__link" itemprop="item" href="/blog/"><span itemprop="name">スタッフブログ</span></a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
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
                    'post_type' => 'blog', 
                    'posts_per_page' => 10,
                    'orderby' => 'date',
                    'order' => 'DESC'
                  );
                  $my_posts = get_posts( $args );
                  if ( $my_posts ) :

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
            <?php if(paginate_links()): ?>
            <div class="p-archive-main__pagination c-pagination">
              <?php
                echo 
                paginate_links(array(
                  'end_size' => 1,
                  'mid_size' => 1,
                  'prev_next' => true,
                  'next_text' => '<svg height="16" width="16" class="c-pagination__arrow c-pagination__arrow--next" xmlns="http://www.w3.org/2000/svg"><path d="M7.999 0a8 8 0 11-8 8 8 8 0 018-8zm-.932 4.632l2.436 2.335H3.612a.772.772 0 00-.775.77v.516a.772.772 0 00.774.774h5.89l-2.434 2.34a.775.775 0 00-.013 1.106l.355.352a.771.771 0 001.094 0l4.281-4.277a.771.771 0 000-1.094L8.503 3.17a.771.771 0 00-1.094 0l-.355.352a.779.779 0 00.013 1.11z" fill="#fff"/></svg>次へ',
                  'prev_text' => '<svg height="16" width="16" class="c-pagination__arrow c-pagination__arrow--prev" xmlns="http://www.w3.org/2000/svg"><path d="M7.999 15.999a8 8 0 118-8 8 8 0 01-8 8zm.932-4.632L6.496 9.032h5.89a.772.772 0 00.774-.774v-.521a.772.772 0 00-.774-.774h-5.89l2.436-2.331a.775.775 0 00.013-1.106l-.355-.352a.771.771 0 00-1.094 0l-4.28 4.277a.771.771 0 000 1.094l4.281 4.281a.771.771 0 001.094 0l.355-.352a.775.775 0 00-.014-1.107z" fill="#fff"/></svg>前へ',
                ));
              ?>
            </div>
            <?php endif;?>
            <!--/ページネーション-->
          </main>
          <!--/メインエリア-->

          <!--サイドバー-->
          <?php get_template_part('includes/sidebar-blog'); ?>
          <!--サイドバー-->
        </div>
      </section>
      <!--/スタッフブログ-->
    </main>
    
    <?php get_footer(); ?>
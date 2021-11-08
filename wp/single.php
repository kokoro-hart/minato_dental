
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
              <a class="c-breadcrumb__link" itemprop="item" href="/blog/"><span itemprop="name">お知らせ</span></a>
              <meta itemprop="position" content="2" />
            </li>
            <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a class="c-breadcrumb__link" itemprop="item" href="/single/"><span itemprop="name">記事のタイトル</span></a>
              <meta itemprop="position" content="3" />
            </li>
          </ul>
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
              <?php $category = get_the_category(); ?>
              <?php if($category[0]) : ?>
              <a href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>" class="p-single__cat">
                <?php echo $category[0]->cat_name; ?>
              </a>
              <?php endif; ?>
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

              <a class="p-single__pagination-button" href="<?php echo esc_url(home_url('/blog')); ?>">記事一覧</a>

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
          <?php get_template_part('includes/sidebar-blog'); ?>
          <!--サイドバー-->
        </div>
      </section>
      <!--/スタッフブログ-->
    </main>
    
    <?php get_footer(); ?>
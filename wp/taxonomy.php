
    <?php get_header(); ?>

    <main>
      <!--メインビジュアル-->
      <section class="p-lower-mv">
        <picture class="p-lower-mv__picture">
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-blog_sp.webp" media="(max-width: 767px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-blog_pc.webp" media="(min-width: 768px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/mv-blog_sp.jpeg" media="(max-width: 767px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/mv-blog_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="お知らせ">
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
              $term_object = get_queried_object(); // タームオブジェクトを取得
	            $term_slug   = $term_object->slug; // タームスラッグ
                $custom_posts = get_posts(array(
                    'post_type' => 'news', // 投稿タイプ
                    'posts_per_page' => -1, // 表示件数
                    'orderby' => 'date', // 表示順の基準
                    'order' => 'DESC', // 昇順・降順
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'genre', //タクソノミーを指定
                        'field' => 'slug', //ターム名をスラッグで指定する
                        'terms' => $term_slug, //表示したいタームをスラッグで指定
                        'operator' => 'IN'
                      ),
                    )
                ));
                global $post;
                if($custom_posts): 
                foreach($custom_posts as $post): setup_postdata($post); 
              ?>                  

              <a href="<?php the_permalink(); ?>" class="p-archive-main__card p-card-archive">
                <div class="p-card-archive__thumbnail">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail('small', array(
                        'class' => 'p-card-archive__img lazyload'
                      ));
                    } else {
                      echo '<img data-src="' . esc_url(get_template_directory_uri()) . '/img/common/blog01.jpeg" alt="記事の画像" class="p-card-archive__img lazyload">';
                    }
                  ?>
                </div>
                <div class="p-card-archive__body">
                  <div class="p-card-archive__cats">
                    <p class="p-card-archive__cat">
                      <?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?>
                    </p>
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
                endforeach; wp_reset_postdata(); 
                endif; 
              ?>
            </article>  
            <!--ページネーション-->
            <?php my_pagination(); ?>
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
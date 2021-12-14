<?php

// 初期設定
//--------------------------------------------------------------------------------------

function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( 
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

//css jsの読み込み
function my_script_init()
{
  //swiper
  if( is_front_page() || is_page('staff')) {
    wp_enqueue_style('swiper-css', '//unpkg.com/swiper/swiper-bundle.min.css', 'all');
    wp_enqueue_script('swiper-js','//unpkg.com/swiper/swiper-bundle.min.js', true);
  }

  //my
  wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('my', get_template_directory_uri() . '/js/bundle.js', array(), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'my_script_init');

// フィルターフック
//--------------------------------------------------------------------------------------
//lazyload対象のアイキャッチはsrcをdata-srcに置き換える
function my_post_image_html( $html, $post_id, $post_image_id ) {

  //遅延読み込み対象の画像のみ
  if(strpos($html, 'lazyload') === false) {
      return $html;
  }

  //srcをdata-srcに置換する
  $html = str_replace('src="', 'data-src="', $html);
  return $html;
}
add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

//javascriptの遅延defer属性を追加
function scriptLoader($script, $handle, $src) {
	if (is_admin()) {
		return $script;
	}
	$script = sprintf('<script src="%s" type="text/javascript" defer=""></script>' . "\n", $src);
	return $script;
}
add_filter('script_loader_tag', 'scriptLoader', 10, 5);


//カテゴリ説明欄でhtmlを記述可能にする
remove_filter( 'pre_term_description', 'wp_filter_kses' );

//フォーム設置ページのみContactForm7のcss、jsを読み込み
add_action( 'wp', function() {
  if ( is_page( 'contact' ) || is_page( 'reserve' ) ) return;
  add_filter( 'wpcf7_load_js', '__return_false' );
  add_filter( 'wpcf7_load_css', '__return_false' );
});

function change_title_separator( $sep ){
  $sep = ' | ';
  return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );

// 独自関数
//--------------------------------------------------------------------------------------
//ナビゲーションのカレント
function check($param) {
  switch(true) {
    case is_post_type_archive($param);
    case is_page($param);
    case is_singular($param);
    case $param === 'contact' && is_page('contact-thanks'); 
    echo 'is-current';
    break;
  }
}

//記事一覧のページネーション
function my_pagination()
{
  if(paginate_links()) {
    echo 
    '<div class="p-archive-main__pagination c-pagination">' .
    paginate_links(array(
      'end_size' => 1,
      'mid_size' => 1,
      'prev_next' => true,
      'next_text' => '<svg height="16" width="16" class="c-pagination__arrow c-pagination__arrow--next" xmlns="http://www.w3.org/2000/svg"><path d="M7.999 0a8 8 0 11-8 8 8 8 0 018-8zm-.932 4.632l2.436 2.335H3.612a.772.772 0 00-.775.77v.516a.772.772 0 00.774.774h5.89l-2.434 2.34a.775.775 0 00-.013 1.106l.355.352a.771.771 0 001.094 0l4.281-4.277a.771.771 0 000-1.094L8.503 3.17a.771.771 0 00-1.094 0l-.355.352a.779.779 0 00.013 1.11z" fill="#fff"/></svg>次へ',
      'prev_text' => '<svg height="16" width="16" class="c-pagination__arrow c-pagination__arrow--prev" xmlns="http://www.w3.org/2000/svg"><path d="M7.999 15.999a8 8 0 118-8 8 8 0 01-8 8zm.932-4.632L6.496 9.032h5.89a.772.772 0 00.774-.774v-.521a.772.772 0 00-.774-.774h-5.89l2.436-2.331a.775.775 0 00.013-1.106l-.355-.352a.771.771 0 00-1.094 0l-4.28 4.277a.771.771 0 000 1.094l4.281 4.281a.771.771 0 001.094 0l.355-.352a.775.775 0 00-.014-1.107z" fill="#fff"/></svg>前へ',
    ))
    .'</div>';
  }
}

//カスタム投稿 カスタム分類
//--------------------------------------------------------------------------------------
add_action('init', function() {
  //スタッフブログ
  register_post_type('news', [
    'label' => 'お知らせ',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail','title','editor','custom-fields'],
    'has_archive' => true,
    'show_in_rest' =>true,
    'exclude_from_search' => true,
  ]);

  register_taxonomy('genre', 'news',[
    'label' => 'ニュースカテゴリ',
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);

  //診療案内
  register_post_type('plan', [
    'label' => '診療案内',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail','title','editor','custom-fields'],
    'has_archive' => true,
    'show_in_rest' =>true,
  ]);

  register_taxonomy('medical', 'plan',[
    'label' => '診療種別',
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);

  //スタッフ紹介
  register_post_type('staffs', [
    'label' => 'スタッフ紹介',
    'public' => true,
    'menu_position' => 6,
    'supports' => ['thumbnail','title','editor','custom-fields'],
    'has_archive' => true,
    'show_in_rest' =>true,
  ]);

  register_taxonomy('staff', 'staffs',[
    'label' => '役職',
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
});

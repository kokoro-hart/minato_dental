<?php

//セットアップ
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

function change_title_separator( $sep ){
  $sep = ' | ';
  return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );


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

//ナビゲーションのカレント
function check($param) {
  switch(true) {
    case is_post_type_archive($param);
    case is_page($param);
    case is_singular($param);
    case $param === 'blog' && is_tax();
    echo 'is-current';
    break;
  }
}

//カテゴリ説明欄でhtmlを記述可能にする
remove_filter( 'pre_term_description', 'wp_filter_kses' );


//カスタム投稿タイプ カスタム分類
add_action('init', function() {
  //スタッフブログ
  register_post_type('blog', [
    'label' => 'スタッフブログ',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail','title','editor','custom-fields'],
    'has_archive' => true,
    'show_in_rest' =>true,
    'exclude_from_search' => true,
  ]);

  register_taxonomy('genre', 'blog',[
    'label' => 'ブログカテゴリー',
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


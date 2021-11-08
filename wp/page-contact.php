
    <?php get_header(); ?>

    <main class="page-contact">
      <!--メインビジュアル-->
      <section class="p-lower-mv">
        <picture class="p-lower-mv__picture">
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-contact_sp.webp" media="(max-width: 767px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-contact_pc.webp" media="(min-width: 768px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/mv-contact_sp.jpeg" media="(max-width: 767px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/mv-contact_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="お問い合わせ">
        </picture>
        <div class="p-lower-mv__contents">
          <h2 class="p-lower-mv__heading">お問い合わせ</h2>
          <p class="p-lower-mv__lead">CONTACT</p>
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
      <section class="p-contact l-lower">
        <div class="l-inner">
          <p class="p-contact__intro">
            お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>
            以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>
            また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
            <span class="u-color-red">※3営業日以内に当院からの返信がない場合には、お電話(<a href="tel:0312345678">TEL 03-1234-5678</a>)にてお問い合わせ下さい。</span>
          </p>
          <div class="p-contact__title-wrapper">
            <h2 class="c-section-title">お問い合わせ<br class="u-hidden-md-up">フォーム</h2>
          </div>
          <div class="l-lower-form">
            <!--コンタクトフォーム-->
            <?php the_content(); ?>
            <!--/コンタクトフォーム-->
          </div>
        </div>
      </section>
    </main>
    
    <?php get_footer(); ?>
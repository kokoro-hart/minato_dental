
    <?php get_header(); ?>

    <main class="p-reserve">
      <!--メインビジュアル-->
      <section class="p-lower-mv">
        <picture class="p-lower-mv__picture">
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-contact_sp.webp" media="(max-width: 767px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-contact_pc.webp" media="(min-width: 768px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/mv-contact_sp.jpeg" media="(max-width: 767px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/mv-contact_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="WEB予約">
        </picture>
        <div class="p-lower-mv__contents">
          <h2 class="p-lower-mv__heading">WEB予約</h2>
          <p class="p-lower-mv__lead">RESERVE</p>
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
              <a class="c-breadcrumb__link" itemprop="item" href="/reserve/"><span itemprop="name">WEB予約</span></a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </div>
      <!--/パンくずリスト-->
      <section class="p-contact l-lower">
        <div class="l-inner">
          <div class="p-contact-info">
            <h2 class="p-contact-info__title">お電話でのご予約/ご相談</h2>
            <a href="tel:03-1234-5678" class="p-contact-info__tel">
              <svg class="c-svg p-contact-info__tel-icon" width="28" height="28">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-tel" />
              </svg>
              03-1234-5678
              <p class="p-contact-info__time">(年中無休 AM9:00〜PM22:00)</p>
            </a>
            <p class="p-contact-info__text">
              お急ぎの方は電話での連絡がスムーズです。<br>
              混雑状況によっては当日受診をご利用いただけない場合がございます。<br>
              あらかじめご了承ください。
            </p>
            <h2 class="p-contact-info__title">メールでのご予約/ご相談</h2>
            <p class="p-contact-info__text">
              【ご予約に関しての注意点】<br>
              メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
              ※24時間以内に当院からの返信がない場合には、お電話(<a href="tel:0312345678">TEL03-1234-5678</a>)にてお問い合わせ下さい。
            </p>
          </div>
          <div class="p-contact__title-wrapper">
            <h2 class="c-section-title">予約フォーム</h2>
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
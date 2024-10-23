<?php get_header(); ?> <!-- ヘッダーを読み込む -->



<!-- メインビジュアル -->
<section class="main__visual" id="main__visual">
  <div class="main__visual-img">
    <h2 class="main__visual-txt container">
      安心と革命が出会う場所。<br />A-innovativeで見つける新しい未来。
    </h2>
  </div>
</section>
<!-- greeting あいさつ -->
<section class="greeting container">
  <h3 class="section__title--en">Greetings</h3>
  <p class="section__title--jp">あいさつ</p>

  <div class="greeting__item">
    <div claass="greeting__item-img">
      <img src="./assets/images/greeting/greeting.jpg" alt="" />

      <img src="<?php echo esc_url(get_theme_file_uri('images/greeting/greeting.jpg')); ?>" alt="" />
    </div>
    <div class="greeting__item-body">
      <p class="greeting__item-body-title">私たちが提供できる価値</p>
      <p class="greeting__item-body-txt">
        ここにはテキストが入ります。テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、
      </p>
    </div>
  </div>
</section>
<!-- banner -->
<div class="banner js-fade" id="banner">
  <div class="banner__mask"></div>
  <div class="banner__img">
    <p class="banner__txt">
      Find a new future<br />
      with Innovate.
    </p>
  </div>
</div>
<!-- service -->
<section class="service container" id="service">
  <h2 class="section__title--en">Service</h2>
  <p class="section__title--jp">事業内容</p>

  <div class="service__item">
    <!-- 1つ目 -->
    <div class="service__item-body">
      <div class="service__item-content">
        <h3 class="service__item-body-title">不動産事業</h3>
        <p class="service__item-body-txt">
          ここにはテキストが入りますここにはテキストが入りますここにはテキストが入ります </p>


        <a href="/service/#service__item01" class=" button service__item-btn">More</a>

      </div>

      <div class="service__img">

        <img src="<?php echo esc_url(get_theme_file_uri('images/service/service1.jpg')); ?>" alt="" />
      </div>
    </div>
    <!-- 2つ目 -->
    <div class="service__item-body">
      <div class="service__item-content">
        <h3 class="service__item-body-title">コンサル事業</h3>
        <p class="service__item-body-txt">
          ここにはテキストが入りますここにはテキストが入りますここにはテキストが入ります
        </p>
        <a href="/service/#service__item02" class=" button service__item-btn">More</a>
      </div>

      <div class="service__img">

        <img src="<?php echo esc_url(get_theme_file_uri('images/service/service2.jpg')); ?>" alt="" />
      </div>
    </div>
  </div>
  <!-- 3つ目 -->
  <div class="service__item-body">
    <div class="service__item-content">
      <h3 class="service__item-body-title">カーシェア事業</h3>
      <p class="service__item-body-txt">
        ここにはテキストが入りますここにはテキストが入りますここにはテキストが入ります
      </p>
      <a href="/service/#service__item03" class=" button service__item-btn">More</a>
    </div>

    <div class="service__img">

      <img src="<?php echo esc_url(get_theme_file_uri('images/service/service3.jpg')); ?>" alt="" />
    </div>
  </div>
  </div>
</section>

<!-- news -->
<?php get_template_part('parts/news'); ?>




<!-- company -->
<section class="company" id="company">
  <div class="company__area">
    <div class="company__container container">
      <h2 class="section__title--en">Company</h2>
      <p class="section__title--jp">会社情報</p>

      <div class="company__item">
        <div class="company__item-corp-name">会社名</div>
        <div class="company__item-corp-address">住所</div>
        <div class="company__item-corp-number">電話番号</div>
        <div class="company__item--orp-ceoname">代表者名</div>


        <a href="/company/" class=" button company__btn">More</a>


      </div>
    </div>
  </div>
</section>
<!-- contact -->
<section class="contact__information" id="contact">
  <div class="container contact__container">
    <h2 class="section__title--en">Contact</h2>
    <p class="section__title--jp">お問い合わせはこちら</p>
  </div>

  <a href="/contact/" class="button contact__btn">CONTACT</a>
</section>


<?php get_footer(); ?> <!-- フッターを読み込む -->
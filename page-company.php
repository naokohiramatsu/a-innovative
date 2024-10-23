<?php get_header(); ?> <!-- ヘッダーを読み込む -->
<!-- main -->
<main>
  <!--カバーー-->

  <div class="company-detail__cover">
    <div class="company__mask"></div>
    <div class="company__img">
      <p class="company__txt">
        Find a new future<br />
        with Innovate.
      </p>
    </div>
  </div>
  <!-- 起業理念 -->
  <section class="corporate-philosophy" id="corprate-philosophy">
    <div class="container philosophy__container">
      <div class="section">
        <h2 class="section__title--en">Corporate philosophy</h2>
        <p class="section__title--jp">企業理念</p>
      </div>
      <div class="corporate-philosophy__item">
        <div class="corporate-philosophy__item-img">
          <img src="<?php echo esc_url(get_theme_file_uri('images/company-detail/corporate philosophy.jpg')); ?>" alt="" />
        </div>
        <div class="corporate-philosoph__item-body">
          <div class="corporate-philosoph__item-body--txt">
            ここにはテキストが入りますここにはテキストが入りますここにはテキストが入りますここにはテキストが入りますここには
            テキストが入りますここにはテキストが入ります
          </div>
        </div>
        <!-- corprate-philosophy__item-body -->
      </div>
      <!-- corprate-philosophy__item -->
    </div>
    <!-- container -->
  </section>
  <!-- ビジョン -->
  <section class="vison">
    <div class="container vison__container">
      <div class="section">
        <h2 class="section__title--en">Vison</h2>
        <p class="section__title--jp">ビジョン</p>
      </div>
      <div class="vison__item">
        <div class="vison__item--img">
          <img src="<?php echo esc_url(get_theme_file_uri('images/company-detail/vison.jpg')); ?>" alt="" />
        </div>
        <div class="vison__item-body">
          <div class="vison__item-body--txt">
            ここにはテキストが入りますここにはテキストが入りますここにはテキストが入りますここにはテキストが入りますここには
            テキストが入りますここにはテキストが入ります
          </div>
        </div>
        <!-- vison__item-body -->
      </div>
      <!-- vison__item -->
    </div>
    <!-- container -->
  </section>
  <!--会社概要 -->
  <section class="company-info">
    <div class="container company-info__container">
      <div class="section">
        <h2 class="section__title--en">Company-information</h2>
        <p class="section__title--jp">会社概要</p>
      </div>
      <div class="company-info__item">
        <table id="company__info--table">
          <tr>
            <th>商号</th>
            <td></td>
          </tr>
          <tr>
            <th>創業</th>
            <td>　　20ｘｘ年１０月３０日</td>
          </tr>
          <tr>
            <th>設立</th>
            <td>　20ｘｘ年３月</td>
          </tr>
          <tr>
            <th>本社所在地</th>
            <td>
              〒000-0000 〇〇県〇〇市〇〇区×丁目00ー0 〇〇ビル　５階　508号
            </td>
          </tr>
          <tr>
            <th>TEL</th>
            <td>00-0000-0000</td>
          </tr>
          <tr>
            <th>代表者</th>
            <td>代表取締役兼社長執行役員　〇〇　〇〇</td>
          </tr>
          <tr>
            <th>従業員数</th>
            <td>〇名（2023年12月31日現在）</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>・不動産事業　・コンサル事業</td>
          </tr>
        </table>
      </div>
      <!-- company-info__item -->
    </div>
    <!-- container -->
  </section>
  <section class="access">
    <div class="container access__container">
      <div class="section">
        <h2 class="section__title--en">Access</h2>
        <p class="section__title--jp">アクセス</p>
      </div>
      <div class="access__item">
        <div class="access__item--img">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4229.443995704712!2d139.70078891221772!3d35.659034872480056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sja!2sjp!4v1725857465686!5m2!1sja!2sjp"
            width="500"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="access__item-body">
          <table id="access__info--table">
            <tr>
              <th class="access__detail">・アクセス</th>
              <td>〒000-0000<br />住所が入ります）</td>
            </tr>
            <tr>
              <th>・電車の場合</th>
              <td>
                〇〇駅直結地下街〇〇方面へ<br />
                東10番出口で出て直ぐ
              </td>
            </tr>
            <tr>
              <th>・お車の場合</th>
              <td>〇〇高速　錦橋出口から約5分</td>
            </tr>
            <tr>
              <th>・電話番号</th>
              <td>TEL:00-0000-0000　FAX:00-0000-0000</td>
            </tr>
          </table>
          <div>
            <a
              href="https://www.google.com/maps/"
              class="button googlemap__btn">Google Map</a>
          </div>
        </div>
        <!-- access__item-body -->
      </div>
      <!-- access__item -->
    </div>
    <!-- container -->
  </section>
  <!-- contact -->
  <section class="contact__information" id="contact">
    <div class="container contact__container">
      <h2 class="section__title--en">Contact</h2>
      <p class="section__title--jp">お問い合わせはこちら</p>
    </div>
    <a href="/contact/" class="button contact__btn">CONTACT</a>
  </section>
</main>
<?php get_footer(); ?> <!-- フッターを読み込む -->
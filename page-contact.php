<?php get_header(); ?> <!-- ヘッダーを読み込む -->
<section class="contact" id="contact">

  <div class="container contact__form--container">
    <div class="section">
      <h2 class="section__title--en">Contact</h2>
      <p class="section__title--jp">お問い合わせはこちら</p>
    </div>
    <div class="contact__form-area"> <?php echo do_shortcode('[contact-form-7 id="903ee4d" title="お問い合わせ"]'); ?> <div class="btn contact__form--btn">
        <input type="submit" value="入力内容を確認する" />
      </div>
    </div>
  </div>
</section>
</div>
</section>
<?php get_footer(); ?> <!-- フッターを読み込む -->
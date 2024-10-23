<?php get_header(); ?> <!-- ヘッダーを読み込む -->

<main>
  <div class="container news__detail" id="news__detail">

    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- main-news -->

        <div class="news__detail-item-area">
          <p class="news__detail-title"><?php the_title(); ?></p>
          <div class="news__detail-date"><?php echo get_the_date(); ?></div>
        </div>


        <div class="news__detail-txt">
          <?php the_content(); ?>
        </div>


    <?php endwhile;
    endif; ?>




  </div>
</main>


<?php get_footer(); ?> <!-- フッターを読み込む -->
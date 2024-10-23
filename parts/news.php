<!-- news -->
<section class="news container" id="news">
    <h2 class="section__title--en">News</h2>
    <p class="section__title--jp">最新情報</p>
    <div class="news__item">
        <?php
        // WP_Queryを使って投稿を2つに制限
        $args = array(
            'posts_per_page' => 2, // 1ページに表示する投稿数
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        );
        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()): ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

                <a href="<?php the_permalink(); ?>">
                    <!-- News 1つ目 -->
                    <div class="news__item-body">
                        <div class="news__img"> <?php
                                                if (has_post_thumbnail()) {
                                                    // アイキャッチ画像を表示する
                                                    //the_post_thumbnail();
                                                    the_post_thumbnail('thumbnail', array('class' => 'thumbnail'));
                                                } else {
                                                    // 代替画像を表示する
                                                    echo '<img src="/images/news-detail/news-big_01.jpg alt="" />';
                                                }
                                                ?> </div>
                        <div class="news__item-body-description">
                            <div class="news__item-body-title-group">
                                <p class="news__item-body-title"><?php the_title(); ?></p>
                                <div class="news__date"><?php the_time('Y-m-d'); ?></div>
                            </div>
                            <p class="news__item-body-txt"> <?php the_excerpt(); ?> </p>
                        </div>
                    </div>
                </a> <?php endwhile; ?> <!-- ページネーションの表示 -->
            <div class="pagination"> <?php if (function_exists('wp_pagenavi')) {
                                            wp_pagenavi(array(
                                                'next_text' => '→',
                                                'prev_text' => '←'
                                            ));
                                        }
                                        ?> </div> <?php else: ?> <p>投稿がありません。</p> <?php endif; ?>
        <?php wp_reset_postdata(); // クエリをリセットする 
        ?>
    </div>
</section>
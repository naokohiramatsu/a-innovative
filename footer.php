<!-- footer -->
<footer class="footer" id="footer">
  <div class="footer__area container">
    <div class="footer__logo">
      <img src="<?php echo esc_url(get_theme_file_uri('./images/footer/footer-logo.svg')); ?>" alt="" />
    </div>

    <div class="footer__item">
      <div class="footer__item--left">
        <p class="corp__name">A-innovate</p>
        <p class="corp__address">住所がここに入ります。</p>
        <p class="corp__phone--number">TEL 00-0000-0000</p>
      </div>

      <div class="footer__item--right">
        <nav>
          <ul class="footer__sns">
            <li>
              <a href="#"><i class="bi bi-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="bi bi-youtube"></i></a>
            </li>
            <li>
              <a href="#"><i class="bi bi-twitter"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <p class="footer__bottom-text">
    Copyright © 2024 A-innovative All rights reserved.
  </p>
</footer>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo get_stylesheet_uri(); ?>/js/main.js"></script>


<?php wp_footer(); ?> <!-- WordPressのフッター処理 -->
</body>

</html>
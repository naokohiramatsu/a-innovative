<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:type" content=" LP" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">


  <?php wp_head(); ?> <!-- WordPressのヘッダー処理 -->
</head>

<body>
  <!-- ヘッダー -->
  <header class="header">
    <h1 class="header__logo">
      <a href="#">

        <img src="<?php echo esc_url(get_theme_file_uri('images/header/header-logo.svg')); ?>" alt="" />
      </a>
    </h1>
    <!-- ハンバーガーボタン -->
    <button type="button" class="hamburger__btn">
      <i class="bi bi-list"></i>
    </button>
    <!-- ナビゲーション -->
    <nav class="hamburger__menu header__nav">
      <li><a href="<?php echo esc_url(home_url()); ?>/index/#">Top</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/index/#service">Service</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/index/#company">Company</a></li>
      <li><a href="./contact/">Contact</a></li>
    </nav>
  </header>
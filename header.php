<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>

</head>

<body>
  <header>
    <a href="<?php bloginfo('url'); ?>">
      <h1>SARAH</h1>
      <h1>MEADOWS</h1>
    </a>

    <nav>
      <?php
      $defaults = array(
        'container' => false,
        'theme-location' => 'primary-menu',
        'menu_class' => 'no-bullet'
      );

      wp_nav_menu( $defaults );

      ?>
    </nav>
  </header>

<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {

  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' )
    )
  );

}
add_action( 'init', 'register_theme_menus' );

function osk_theme_styles() {

  wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');

  wp_enqueue_style('roboto_font', 'https://fonts.googleapis.com/css?family=Roboto+Mono:400,100,700italic,700,500italic,500,400italic,300italic,300,100italic');

  wp_enqueue_style('main_css', get_template_directory_uri() . '/css/styles.css');

}

add_action( 'wp_enqueue_scripts', 'osk_theme_styles' );

function osk_theme_js() {

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', '', '', true );

}

add_action( 'wp_enqueue_scripts', 'osk_theme_js' );

?>

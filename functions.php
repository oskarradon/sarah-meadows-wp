<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'post-size', 200, 200 );

function wpt_excerpt_length( $length ) {
	return 16;
}
add_filter( 'excerpt_length', 'wpt_excerpt_length', 999 );

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Primary Menu', 'sarah-meadows' )
		)
	);

}
add_action( 'init', 'register_theme_menus' );


function wpt_theme_styles() {

	// wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Roboto+Mono:400,500,500italic' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

function wpt_theme_js() {

	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );



?>

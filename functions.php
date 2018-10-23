<?php
$header = 'one';
$footer = 'one';
add_action('wp_enqueue_scripts', 'enqueue_main_styles',100);
function enqueue_main_styles() {
  wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/dist/css/normalize.css');
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/dist/css/style.css');
  wp_enqueue_style('ssicons', get_stylesheet_directory_uri() . '/dist/font/ssicons/icons.css');
  wp_enqueue_style('gfonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700');

}

add_action('after_setup_theme','hh_setup_theme');
function hh_setup_theme(){
  add_theme_support( 'post-thumbnails' );
	add_theme_support('custom-logo');
	add_theme_support('title-tag');
}

require_once __DIR__.'/inc/theme.php';

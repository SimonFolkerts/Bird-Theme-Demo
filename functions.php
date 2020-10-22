<?php


if (!function_exists('birds_setup')) :

  function birds_setup()
  {
    add_theme_support('post-thumbnails');
    register_nav_menus(
      array(
        'header-menu' => __('Header Menu'),
      )
    );
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
  }
endif;
add_action('after_setup_theme', 'birds_setup');

function add_theme_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

function mytheme_custom_excerpt_length($length)
{
  return 15;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);


require_once get_template_directory() . '/inc/custom_post_types.php';
require_once get_template_directory() . '/inc/custom_taxonomies.php';

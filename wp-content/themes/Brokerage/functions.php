<?php
/**
 * Brokerage Theme functions
 */

if (!defined('BROKERAGE_VERSION')) {
  define('BROKERAGE_VERSION', '1.0.0');
}



add_action('after_setup_theme', function () {
  // Let WP manage the <title>
  add_theme_support('title-tag');

  // Featured images
  add_theme_support('post-thumbnails');

  // HTML5 markup support
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

  // Custom logo
  add_theme_support('custom-logo', [
    'height'      => 60,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
  ]);

  // Menus
  register_nav_menus([
    'primary' => __('Primary Menu', 'brokerage'),
    'footer'  => __('Footer Menu', 'brokerage'),
  ]);
});

/**
 * Enqueue styles/scripts
 */
add_action('wp_enqueue_scripts', function () {
  // Main stylesheet (you can replace with your own build)
  wp_enqueue_style('brokerage-style', get_stylesheet_uri(), [], BROKERAGE_VERSION);

  // Optional: your own compiled CSS
  $main_css = get_template_directory_uri() . '/assets/css/main.css';
  if (file_exists(get_template_directory() . '/assets/css/main.css')) {
    wp_enqueue_style('brokerage-main', $main_css, ['brokerage-style'], BROKERAGE_VERSION);
  }

  // JS (for mobile menu toggle)
  wp_enqueue_script('brokerage-main', get_template_directory_uri() . '/assets/js/main.js', [], BROKERAGE_VERSION, true);
});

// Bootstrap 5 + Icons CDN
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'bootstrap-css',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
    [],
    '5.3.3'
  );

  wp_enqueue_style(
    'bootstrap-icons',
    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css',
    ['bootstrap-css'],
    '1.11.3'
  );

  wp_enqueue_script(
    'bootstrap-bundle',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
    [],
    '5.3.3',
    true
  );
});


/**
 * Add a class to the body for easier styling
 */
add_filter('body_class', function ($classes) {
  $classes[] = 'theme-brokerage';
  return $classes;
});
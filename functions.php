<?php
// Theme setup
function mytheme_setup() {
    // Enable title tag support
    add_theme_support('title-tag');

    // Enable post thumbnails
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

// Enqueue scripts and styles
function mytheme_scripts() {
    // Enqueue style
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());

    // Enqueue script
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');
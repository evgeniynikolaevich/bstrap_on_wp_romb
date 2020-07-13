<?php


add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // Ð¼Ð¾Ð¶Ð½Ð¾ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÑŒ ÑÑ‚Ð¾Ñ‚ Ñ…ÑƒÐº Ð¾Ð½ Ð±Ð¾Ð»ÐµÐµ Ð¿Ð¾Ð·Ð´Ð½Ð¸Ð¹
function theme_name_scripts() {

      wp_enqueue_script( 'fflanding-js', get_template_directory_uri() . '/assets/build/js/script.js');
      wp_enqueue_style('second-child-theme', get_stylesheet_directory_uri() .'/assets/build/css/styles.css');
};

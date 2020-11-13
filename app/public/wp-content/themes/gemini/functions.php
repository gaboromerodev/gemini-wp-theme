<?php
/**
 * Theme Functions.
 * 
 * @package Gemini
 */

//  echo '<pre>';
//  print_r( filemtime( get_template_directory() . '/style.css' ));
//  wp_die();
// The above is for test our functions

if (! defined( 'GEMINI_DIR_PATH') ) {
    define( 'GEMINI_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

// echo '<pre>';
// print_r( GEMINI_DIR_PATH ); Check if it print the DIR path
// wp_die();

if (! defined( 'GEMINI_DIR_URI' )) {
    define( 'GEMINI_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once GEMINI_DIR_PATH . '/inc/helpers/autoloader.php';

function gemini_get_theme_instance() {
    \GEMINI_THEME\Inc\GEMINI_THEME::get_instance();
}

gemini_get_theme_instance();

function gemini_enqueue_scripts() {
    
}

add_action( 'wp_enqueue_scripts', 'gemini_enqueue_scripts' );

?>
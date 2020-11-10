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

function gemini_enqueue_scripts() {
    // wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/main.css', ['stylesheet'] ); //This declare a dependency meaning it will load after style.css
    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true );

    wp_enqueue_style( 'style-css' );
    wp_enqueue_script( 'main-js' );

}

add_action( 'wp_enqueue_scripts', 'gemini_enqueue_scripts' );

?>
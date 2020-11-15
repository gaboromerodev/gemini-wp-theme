<?php
/**
 * Enqueue theme assets
 * 
 * @package Gemini
 */

 namespace GEMINI_THEME\Inc;

 use GEMINI_THEME\Inc\Traits\Singleton;

 class Assets {
     use Singleton;

     protected function __construct() {
        //  wp_die( ' Hello' ); // Check if loads
         //load class
         $this->setup_hooks();
     }

     protected function setup_hooks() {
        
        /**
         * Actions.
         */
        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ]);
        add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ]);
     }

     public function register_styles() {
        // Register Styles
        wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( GEMINI_DIR_PATH . '/style.css'), 'all');
        wp_register_style( 'bootstrap-css', GEMINI_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        //Enqueue Styles
        wp_enqueue_style( 'style-css' );
        wp_enqueue_style( 'bootstrap-css' );
     }

     public function register_scripts() {
        //Register Scripts
        wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true );
        wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true );

        //Enqueue Scripts
        wp_enqueue_script( 'main-js' );
        wp_enqueue_script( 'bootstrap-js' );

     }
 }
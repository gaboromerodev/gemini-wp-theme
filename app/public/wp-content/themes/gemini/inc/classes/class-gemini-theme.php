<?php
/**
 * Bootstraps the Theme
 * 
 * @package Gemini
 */

 namespace GEMINI_THEME\Inc;

 use GEMINI_THEME\Inc\Traits\Singleton;

 class GEMINI_THEME {
     use Singleton;

     protected function __construct() {
        //  wp_die( ' Hello' ); // Check if loads
         //load class

         Assets::get_instance();
         $this->setup_hooks();
     }

     protected function setup_hooks() {
        
        /**
         * Actions.
         */

         add_action( 'after_setup_theme', [ $this, 'setup_theme'] );
        
     }

     public function setup_theme() {
         add_theme_support( 'title-tag' );
     }

 }
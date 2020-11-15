<?php
/**
 * Register menus
 * 
 * @package Gemini
 */

 namespace GEMINI_THEME\Inc;

 use GEMINI_THEME\Inc\Traits\Singleton;

 class Menus {
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
        add_action( 'init', [ $this, 'register_menus' ]);
     }

     public function register_menus() {
        register_nav_menus([
            'gemini-header-menu' => esc_html__( 'Header Menu', 'gemini' ),
            'gemini-secondary-menu' => esc_html__( 'Secondary Menu', 'gemini'),
            'gemini-footer-menu' => esc_html__( 'Footer Menu', 'gemini'),
        ]);
     }

 }
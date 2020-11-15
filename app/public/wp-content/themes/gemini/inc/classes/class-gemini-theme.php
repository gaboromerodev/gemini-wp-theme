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

        add_theme_support( 'custom-logo', [
            'header-text' => [ 'site-title', 'site-description' ],
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ]);

        add_theme_support( 'custom-background', [
            'default-color' => '000000',
            'default-image' => '',
            'default-repeat' => 'no-repeat',
        ]);

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 
            'html5', 
             [
                'comment-list', 
                'comment-form', 
                'search-form', 
                'gallery', 
                'caption', 
                'style', 
                'script',
            ]
        );

        add_editor_style();
        add_theme_support( 'wp-block-styles' );

        add_theme_support( 'align-wide' );

        global $content_width;
        if (! isset($content_width)) {
            $content_width = 1024;
        }

     }

 }
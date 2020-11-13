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
         $this->set_hooks();
     }

     protected function set_hooks() {
         //actions and filters
     }
 }
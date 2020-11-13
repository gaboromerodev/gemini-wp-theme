<?php
/**
 * 
 * 
 */

 namespace GEMINI_THEME\Inc\Traits;

 trait Singleton {
     public function __construct() {

     }

     public function __clone() {
        //TODO: Implement __clone() method.
     }

     final public static function get_instance() {
         static $instance = [];

         $called_class = get_called_class();

         if (!isset( $instance[ $called_class] ) ) {
             $instance[ $called_class ] = new $called_class();

             do_action( sprintf( 'gemini_theme_singleton_init%s', $called_class) );
         }

         return $instance[ $called_class ];
     }
 }
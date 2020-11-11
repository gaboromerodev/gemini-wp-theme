<?php
/**
 * Header template
 * 
 * @package Gemini
 */

 ?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport", user-scalable=no, content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Gemini WordPress</title>
</head>
<body <?php body_class(); ?>>

<?php 
if (function_exists('wp_body_open')) { // this is for versions lower than WP 5.2
    wp_body_open();
}; ?>

<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <?php get_template_part( 'template-parts/header/nav' ); ?>
    </header>

    <div id="content" class="site-content">

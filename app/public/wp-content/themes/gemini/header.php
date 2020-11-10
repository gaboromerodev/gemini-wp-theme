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

<?php wp_body_open(); ?>
<header>Header</header>
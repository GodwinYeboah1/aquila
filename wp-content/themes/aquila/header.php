<?php
/**
 * Main header template 
 * 
 * @Pakage Aquila
 */
?>
<!DOCTYPE html>
<!-- <html lang="en"> -->
<!-- dealing with multi site .. we can grab the informaion here -->
<html lang="<?php language_attributes(); ?>">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta charset=<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body  <?php body_class('position-relative'); ?>>
<!-- check for backward compatiabilty  -->
    <?php
        if (function_exists('wp_body_open')){
            wp_body_open();
        }
    ?>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <?php get_template_part('template-parts/header/nav'); ?>
    </header>
    <div id="content" class="site-content">
    <?php get_template_part('template-parts/content', 'page'); ?>
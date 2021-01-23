<?php
/**
 * Theme Functions
 * 
 * @package Aquila
 */

//  echo '<pre>';

//  print_r(get_template_directory_uri());
//  wp_die();

 /**
 * adding css sheets the right way 
*/

function aquila_enqueue_scripts(){
    // filemtime  when css file changes the new timestamp 
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
    wp_enqueue_script('main-js', get_template_directory_uri() .'/assets/main.js', [], filemtime( get_template_directory() . '/assests/main.js'), 'true');
    
    // main css 
    wp_enqueue_style('sass-css', get_template_directory_uri() .'/assets/dist/css/styles.css','true');
    //  bootstrap 
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/assets/src/library/css/bootstrap.min.css','true');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/assets/src/library/js/bootstrap.min.js', ['jquery'],'true');
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');

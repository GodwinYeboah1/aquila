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
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');

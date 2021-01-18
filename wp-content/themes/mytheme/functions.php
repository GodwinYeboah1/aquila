<?php
// load css stylesheet
function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(),
    false,'all');
    wp_enqueue_style('bootstrap');

    /** loading our main css file  */
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(),
    false,'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts','load_css');
// load js stylesheet
function load_js(){
    wp_enqueue_script('jquery');
    
    wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js','jquery',
    false, true);

    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts','load_js');

// adding menu
add_theme_support('menus');
//video 6
add_theme_support('post-thumbnails');
add_theme_support('widgets');


// register menu 
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => "Footer Menu Location",
    )
);

function my_sidebars(){
    register_sidebar(
        array(
            'name'=> 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => "<h4 class='widget-title'>",
            'after_title' => "</h4>"
        )
    );

    register_sidebar(
        array(
            'name'=> 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => "<h4 class='widget-title'>",
            'after_title' => "</h4>"
        )
    );
}
add_action('widgets_init','my_sidebars');

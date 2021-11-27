<?php


// after theme setup
function organi_sb_setup(){
    load_theme_textdomain('organi_sb', get_template_part('/languages'));
    
    // common support
    add_theme_support('title-tag');

    // navigations
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'organi_sb'),
        'cetagory-menu' => __('Cetagory Menu', 'organi_sb)')
    ));
}

add_action( 'after_setup_theme', 'organi_sb_setup');

// Load assests
function organi_sb_assets(){
    // style
    wp_enqueue_style('bootstrap',  get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('font-awesome.min',  get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('elegant-icons',  get_template_directory_uri() . '/css/elegant-icons.css', array(), '1.0.0', 'all');
    wp_enqueue_style('nice-select',  get_template_directory_uri() . '/css/nice-select.css', array(), '1.0.0', 'all');
    wp_enqueue_style('jquery-ui.min',  get_template_directory_uri() . '/css/jquery-ui.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl-carousel',  get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('slicknav',  get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0', 'all');
   // wp_enqueue_style('style',  get_template_directory_uri() . '/css', array(), '1.0.0', 'all'); // demo
    wp_enqueue_style('primary-style',  get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'wp-style', get_stylesheet_uri() );


    // javaScripts files
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/js/mixitup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'scrip', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
    //wp_enqueue_script( 'scrip', get_template_directory_uri() . '/js', array('jquery'), '1.0.0', true ); // demo


}

add_action( 'wp_enqueue_scripts', 'organi_sb_assets' );
// <link rel="stylesheet" href="css/style.css" type="text/css">
?>

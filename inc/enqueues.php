<?php 
function boombit_theme_scripts() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array() );
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-style.css', array() );


    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'),  true );
}

add_action( 'wp_enqueue_scripts', 'boombit_theme_scripts' );
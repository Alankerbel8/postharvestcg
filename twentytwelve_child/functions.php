<?php

function wpse_60056_load_scripts() {

    wp_enqueue_script( 'jquery' );

    wp_register_script( 'jqueryexample', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
    wp_enqueue_script( 'jqueryexample' );

    wp_register_script('test', get_stylesheet_directory_uri() . '/js/extra.js');
    wp_enqueue_script('test');

    wp_register_script('bootjs', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('bootjs');

    wp_register_style('bootcss', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootcss');
    

}    
add_action('wp_enqueue_scripts', 'wpse_60056_load_scripts');
?>
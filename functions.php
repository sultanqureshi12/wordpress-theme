<?php

function register_bootstrap(){
	wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css',false,'1.1','all');
	wp_enqueue_style('bootstrap-script','https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js',false,'1.1','all');
}
add_action('wp_enqueue_scripts', 'register_bootstrap');

 function register_jquery(){     
 	wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', false, '1.1', 'all'); } 
add_action('wp_enqueue_scripts', 'register_jquery');

function register_stylesheet(){     
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, '1.2', 'all');
}
add_action('wp_enqueue_scripts','register_stylesheet');

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
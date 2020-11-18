<?php

function eastern_partnership_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );


    /**
     * Proper way to enqueue scripts and styles
     */
    function style_and_scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/new_custom.css' );
        wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'style_and_scripts' );

    /**
     * Proper way to enqueue local fonts
     */
//    function add_local_fonts() {
//        wp_enqueue_style( 'local_web_fonts', get_stylesheet_directory_uri() . '/assets/fonts/fonts.css' );
//    }
//
//    add_action( 'enqueue_block_assets', 'add_local_fonts' );
}
add_action( 'after_setup_theme', 'eastern_partnership_setup' );








<?php

function tooensure_theme_support() {
    // Adds dynamic title tage support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'tooensure_theme_support');


function tooensure_menus() {

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => 'Footer Menu Item'
    );

    register_nav_menus($locations);
}

add_action( 'init', 'tooensure_menus' );


function tooensure_register_style() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'tooensure-style', get_template_directory_uri() . "/assets/css/style.css",  array( 'tooensure-bootstrap' ), $version, 'all');
    wp_enqueue_style( 'tooensure-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",  array(), '4.4.1', 'all');
    wp_enqueue_style( 'tooensure-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",  array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'tooensure_register_style' );


function tooensure_register_scripts() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script( 'tooensure-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
    wp_enqueue_script( 'tooensure-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
    wp_enqueue_script( 'tooensure-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );
    wp_enqueue_script( 'tooensure-custom', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true );

}

add_action( 'wp_enqueue_scripts', 'tooensure_register_scripts' );
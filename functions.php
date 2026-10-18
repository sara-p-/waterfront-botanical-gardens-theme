<?php


// Header utility nav (front end + editor)
add_action( 'enqueue_block_assets', function () {
    $dir = get_stylesheet_directory();
    $uri = get_stylesheet_directory_uri();

    wp_enqueue_style(
        'header',
        $uri . '/assets/css/header.css',
        array(),
        filemtime( $dir . '/assets/css/header.css' )
    );
    wp_enqueue_style(
        'global',
        $uri . '/assets/css/global.css',
        array(),
        filemtime( $dir . '/assets/css/global.css' )
    );
} );
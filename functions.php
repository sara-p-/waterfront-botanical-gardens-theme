<?php

// Ollie mega menu panels (front end + editor)
add_action( 'init', function () {
    $dir = get_stylesheet_directory();
    $uri = get_stylesheet_directory_uri();

    wp_enqueue_block_style( 'core/navigation', array(
        'handle' => 'mega-menu',
        'src'    => $uri . '/assets/css/mega-menu.css',
        'path'   => $dir . '/assets/css/mega-menu.css',
        'ver'    => filemtime( $dir . '/assets/css/mega-menu.css' ),
    ) );
} );

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
} );
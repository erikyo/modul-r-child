<?php
/**
 * Set up Modul R Child Theme's stylesheet.
 */
function modul_r_theme_style() {
    $theme        = wp_get_theme();
    wp_enqueue_style( 'modul-r-child-style',
        get_stylesheet_directory_uri(). '/assets/dist/styles/main.css',
        null,
        $theme->get( 'Version' ) // This only works if you have Version defined in the style header.
    );
}
add_action( 'wp_enqueue_scripts', 'modul_r_theme_style' );

/**
 * Enqueue child scripts
 */
add_action( 'wp_footer', function() {
    wp_enqueue_script( 'modul-r-child-scripts', get_stylesheet_directory_uri() . '/assets/dist/scripts/child-scripts.js', false, null, true );
    wp_enqueue_style( 'dashicons' );
} );
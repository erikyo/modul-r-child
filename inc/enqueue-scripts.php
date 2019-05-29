<?php

/**
 * Set up Modul R Child Theme's textdomain.
 */
function moduchild_theme_setup() {
	load_child_theme_textdomain( 'modul-r-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'moduchild_theme_setup' );


/**
 * Set up Modul R Child Theme's style.
 */
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_style' );
function enqueue_child_theme_style() {
	wp_enqueue_style( 'modul-r-child', get_stylesheet_uri() );
}



/**
 * load the cookie policy banner
 */
function moduchild_scripts() {

	// Register and Enqueue
	wp_register_script( 'scripts', get_stylesheet_directory_uri() . "/assets/dist/js/scripts.js" , null, null, true );
	wp_enqueue_script( 'scripts' );

	$cookie_args = array(
		'message' => sprintf( __( 'This website uses cookies to improve user experience, memorizing your preferences and monitorizing site funcionality. Check out our <a href="%s">Cookie Policy</a>', 'modul-r-child'), get_site_url() . '/cookie-policy' ),
		'button' => __('Ok, I understand', 'modul-r-child' )
	);

	wp_localize_script( 'scripts', 'args', $cookie_args );
}

add_action( 'wp_enqueue_scripts', 'moduchild_scripts' );
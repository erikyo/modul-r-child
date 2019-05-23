<?php

require_once( get_stylesheet_directory() . '/inc/clean.php' );

/**
 * Set up My Child Theme's textdomain.
 */
function moduchild_theme_setup() {
	load_child_theme_textdomain( 'modu-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'moduchild_theme_setup' );


add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}



/**
 * load the cookie policy banner
 */
function moduchild_scripts() {

	// Register and Enqueue
	wp_register_script( 'scripts', get_stylesheet_directory_uri() . "/assets/dist/js/scripts.js" , null, null, true );
	wp_enqueue_script( 'scripts' );

	$cookie_args = array(
		'message' => __( 'This website uses cookies to improve user experience, memorizing your preferences and monitorizing site funcionality. Check out our <a href="%s">Cookie Policy</a>', get_site_url() . '/cookie-policy' , 'modu-child' ),
		'button' => __('Ok, I understand', 'modu-child' )
	);

	wp_localize_script( 'scripts', 'args', $cookie_args );
}

add_action( 'wp_enqueue_scripts', 'moduchild_scripts' );
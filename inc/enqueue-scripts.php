<?php

/**
 * Set up Modul R Child Theme's textdomain.
 */
function moduchild_theme_setup() {
	load_child_theme_textdomain( 'modul-r-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'moduchild_theme_setup' );



/**
 * load the cookie policy banner
 */

function modul_r_theme_scripts() {
	// Register and Enqueue
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'scripts-vendors', get_template_directory_uri() . "/assets/dist/js/vendor-scripts.js" , array('jquery'), null, true );
	wp_enqueue_script( 'scripts-vendors' );

	wp_register_script( 'scripts-main', get_stylesheet_directory_uri() . "/assets/dist/js/scripts.js" , array('scripts-vendors'), null, true );
	wp_enqueue_script( 'scripts-main' );

	$cookie_args = array(
		'message' => sprintf( __( 'This website uses cookies to improve user experience, memorizing your preferences and monitorizing site funcionality. Check out our <a href="%s">Cookie Policy</a>', 'modul-r-child'), get_site_url() . '/cookie-policy' ),
		'button' => __('Ok, I understand', 'modul-r-child' )
	);

	wp_localize_script( 'scripts-main', 'args', $cookie_args );
}
add_action( 'wp_enqueue_scripts', 'modul_r_theme_scripts' );
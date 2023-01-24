<?php

/**
 * Set up Modul R Child Theme's textdomain.
 */
function moduchild_theme_setup() {
	load_child_theme_textdomain( 'modul-r-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'moduchild_theme_setup' );


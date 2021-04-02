<?php

$modul_r_defaults = array(
	'colors' => array(
		'primary' => '#E53D00',
		'secondary' => '#685876',
		'white' => '#ffffff',
		'white-smoke' => '#f7f7f7',
		'gray-light' => '#e3e3e3',
		'gray' => '#888888',
		'gray-dark' => '#4e4e4e',
		'black' => '#222222',
	),
	'style' => array(
		'background' => 'white-smoke',
		'title-color' => 'black',
		'text-color' => 'black',
		'header-color' => 'white',
		'header-text-color' => 'gray',
		'footer-color' => 'secondary',
		'footer-bottom-color' => 'secondary',
		'footer-text-color' => 'gray',
	)
);

require_once( get_stylesheet_directory() . '/inc/mimetypes.php' );
require_once( get_stylesheet_directory() . '/inc/clean.php' );
require_once( get_stylesheet_directory() . '/inc/masonry.php' );
require_once( get_stylesheet_directory() . '/inc/enqueue-scripts.php' );
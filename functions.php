<?php

$modul_r_defaults = array(
	'colors' => array(
		'primary' => '',
		'secondary' => '',
		'header' => '',
		'white' => '#ffffff',
		'white-smoke' => '#f3f3f3',
		'gray-light' => '#e3e3e3',
		'gray' => '#888888',
		'gray-dark' => '#4e4e4e',
		'black' => '#222222',
	),
);

require_once( get_stylesheet_directory() . '/inc/mimetypes.php' );
require_once( get_stylesheet_directory() . '/inc/clean.php' );
require_once( get_stylesheet_directory() . '/inc/masonry.php' );
require_once( get_stylesheet_directory() . '/inc/enqueue-scripts.php' );
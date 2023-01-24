<?php

$modul_r_defaults = array(
	'colors' => array(
		'primary' => '#1bc2e8',
		'secondary' => '#33658a',
		'white' => '#ffffff',
		'white-smoke' => '#f7f7f7',
		'gray-light' => '#e5e5e5',
		'gray' => '#595959',
		'gray-dark' => '#4e4e4e',
		'black' => '#222222',
    ),
    'style' => array(
        'background' => 'white',
        'title-color' => 'primary',
        'text-color' => 'gray-dark',
        'header-color' => 'white',
        'header-title-color' => 'primary',
        'header-text-color' => 'gray',
        'footer-color' => 'white-smoke',
        'footer-bottom-color' => 'gray-light',
        'footer-text-color' => 'gray',
    ),
    'social_media_enabled' => array( 'Facebook', 'Instagram', 'Twitter', 'Linkedin', 'YouTube', 'www' ),
    'customizer_options' => array(
        'font_family' => array(
            'Montserrat',
            'Source+Sans+Pro',
            'Roboto+Condensed',
            'Oswald',
            'Arvo',
            'Exo+2',
            'Lato',
            'Open+Sans',
            'Roboto',
            'Merriweather',
            'Nunito',
            'Raleway',
            'Roboto+Mono',
            'Roboto+Slab',
            'Slabo',
            'Ubuntu',
            'Lobster',
            'Michroma',
            'Pacifico',
            'Permanent+Marker',
        ),
        'weights' => array( 200, 300, 400, 500, 600, 700, 800, 900 ),
        'color_variance' => 0.3,
        'layout' => array(
            'baseunit' => 8,
            'sidemargin' => 30,
            'content_width' => 900,
            'content_width_wide' => 1500,
            'hero_height_home' => 70,
            'hero_height_default' => 50,
        ),
        'typography' => array(
            array( 'name' => 'line-height', 'default' => 1.3, 'input' => 'number', 'input_type' => 'float' ),
            array( 'name' => 'line-height--wide', 'default' => 1.7, 'input' => 'number', 'input_type' => 'float' ),
            array( 'name' => 'font-size--xs', 'default' => 12, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
            array( 'name' => 'font-size--s', 'default' => 14, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
            array( 'name' => 'font-size--m', 'default' => 17, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
            array( 'name' => 'font-size--l', 'default' => 22, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
            array( 'name' => 'font-size--xl', 'default' => 26, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
            array( 'name' => 'font-size--xxl', 'default' => 40, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
            array( 'name' => 'font-size--xxxl', 'default' => 56, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
        ),
        'font_weight' => array(
            array( 'name' => 'font-weight--bold', 'default' => 600, 'input' => 'select', 'select_type' => 'weights' ),
            array( 'name' => 'font-weight--regular', 'default' => 400, 'input' => 'select', 'select_type' => 'weights' ),
            array( 'name' => 'font-weight--light', 'default' => 300, 'input' => 'select', 'select_type' => 'weights' )
        ),
        'header_sizes' => array(
            array( 'name' => 'branding--max-width', 'default' => 350, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
            array( 'name' => 'branding--height', 'default' => 80, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
            array( 'name' => 'logo--height', 'default' => 80, 'input' => 'number', 'input_type' => 'int', 'unit' => '%' ),
            array( 'name' => 'nav--height', 'default' => 60, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
        ),
        'sizes' => array(
            array( 'name' => 'sidebar--width', 'default' => 420, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' )
        )
    )
);

require_once( get_stylesheet_directory() . '/inc/child-enqueue-scripts.php' );
require_once( get_template_directory() . '/inc/enqueue-scripts.php' );
require_once( get_stylesheet_directory() . '/inc/clean.php' );


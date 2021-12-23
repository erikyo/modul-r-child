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
    'customizer_options' => array(
        'font_family' => array(
            'Montserrat' => array('name'=> 'Montserrat', 'weights' => array(100,200,300,400,500,600,700,800,900) ),
            'Source+Sans+Pro' => array('name'=> 'Source Sans Pro', 'weights' => array(200,300,400,600,700,900) ),
            'Roboto+Condensed' => array('name'=> 'Roboto Condensed', 'weights' => array(300,400,700) ),
            'Oswald' => array('name'=> 'Oswald', 'weights' => array(200,300,400,500,600,700) ),
            'Arvo' => array('name'=> 'Arvo', 'weights' => array(400,700) ),
            'Exo+2'=> array('name'=> 'Exo 2', 'weights' => array(100,200,300,400,500,600,700,800,900) ),
            'Titillium+Web' => array('name'=> 'Titillium Web', 'weights' => array(200,300,400,600,700,900) ),
            'Lato' => array('name'=> 'Lato', 'weights' => array(100,300,400,700,900) ),
            'Open+Sans'=> array('name'=> 'Open Sans', 'weights' => array(300,400,500,600,700,800) ),
            'Roboto' => array('name'=> 'Roboto', 'weights' => array(100,300,400,500,700,900) ),
            'Merriweather' => array('name'=> 'Merriweather', 'weights' => array(300,400,700,900) ),
            'Nunito' => array('name'=> 'Nunito', 'weights' => array(200,300,400,600,700,800,900) ),
            'Raleway' => array('name'=> 'Raleway', 'weights' => array(100,200,300,400,500,600,700,800,900) ),
            'Roboto+Mono' => array('name'=> 'Roboto Mono', 'weights' => array(100,200,300,400,500,600,700) ),
            'Roboto+Slab' => array('name'=> 'Roboto Slab', 'weights' => array(100,200,300,400,500,600,700,800,900) ),
            'Ubuntu' => array('name'=> 'Ubuntu', 'weights' => array(300,400,500,700) ),
            'Lobster' => array('name'=> 'Lobster', 'weights' => array(400) ),
            'Michroma' => array('name'=> 'Michroma', 'weights' => array(400) ),
            'Pacifico' => array('name'=> 'Pacifico', 'weights' => array(400) ),
            'Permanent+Marker' => array('name'=> 'Permanent Marker', 'weights' => array(400) ),
            'Parisienne' => array('name'=> 'Parisienne', 'weights' => array(400) ),
        ),
        'font_styles' => array(
            "title_font-family" => array( 'name' => 'font-family', 'default' => 'Montserrat', 'input' => 'select', 'type' => 'font_family', 'for' => 'title' ),
            "title_font-weight" => array( 'name' => 'font-weight', 'default' => 600, 'input' => 'select', 'type' => 'font_weight', 'for' => 'title' ),
            "text_font-family" => array( 'name' => 'font-family', 'default' => 'Montserrat', 'input' => 'select', 'type' => 'font_family', 'for' => 'text' ),
            "text_bold" => array( 'name' => 'bold', 'default' => 600, 'input' => 'select', 'type' => 'font_weight', 'for' => 'text' ),
            "text_regular" => array( 'name' => 'regular', 'default' => 400, 'input' => 'select', 'type' => 'font_weight', 'for' => 'text' ),
            "text_light" =>  array( 'name' => 'light', 'default' => 300, 'input' => 'select', 'type' => 'font_weight', 'for' => 'text' )
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
        'social_media_enabled' => array( 'Facebook', 'Instagram', 'Twitter', 'Linkedin', 'YouTube', 'www' ),
        'color_variance' => 0.3,
        'layout' => array(
            'baseunit' => 8,
            'content_width' => 900,
            'content_width_wide' => 1500,
            'hero_height_home' => 70,
            'hero_height_default' => 50,
        ),
        'header_sizes' => array(
            array( 'name' => 'branding--max-width', 'default' => 350, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
            array( 'name' => 'branding--height', 'default' => 80, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
            array( 'name' => 'logo--height', 'default' => 80, 'input' => 'number', 'input_type' => 'int', 'unit' => '%' ),
            array( 'name' => 'nav--height', 'default' => 60, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
        ),
        'sizes' => array(
            array( 'name' => 'sidebar--width', 'default' => 420, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' ),
            array( 'name' => 'footer-widget--width', 'default' => 300, 'input' => 'number', 'input_type' => 'int', 'unit' => 'px' )
        )
    )
);

require_once( get_stylesheet_directory() . '/inc/mimetypes.php' );
require_once( get_stylesheet_directory() . '/inc/clean.php' );
require_once( get_stylesheet_directory() . '/inc/masonry.php' );
require_once( get_stylesheet_directory() . '/inc/enqueue-scripts.php' );
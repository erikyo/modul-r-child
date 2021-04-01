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

function modul_r_archive_image( $class = null ) {
	// Check if Thumbnail exists
	if ( has_post_thumbnail() ) : ?>
		<div class="entry-image hero fullpage-hero interactive<?php echo ' ' . esc_attr($class); ?>">
			<div class="entry-image">
				<?php the_post_thumbnail( 'modul-r-fullwidth', array( 'class' => 'fit-image wp-post-image' ) ); ?>
			</div>
			<div class="hero-title text-center">
				<span class="category-payoff background-text text-outline">MADE IN ITALY</span>
				<?php the_archive_title( '<h1 class="page-title main-width has-title-color">', '</h1>' ); ?>
				<?php if (is_author()) {
					printf('<p>%s</p>', esc_html(get_the_author_meta( 'description' )) );
				} else {
					the_archive_description();
				} ?>
			</div>
		</div>
	<?php endif;
}
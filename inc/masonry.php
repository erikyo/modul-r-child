<?php

/**
 * Enqueue the masonry scripts
 */

// A category load the masonry scripts
function modul_r_masonryScripts(){

	// customize with your category which will displayed with the masonry layout
	if(is_category()){
		wp_enqueue_script( 'imagesloaded', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array('jquery', 'vendors-scripts'), null, true );
		wp_enqueue_script( 'masonry4', '//unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js' , array('imagesloaded',), null, true );
	}
}
add_action('wp_enqueue_scripts', 'modul_r_masonryScripts');


function modul_r_category_query( $query ) {
// do not alter the query on wp-admin pages and only alter it if it's the main query
	if (!is_admin() && $query->is_main_query()){

		// alter the query for categories
		if(is_category()){
			$query->set('posts_per_page', 3);
		}

	}
}
add_action( 'pre_get_posts', 'modul_r_category_query' );

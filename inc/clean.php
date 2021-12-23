<?php

// Remove Actions
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
// remove_action( 'wp_head', 'rel_canonical' );
// remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
// remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
// remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
// remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Remove Windows live writer
remove_action( 'wp_head', 'rsd_link' ); // Remove EditURI link

// Disable xmlrpc
//https://developer.wordpress.org/reference/hooks/xmlrpc_enabled/
add_filter('xmlrpc_enabled', '__return_false');

// Add Filters
//add_filter('show_admin_bar', '__return_false'); // Disable Admin Bar for All Users Except for Administrators

// remove rest endpoint that expose users and users emails
add_filter( 'rest_endpoints', function( $endpoints ){
    if ( ! is_user_logged_in() ) {
        if ( isset( $endpoints['/wp/v2/users'] ) ) {
            unset( $endpoints['/wp/v2/users'] );
        }
        if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
            unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
        }
    }
    return $endpoints;
});

// Remove the prefix before the category title
add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	} elseif ( is_tax() ) { //for custom post types
		$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title( '', false );
	}
	return $title;
});

/* set a max with for srcset (prevents the page from growing enormously in size if png is used) */
add_filter('max_srcset_image_width', function($max_srcset_image_width, $size_array){
    return 800;
}, 10, 2);